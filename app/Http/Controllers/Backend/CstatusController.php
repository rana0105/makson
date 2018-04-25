<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Cstatus;
use Illuminate\Http\Request;
use Storage;

class CstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cstatuses = Cstatus::orderBy('id', 'desc')->get();
        return view('backend.cstatus.index', compact('cstatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cstatus.create');
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
            $saveFile = Storage::disk('uploads')->put('cstatus',$file);
        }
        Cstatus::create($request->except('file')+['file' => $saveFile]);
        return redirect()->route('cstatus.index')->with('success', 'Cstatus file created successfully !');
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
        $cstatus = Cstatus::find($id);
        return view('backend.cstatus.edit', compact('cstatus'));
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
        $cstatus = Cstatus::find($id);
        // for cstatus file update
        $fileSave = $cstatus->file;
        if($file = $request->file('file')){
            $fileSave = Storage::disk('uploadsuploads')->put('cstatus',$file);
            Storage::disk('uploadsuploads')->delete($cstatus->file);
        }
        // cstatus info update
        $cstatus->update($request->except('file')+['file' => $fileSave]);

        return redirect()->route('cstatus.index')->with('success', 'Cstatus file upadated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cstatus = Cstatus::find($id);
        $copy = $cstatus;
        
        if($cstatus->delete())
            Storage::disk('uploads')
                ->delete($copy->file);
        return redirect()->route('cstatus.index')->with('danger', 'Cstatus file deleted successfully !');
    }
}
