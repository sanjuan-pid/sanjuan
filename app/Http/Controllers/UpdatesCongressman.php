<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class UpdatesCongressman extends Controller
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
        $programs_cong = News::where('status', 1)
               ->where('content_type', 'Updates')
               ->orderBy('created_at')
               ->get();
        // echo $programs_cong;
        return view('admin.congressman.updates.updates_list', compact('programs_cong'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.congressman.updates.updates_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$hide_var =  $request->content_tag;
        $hide = DB::table('news')
        ->where('id', '!=', 0)
        ->where('content_tag', '=', $hide_var)
        ->where('content_type', '=', 'Updates')
        ->update(['show' => 0]);

		echo $hide . $hide_var;
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
        $ann->content_tag = $request->content_tag;
        $ann->status = 1;
        $ann->show = 1;
        $ann->content_type = "Updates";


        $ann->filename = 'News/'.$cover->getFilename().'.'.$extension;
        $ann->save();

        echo $request->content_tag;
        //to redirect
        return redirect()->route('admin.congressman.updates.updates_list')->with('success','Data Added');
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
        return view('admin.congressman.updates.updates_edit',compact('news', 'id'));

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
            Storage::disk('public')->put('News/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'News/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('filename_');
        }
        $update = News::find($id);
        $update->title = $request->get('title');
        $update->desc = $request->get('description');
        $update->content_tag = $request->get('content_tag');
        $update->filename = $filename;

        $update->save();
        return redirect()->route('admin.congressman.updates.updates_list')->with('success','Data Updated');

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
        return redirect()->route('admin.congressman.updates.updates_list')->with('success', 'Program is already removed');
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
