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
        $this->middleware('auth');
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
        ->where('content_type', '=', 'Events')
        ->update(['show' => 0]);

        //para marequire nya ung sa form
        $this->validate($request,[
            'Event_Title' => 'required',
            'Event_Desc' => 'required',
            
        ]);
        
        $cover = $request->file('Event_Image');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('events/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $ann = new News();
        $ann->title = $request->Event_Title;
        $ann->desc = $request->Event_Desc;
        $ann->filename = $request->Event_Image;
        $ann->status = 1;
        $ann->show = 0;
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
            'Event_Title' => 'required',
            'Event_Desc' => 'required',
           
        ]);

        if($request->file('Event_Image') != null){
            $cover = $request->file('Event_Image');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('Announcement/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Announcement/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('Event_Image_Recent');
        }
        $update = News::find($id);
        $update->title = $request->get('Event_Title');
        $update->desc = $request->get('Event_Desc');
        $update->filename = $filename;

        $update->save();
        return redirect()->route('admin.events.events_list')->with('success','Event Updated');
        
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
