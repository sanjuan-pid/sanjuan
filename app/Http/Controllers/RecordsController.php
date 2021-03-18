<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RecordsController extends Controller
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
        $users = user::all()->toArray(); //database name ung cients_final
        return view('admin.records_user.records', compact('users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.records_user.records_insert');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //para marequire nya ung sa form
        $this->validate($request,[
            'email' => 'required',
            'name' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);
        //get values ng mga nasa form to save
        $user = new user([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'password' => $request->get('password')
        ]);
        $user->save();
        //to redirect
        return redirect()->route('admin.records_user.records')->with('success','User Added: '.$request->get('email'));
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
        $users = user::find($id); // where id sa loob ng clients final
        return view('admin.records_user.records_edit',compact('users', 'id'));
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
            'address' => 'required',
        ]);
        $record_insert = user::find($id);
        $record_insert->email = $request->get('email');
        $record_insert->name = $request->get('name');
        $record_insert->address = $request->get('address');
        $record_insert->save();
        return redirect()->route('admin.records_user.records')->with('success','Update User : '.$request->get('email'));
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
        $records_user = user::find($id);
        $records_user->delete();
        return redirect()->route('admin.records_user.records')->with('success', 'User: '.$records_user->email.' is already deleted');
    }
}
