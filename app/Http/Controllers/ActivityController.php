<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activity;
use App\News;

class ActivityController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
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
        $act = DB::select('select * from news
            where status = 1 
            and content_type = "Act"
            order by created_at desc;');
        return view('admin.activity.act-list', compact('act'));
        //
    }
    public function create(){
        return view('admin.activity.act-create');
    }
    public function store(Request $request)
    {

        $hide = DB::table('news')
        ->where('id', '!=', 0)
        ->where('content_type', '=', "Act")
        ->update(['show' => 0]);

        
        $this->validate($request,[
            'Act_Title' => 'required',
            'Act_Desc' => 'required',
            'Act_Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $cover = $request->file('Act_Image');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('Activity/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $ann = new News();
        $ann->title = $request->Act_Title;
        $ann->desc = $request->Act_Desc;
        $ann->filename = $request->Act_Image;
        $ann->status = 1;
        $ann->show = 1;
        $ann->content_type = "Act";
        $ann->content_tag = 0;
        
        
        $ann->filename = 'Activity/'.$cover->getFilename().'.'.$extension;
        $ann->save();
        return redirect()->route('admin.activity.act-list')->with('success','Data Added');
    }
    public function edit($id)
    {
        $act = news::find($id); 
        return view('admin.activity.act-edit',compact('act', 'id'));
       
    }
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'Act_Title' => 'required',
            'Act_Desc' => 'required',
           
        ]);

        if($request->file('Act_Image') != null){
            $cover = $request->file('Act_Image');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('Activity/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Activity/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('Act_Image_Recent');
        }
        $update = News::find($id);
        $update->title = $request->get('Act_Title');
        $update->desc = $request->get('Act_Desc');
        $update->filename = $filename;

        $update->save();
        return redirect()->route('admin.activity.act-list')->with('success','Activity Updated');
        
    }
    public function destroy($id)
    {
        $news = news::find($id);
        $news->status = 0;
        $news->save();
        return redirect()->route('admin.activity.act-list')->with('success', 'Activity is already removed');
    }
}
