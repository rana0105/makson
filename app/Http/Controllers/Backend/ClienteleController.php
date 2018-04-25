<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Clientele;
use Illuminate\Http\Request;
use Storage;

class ClienteleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienteles = Clientele::orderBy('id', 'desc')->get();
        return view('backend.clientele.index', compact('clienteles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.clientele.create');
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
            'title' => 'nullable',
            'logo' => 'required|image|max:2048'
        ]);
        if($logo = $request->file('logo')){
           $logoImg = Storage::disk('uploads')->put('clientele',$logo);
        }
        $clientele = Clientele::create($request->except('logo')+['logo' => $logoImg]);
        return redirect()->route('clientele.index')->with('success', 'Clientele logo created successfully !');
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
        $clientele = Clientele::find($id);
        return view('backend.clientele.edit', compact('clientele'));
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
            'title' => 'nullable',
            'logo' => ''
        ]);
        $clientele = Clientele::find($id);
        $logoFile = $clientele->logo;
        if($logo = $request->file('logo')){
            $logoFile = Storage::disk('uploads')->put('clientele',$logo);
            Storage::disk('uploads')->delete($clientele->logo);
        }
        // clientele info update
        $clientele->update($request->except('logo')+['logo' => $logoFile]);

        return redirect()->route('clientele.index')->with('success', 'Clientele logo upadated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientele = Clientele::find($id);
        $copy = $clientele;
        
        if($clientele->delete())
            Storage::disk('uploads')
                ->delete($copy->logo);
        return redirect()->route('clientele.index')->with('danger', 'Clientele logo deleted successfully !');
    }
}
