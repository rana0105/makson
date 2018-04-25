<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Qreport;
use Illuminate\Http\Request;
use Storage;

class QreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qreports = Qreport::orderBy('id', 'desc')->get();
        return view('backend.qreport.index', compact('qreports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.qreport.create');
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
            $saveFile = Storage::disk('uploadsuploads')->put('qreport',$file);
        }
        Qreport::create($request->except('file')+['file' => $saveFile]);
        return redirect()->route('qreport.index')->with('success', 'Qreport file created successfully !');
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
        $qreport = Qreport::find($id);
        return view('backend.qreport.edit', compact('qreport'));
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
        $qreport = Qreport::find($id);
        // for qreport file update
        $fileSave = $qreport->file;
        if($file = $request->file('file')){
            $fileSave = Storage::disk('uploads')->put('qreport',$file);
            Storage::disk('uploads')->delete($qreport->file);
        }
        // qreport info update
        $qreport->update($request->except('file')+['file' => $fileSave]);

        return redirect()->route('qreport.index')->with('success', 'Qreport file upadated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qreport = Qreport::find($id);
        $copy = $qreport;
        
        if($qreport->delete())
            Storage::disk('uploads')
                ->delete($copy->file);
        return redirect()->route('qreport.index')->with('danger', 'Qreport file deleted successfully !');
    }
}
