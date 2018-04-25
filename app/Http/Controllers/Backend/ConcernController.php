<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Concern;
use Illuminate\Http\Request;
use Storage;

class ConcernController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concerns = Concern::orderBy('id', 'desc')->get();
        return view('backend.concern.index', compact('concerns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.concern.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required|image|max:2048',
            'on_hover_logo' => 'nullable|image|max:2048',
            'image' => 'required|image|max:2048'
        ]);
        $logo = $request->file('logo');
        $on_hover_logo = $request->file('on_hover_logo');
        $image = $request->file('image');
        if($logo && $image) {
            $logoImg = Storage::disk('uploads')->put('concern',$logo);
            $imageImg = Storage::disk('uploads')->put('concern',$image);
        }
        if($on_hover_logo) {
            $onhoverlogoImg = Storage::disk('uploads')->put('concern',$on_hover_logo);
        }
        $concern = Concern::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $logoImg,
            'on_hover_logo' => $onhoverlogoImg?:null,
            'image' => $imageImg,
        ]);
        return redirect()->route('concern.index')->with('success', 'Concern data have been save successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concern = Concern::find($id);
        return view('backend.concern.edit', compact('concern'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => '',
            'description' => '',
            'logo' => '',
            'on_hover_logo' => '',
            'image' => ''
        ]);
        $concern = Concern::find($id);
        $logoUpdate = $concern->logo;
        $onHoverLogoUpdate = $concern->on_hover_logo;
        $imageUpdate = $concern->image;

        // for image update
        if($logo = $request->file('logo'))
        {
            $logoUpdate = Storage::disk('uploads')->put('concern',$logo);
            Storage::disk('uploads')->delete($concern->logo);
        }
        if($image = $request->file('image'))
        {
            $imageUpdate = Storage::disk('uploads')->put('concern',$image);
            Storage::disk('uploads')->delete($concern->image);
        }
        if($on_hover_logo = $request->file('on_hover_logo'))
        {
            $onHoverLogoUpdate = Storage::disk('uploads')->put('concern',$on_hover_logo);
            Storage::disk('uploads')->delete($concern->on_hover_logo);
        }
        // for info update
        $concern->update($request->except('logo', 'on_hover_logo', 'image')+[
            'logo' => $logoUpdate,
            'on_hover_logo' => $onHoverLogoUpdate,
            'image' => $imageUpdate,
        ]);

        return redirect()->route('concern.index')->with('success', 'Concern data have been update successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concern = Concern::find($id);
        $copy = $concern;
        
        if($concern->delete())
            Storage::disk('uploads')
                ->delete([$copy->logo,$copy->on_hover_logo,$copy->image]);

        return redirect()->route('concern.index')->with('danger', 'Concern data have been deleted successfully !');
    }
}
