<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class ProgramsController extends Controller
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
        // $ann = Announcement::all()->toArray();
        $programs = News::where('status', 1)
               ->where('content_type', 'Programs')
               ->where('content_tag', 'vm')
               ->orderBy('created_at')
               ->get();
        return view('admin.vice-mayor.programs.prog_list', compact('programs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vice-mayor.programs.prog_create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $hide = DB::table('news')
        // ->where('id', '!=', 0)
        // ->where('content_tag', '=', 'vm')
        // ->where('content_type', '=', 'Programs')
        // ->update(['show' => 0]);

        //para marequire nya ung sa form
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('News/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $ann = new News();
        $ann->title = $request->title;
        $ann->desc = $request->description;
        $ann->filename = $request->filename;
        $ann->status = 1;
        $ann->show = 1;
        $ann->content_type = "Programs";
        $ann->content_tag = "VM";
        
        
        $ann->filename = 'News/'.$cover->getFilename().'.'.$extension;
        $ann->save();


        //to redirect
        return redirect()->route('admin.vice-mayor.programs.prog_list')->with('success','Data Added');
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
        $news = news::find($id); 
        return view('admin.vice-mayor.programs.prog_edit',compact('news', 'id'));
       
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
        $update = News::find($id);
        $update->title = $request->get('title');
        $update->desc = $request->get('description');
        $update->filename = $filename;

        $update->save();
        return redirect()->route('admin.vice-mayor.programs.prog_list')->with('success','Data Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $news = news::find($id);
        $news->status = 0;
        $news->save();
        return redirect()->route('admin.vice-mayor.programs.prog_list')->with('success', 'Program is already removed');
    }
    public function makefirst(Request $request)
    {
        // $id = $request->id;
        //     $hide = DB::table('news')
        //         ->where('id', '!=', $id)
        //         ->update(['show' => 0]);
        //     $show = DB::table('news')
        //         ->where('id', '=', $id)
        //         ->update(['show' => 1]);
        //     // $news->save();

        //     return redirect()->route('admin.vice-mayor.news.index')->with('success', 'Content is already moved first');
    }
}