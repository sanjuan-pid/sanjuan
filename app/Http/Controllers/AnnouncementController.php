<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;


class AnnouncementController extends Controller
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
        // $ann = Announcement::all()->toArray();
        $ann = News::where('status', 1)
               ->where('content_type', 'Announcement')
               ->where('content_tag', '0')
               ->orderBy('created_at')
               ->get();
        return view('admin.announcment.list', compact('ann'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announcment.announcement');
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
            'title' => 'required',
            'description' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $hide = DB::table('news')
        ->where('id', '!=', 0)
        ->where('content_type', '=', "Announcement")
        ->update(['show' => 0]);

        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('Announcement/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $ann = new News();
        $ann->title = $request->title;
        $ann->desc = $request->description;
        $ann->filename = $request->filename;
        $ann->status = 1;
        $ann->show = 0;
        $ann->content_type = "Announcement";
        $ann->content_tag = 0;
        $ann->filename = 'Announcement/'.$cover->getFilename().'.'.$extension;
        $ann->save();
        //to redirect
        return redirect()->route('admin.announcment.announcement')->with('success','Data Added');
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
        $ann = News::find($id); 
        return view('admin.announcment.edit',compact('ann', 'id'));
       
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
           
        ]);

        if($request->file('filename') != null){
            $cover = $request->file('filename');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('Announcement/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Announcement/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('filename_');
        }
        $ann_update = News::find($id);
        $ann_update->title = $request->get('title');
        $ann_update->desc = $request->get('description');
        $ann_update->filename = $filename;

        $ann_update->save();
        return redirect()->route('admin.announcment.announcement')->with('success','Announcement updated!');
        
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
        $ann_update = News::find($id);
        $ann_update->status = 0;
        $ann_update->save();
        return redirect()->route('admin.announcment.announcement')->with('success', 'Announcement is removed from the list!');
    }


    public function makefirst(Request $request)
    {
        $id = $request->id;
            $hide = DB::table('News')
                ->where('id', '!=', $id)
                ->update(['show' => 0]);
            $show = DB::table('News')
                ->where('id', '=', $id)
                ->update(['show' => 1]);
            // $news = mayors::find($id);
            // $news->status = 1;
            // $news->save();
            return redirect()->route('admin.announcment.announcement')->with('success', 'Announcement is alread moved first');
    }
}
