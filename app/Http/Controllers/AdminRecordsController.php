<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Admin;
class AdminRecordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.records');
        $admin = admin::all()->toArray(); //database name ung cients_final
        return view('admin.records_admin.records', compact('admin'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.records_admin.records_insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //para marequire nya ung sa form
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
            'job_title' => 'required',
            'password' => 'required',
            'filename' => 'required',
        ]);
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $admin = new admin();
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->job_title = $request->job_title;
        $admin->password = Hash::make($request->password);
        //$admin->filename = $cover->getClientOriginalName();
        $admin->filename = $cover->getFilename().'.'.$extension;
        $admin->save();
        //to redirect
        return redirect()->route('admin.records_admin.records')->with('success','Admin Added: '.$request->get('email'));
        
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
        //return view('admin.records_user.record_edit');
        //
        $admin = admin::find($id); // where id sa loob ng clients final
        return view('admin.records_admin.records_edit',compact('admin', 'id'));
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
        //
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
            'job_title' => 'required',
        ]);
        $record_insert = admin::find($id);
        $record_insert->email = $request->get('email');
        $record_insert->name = $request->get('name');
        $record_insert->job_title = $request->get('job_title');
        $record_insert->save();
        return redirect()->route('admin.records_admin.records')->with('success','Update User : '.$request->get('email'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $records_admin = admin::find($id);
        $records_admin->delete();
        return redirect()->route('admin.records_admin.records')->with('success', 'User: '.$records_admin->email.' is already deleted');
    }
}
