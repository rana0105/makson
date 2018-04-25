<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Dreport;
use Illuminate\Http\Request;
use Storage;

class DreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dreports = Dreport::orderBy('id', 'desc')->get();
        return view('backend.dreport.index', compact('dreports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.dreport.create');
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
            $saveFile = Storage::disk('uploads')->put('dreport', $file);
            // $saveFile = Storage::disk('public')->put('dreport',$file);
        }
        Dreport::create($request->except('file')+['file' => $saveFile]);
        return redirect()->route('dreport.index')->with('success', 'dreport file created successfully !');
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
        $dreport = Dreport::find($id);
        return view('backend.dreport.edit', compact('dreport'));
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
        $dreport = Dreport::find($id);
        // for dreport file update
        $fileSave = $dreport->file;
        if($file = $request->file('file')){
            $fileSave = Storage::disk('uploads')->put('dreport', $file);
            // $fileSave = Storage::disk('public')->put('dreport',$file);
            Storage::disk('uploads')->delete($dreport->file);
        }
        // dreport info update
        $dreport->update($request->except('file')+['file' => $fileSave]);

        return redirect()->route('dreport.index')->with('success', 'dreport file upadated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dreport = Dreport::find($id);
        $copy = $dreport;
        
        if($dreport->delete())
            Storage::disk('uploads')
                ->delete($copy->file);
        return redirect()->route('dreport.index')->with('danger', 'dreport file deleted successfully !');
    }
}
