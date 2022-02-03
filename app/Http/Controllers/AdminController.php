<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = admin::all(); //database name ung admin table
        $users = user::all(); //database name ung user
         return view('admin.admin', compact('admins','users'));
        // return view('admin.admin');
    }
    public function store(Request $request)
    {
        //para marequire nya ung sa form
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'job_title' => 'required',
            'password' => 'required'
        ]);
        //get values ng mga nasa form to save
        $clients = new admin([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'password' => $request->get('password')
        ]);
         $clients->save();
        //to redirect
        return redirect()->route('admin.dashboard')->with('success','Data Added');
        
    }
}
