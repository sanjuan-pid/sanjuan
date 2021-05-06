<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activity;

class ActivityController extends Controller
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
        // // $ann = Announcement::all()->toArray();
        // $redirectTo = $_GET["content_type"];
        $act = DB::select('select * from activity
            where status = 1 
            order by created_at desc;');
        // return ($redirectTo);
        return view('admin.activity.act-list', compact('act'));
        //
    }
    public function create(){
        return view('admin.activity.act-create');
    }
    public function store(Request $request)
    {
        //para marequire nya ung sa form
        $this->validate($request,[
            'filename' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $act = new activity();
        $act->filename = $request->filename;
        $act->title = $request->title;
        $act->description = $request->description;
        $act->show_ = "";
        $act->content_tag = "";
        $act->status = 1;
        $act->save();
        
        return redirect()->route('admin.activity.act-list')->with('success','Data Added');
    }
    public function edit($id)
    {
        $act = activity::find($id); 
        return view('admin.activity.act-edit',compact('act', 'id'));
       
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);
        // dd($request->get('description'));
        $act_update = activity::find($id);
        $act_update->filename = $request->get('filename');
        $act_update->title = $request->get('title');
        $act_update->description = $request->get('description');
        $act_update->save();

        return redirect()->route('admin.activity.act-list')->with('success', 'Data inserted');
        
    }
}
