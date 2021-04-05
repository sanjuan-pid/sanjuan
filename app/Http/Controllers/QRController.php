<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

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
    public function list_sched()
    { 
        $programs = News::where('status', 0)
           ->get();
        return view('admin.qr.list_sched', compact('programs'));
    }
    public function index()
    {
        $lmit = 0;  
        $category ="-";
        $programs = News::where('status', 1)
           ->limit($lmit)
           ->get();
        return view('admin.qr.list_qr', compact('programs','lmit','category'));
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
        $lmit = $request->limit;
        $category = $request->category;
        if($lmit > 0){
            // echo $lmit;
            // echo $category;        
            $programs = News::where('content_type', $category)
               ->limit($lmit)
               ->get();
        return view('admin.qr.list_qr', compact('programs','lmit','category'));
        }
        else {
            $lmit = 0;  
            $category ="-";
            $programs = News::where('status', 1)
               ->limit($lmit)
               ->get();
        return view('admin.qr.list_qr', compact('programs','lmit','category'));
        }

    }
    public function store1(Request $request)
    {
        $lmit = $request->lmit;
        $date = $request->dateee;
        // $max    = max($n);
        $category = $request->category;
        for ($n = 1; $n <= $lmit; $n++) {
             echo '<p>'.$n.'</p>';
             $id = $request->id[$n];
             $title = $request->title[$n];
           
            $update = News::find($id);
            $update->title = $title;
            $update->status = $date;
            $update->save();

        }
         return redirect()->route('admin.qr.list_sched')->with('success','Data Updated');
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
    public function update(Request $request)
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
