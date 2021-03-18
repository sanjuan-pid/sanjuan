<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
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
        // $news = News::where('status', 1)
        //        ->orderBy('created_at')
        //        ->get();
        return view('admin.qr.list_qr');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.news.create');
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
        // $this->validate($request,[
        //     'title' => 'required',
        //     'description' => 'required',
        //     'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        // $cover = $request->file('filename');
        // $extension = $cover->getClientOriginalExtension();
        // Storage::disk('public')->put('News/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        // //get values ng mga nasa form to save
        // $news = new news();
        // $news->title = $request->title;
        // $news->desc = $request->description;
        // $news->filename = $request->filename;
        // $news->status = 1;
        // $news->show = 0;
        // $news->filename = 'News/'.$cover->getFilename().'.'.$extension;
        // $news->save();
        // //to redirect
        // return redirect()->route('admin.news.index')->with('success','Data Added');
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
        // $news = news::find($id); 
        // return view('admin.news.edit',compact('news', 'id'));
       
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
        // $this->validate($request,[
        //     'title' => 'required',
        //     'description' => 'required',
           
        // ]);

        // if($request->file('filename') != null){
        //     $cover = $request->file('filename');
        //     $extension = $cover->getClientOriginalExtension();
        //     Storage::disk('public')->put('News/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //     //get values ng mga nasa form to save
        //     $filename = 'News/'.$cover->getFilename().'.'.$extension;
        // }
        // else{
        //     $filename= $request->get('filename_');
        // }
        // $update = News::find($id);
        // $update->title = $request->get('title');
        // $update->desc = $request->get('description');
        // $update->filename = $filename;

        // $update->save();
        // return redirect()->route('admin.news.index')->with('success','Data Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // $news = news::find($id);
        // $news->status = 0;
        // $news->save();
        // return redirect()->route('admin.news.index')->with('success', 'News is already removed');
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

        //     return redirect()->route('admin.news.index')->with('success', 'Content is already moved first');
    }
}
