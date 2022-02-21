<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Magazine;
use App\News;
use App\Announcement;
use App\Department_Main;
use App\Department_Content;


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
        $Magazine = Magazine::all()->count();
        $News = News::where('content_type','News')->where('status','1')->count();
        $Forms = Department_Content::where('dept_content_type','Forms')->where('dept_content_tag','Show')->count();
        $Announcement = News::where('content_type','Announcement')->where('status','1')->count();
        $Departments_Institutional = Department_Main::where('dept_sector','Institutional Development')->count();
        // $admins = admin::all(); //database name ung admin table
        // $users = user::all(); //database name ung user
         return view('admin.admin', compact('Magazine','Departments_Institutional','News','Announcement','Forms'));
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
