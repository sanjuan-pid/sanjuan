<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Achievement;


class AchievementsController extends Controller
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
        
        $achievement = Achievement::where('status', 1)
               ->orderBy('created_at')
               ->get();
        // return ($redirectTo);
        return view('admin.achievement.congressman-list', compact('achievement'));
        //
    }
    public function create()
    {
        return view('admin.achievement.create');
    }
    public function store(Request $request)
    {
        //para marequire nya ung sa form
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $redirectTo =$request->content_tag;
        $ann = new Achievement();
        $ann->title = $request->title;
        $ann->description = $request->description;
        $ann->status = 1;
        $ann->show_ = 0;
        $ann->content_tag = $request->content_tag;
        
        // return ($redirectTo);
        $ann->save();
        //to redirect
        //  return view('/admin/achievement/'.$redirectTo.'-list');
        if($redirectTo == "atty_b"){
            $redirectTo="congressman";
            return redirect()->route('admin.achievement.'.$redirectTo.'-list')->with('success', 'Data inserted');
        }
        else{
        return redirect()->route('admin.achievement.'.$redirectTo.'-list')->with('success', 'Data inserted');
        }
    }

    public function edit($id)
    {
        $Achievement = Achievement::find($id); 
        return view('admin.achievement.edit',compact('Achievement', 'id'));
       
    }
    public function update(Request $request, $id)
    {
        $redirectTo =$request->content_tag;
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
           
        ]);
        $redirectTo =$request->content_tag;
        $ann_update = Achievement::find($id);
        $ann_update->title = $request->get('title');
        $ann_update->description = $request->get('description');

        $ann_update->save();

        if($redirectTo == "atty_b"){
            $redirectTo="congressman";
            return redirect()->route('admin.achievement.'.$redirectTo.'-list')->with('success', 'Data inserted');
        }
        else{
        return redirect()->route('admin.achievement.'.$redirectTo.'-list')->with('success', 'Data inserted');
        }
    }

    public function mayor()
    {
        // $ann = Announcement::all()->toArray();
        $achievement = Achievement::where('status', 1)
               ->orderBy('created_at')
               ->get();
        return view('admin.achievement.mayors-list', compact('achievement'));
        //
    }
    public function destroy($id)
    {
        //
        $ann_update = Achievement::find($id);
        $ann_update->status = 0;
        $ann_update->save();
        return redirect()->route('admin.achievement.mayors-list')->with('success', 'Article is already removed');
    }
    public function vm()
    {
        // $ann = Announcement::all()->toArray();
        $achievement = Achievement::where('status', 1)
               ->orderBy('created_at')
               ->get();
        return view('admin.achievement.vm-list', compact('achievement'));
        //
    }
}
