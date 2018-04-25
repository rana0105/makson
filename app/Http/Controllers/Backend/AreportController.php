<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Areport;
use Illuminate\Http\Request;
use Storage;

class AreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areports = Areport::orderBy('id', 'desc')->get();
        return view('backend.areport.index', compact('areports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.areport.create');
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
            'company' => 'required',
            'title' => 'required',
            'file' => 'required|mimes:pdf'
        ]);
        // dd($request->all());
        if($file = $request->file('file')) {
            $saveFile = Storage::disk('uploads')->put('areport', $file);
            // $saveFile = Storage::disk('public')->put('areport',$file);
        }
        Areport::create($request->except('file')+['file' => $saveFile]);
        return redirect()->route('areport.index')->with('success', 'Areport file created successfully !');
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
        $areport = Areport::find($id);
        return view('backend.areport.edit', compact('areport'));
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
            'company' => '',
            'title' => '',
            'file' => ''
        ]);
        $areport = Areport::find($id);
        // for areport file update
        $fileSave = $areport->file;
        if($file = $request->file('file')){
            $fileSave = Storage::disk('uploads')->put('areport', $file);
            // $fileSave = Storage::disk('public')->put('areport',$file);
            Storage::disk('uploads')->delete($areport->file);
        }
        // areport info update
        $areport->update($request->except('file')+['file' => $fileSave]);

        return redirect()->route('areport.index')->with('success', 'Areport file upadated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $areport = Areport::find($id);
        $copy = $areport;
        
        if($areport->delete())
            Storage::disk('uploads')
                ->delete($copy->file);
        return redirect()->route('areport.index')->with('danger', 'Areport file deleted successfully !');
    }
}
