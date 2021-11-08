<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\transparency;
use Illuminate\Support\Facades\DB;

class transparencyController extends Controller
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
        $trans = DB::table('transparency')->get();
        return view('admin.transparency.trans_list', compact('trans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transparency.trans_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'transimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required',
            'pdf_filename' => '  required|file|mimes:pdf',
            'year' => 'required',
            'tag' => 'required',
        ]);

        $cover = $request->file('pdf_filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('transparency/'.$cover->getFilename().'.'.$extension,  File::get($cover));

        $cover_image = $request->file('transimg');
        $extension_image = $cover_image->getClientOriginalExtension();
        Storage::disk('public')->put('transparency/'.$cover_image->getFilename().'.'.$extension_image,  File::get($cover_image));


        //get values ng mga nasa form to save
        $trans_new = new transparency();
        $trans_new->trans_pdf = $request->pdf_filename;
        $trans_new->trans_category = $request->category;
        $trans_new->trans_image = $request->transimg;
        $trans_new->trans_title = $request->title;
        $trans_new->trans_year = $request->year;
        $trans_new->trans_tag = $request->tag;

        $trans_new->trans_pdf = 'transparency/'.$cover->getFilename().'.'.$extension;
        $trans_new->trans_image = 'transparency/'.$cover_image->getFilename().'.'.$extension_image;
        $trans_new->save();
        return redirect()->route('admin.transparency.trans_list')->with('success','File Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trans = transparency::find($id);
        return view('admin.transparency.trans_show' ,compact('trans', 'id'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trans = transparency::find($id);
        return view('admin.transparency.trans_edit' ,compact('trans', 'id'));
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
        'category' => 'required',
        'transimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'title' => 'required',
        'pdf_filename' => '  required|file|mimes:pdf',
        'year' => 'required',
        'tag' => 'required',
      ]);

      if($request->file('pdf_filename') != null){
          $cover = $request->file('pdf_filename');
          $extension = $cover->getClientOriginalExtension();
          Storage::disk('public')->put('transparency/'.$cover->getFilename().'.'.$extension,  File::get($cover));
          //get values ng mga nasa form to save
          $filename = 'transparency/'.$cover->getFilename().'.'.$extension;
      }
      else{
          $filename= $request->get('pdf_filename_');
      }

      if($request->file('transimg') != null){
          $cover_image = $request->file('transimg');
          $extension_image = $cover_image->getClientOriginalExtension();
          Storage::disk('public')->put('transparency/'.$cover_image->getFilename().'.'.$extension_image,  File::get($cover_image));
          //get values ng mga nasa form to save
          $filename_image = 'transparency/'.$cover_image->getFilename().'.'.$extension_image;
      }
      else{
          $filename_image= $request->get('transimg');
      }

      $trans_update = transparency::find($id);
      $trans_update->trans_category = $request->get('category');
      $trans_update->trans_title = $request->get('title');
      $trans_update->trans_pdf = $filename;
      $trans_update->trans_image = $filename_image;
      $trans_update->trans_year = $request->get('year');
      $trans_update->trans_tag = $request->get('tag');


      $trans_update->save();
        return redirect()->route('admin.transparency.trans_list')->with('success','Data Upadated');

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
    }
}
