<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;


class EventsController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {        
        $events = News::where('status', 1)
            ->where('content_type', 'Events')
            ->orderBy('created_at')
            ->get();
        return view('admin.events.events_list', compact('events'));
    }
    public function create()
    {        
        // $events = Events::where('status', 1)
        //     ->orderBy('created_at')
        //     ->get();
        return view('admin.events.events_create');
    }
    public function store(Request $request)
    {

        $hide = DB::table('news')
        ->where('id', '!=', 0)
        ->update(['show' => 0]);

        //para marequire nya ung sa form
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            
        ]);
        
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('events/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $ann = new News();
        $ann->title = $request->title;
        $ann->desc = $request->description;
        $ann->filename = $request->filename;
        $ann->status = 1;
        $ann->show = 1;
        $ann->content_type = "Events";
        $ann->content_tag = 0;
        
        
        $ann->filename = 'Events/'.$cover->getFilename().'.'.$extension;
        $ann->save();
        //to redirect
        return redirect()->route('admin.events.events_list')->with('success','Data Added');
    }
     /* Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ann = News::find($id); 
        return view('admin.events.events_edit',compact('ann', 'id'));
       
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
            Storage::disk('public')->put('Announcement/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Announcement/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('filename_');
        }
        $update = News::find($id);
        $update->title = $request->get('title');
        $update->desc = $request->get('description');
        $update->filename = $filename;

        $update->save();
        return redirect()->route('admin.events.events_list')->with('success','Data Updated');
        
    }

    public function destroy($id)
    {
        //
        $ann_update = News::find($id);
        $ann_update->status = 0;
        $ann_update->save();
        return redirect()->route('admin.events.events_list')->with('success', 'Article is already removed');
    }

}
