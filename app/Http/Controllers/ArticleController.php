<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activity;
use App\News;

class ArticleController extends Controller
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
        $act = DB::select('select * from news
            where status = 1 
            and content_type = "Art"
            order by created_at desc;');
        return view('admin.article.art-list', compact('act'));
        //
    }
    public function create(){
        return view('admin.article.art-create');
    }
    public function store(Request $request)
    {

        $hide = DB::table('news')
        ->where('id', '!=', 0)
        ->where('content_type', '=', "Art")
        ->update(['show' => 0]);

        
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('Activity/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $ann = new News();
        $ann->title = $request->title;
        $ann->desc = $request->description;
        $ann->filename = $request->filename;
        $ann->status = 1;
        $ann->show = 1;
        $ann->content_type = "Art";
        $ann->content_tag = 0;
        
        
        $ann->filename = 'Activity/'.$cover->getFilename().'.'.$extension;
        $ann->save();
        return redirect()->route('admin.article.art-list')->with('success','Data Added');
    }
    public function edit($id)
    {
        $act = news::find($id); 
        return view('admin.article.art-edit',compact('act', 'id'));
       
    }
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
           
        ]);

        if($request->file('filename') != null){
            $cover = $request->file('filename');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('Activity/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Activity/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('filename_');
        }
        $update = News::find($id);
        $update->title = $request->get('title');
        $update->desc = $request->get('description');
        $update->filename = $filename;

        $update->save();
        return redirect()->route('admin.article.art-list')->with('success','Data Updated');
        
    }
    public function destroy($id)
    {
        $news = news::find($id);
        $news->status = 0;
        $news->save();
        return redirect()->route('admin.article.art-list')->with('success', 'Activity is already removed');
    }
}
