<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Magazine;
use DB;

class MagazineController extends Controller
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
        $magz = DB::table('magazine')->get();
        return view('admin.magazine.magazine_list', compact('magz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.magazine.magazine_create');
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
            'name' => 'required',
            'month' => 'required',
            'year' => 'required',
            'tag' => 'required',
            'filename' => '  required|image|mimes:jpeg,png,jpg,gif,svg',
            'pdf_filename' => '  required|file|mimes:pdf',
        ]);

        $cover = $request->file('pdf_filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('magazines/'.$cover->getFilename().'.'.$extension,  File::get($cover));

        $cover_img = $request->file('filename');
        $extension_img = $cover_img->getClientOriginalExtension();
        Storage::disk('public')->put('magazines/'.$cover_img->getFilename().'.'.$extension_img,  File::get($cover_img));

        //get values ng mga nasa form to save
        $magz_new = new Magazine();
        $magz_new->magz_name = $request->name;
        $magz_new->magz_month = $request->month;
        $magz_new->magz_year = $request->year;
        $magz_new->magz_tag = $request->tag;
        $magz_new->magz_filename = $request->filename;
        $magz_new->magz_pdf = $request->pdf_filename;
        
        $magz_new->magz_filename = 'magazines/'.$cover_img->getFilename().'.'.$extension_img;
        $magz_new->magz_pdf = 'magazines/'.$cover->getFilename().'.'.$extension;
        $magz_new->save();
        return redirect()->route('admin.magazine.magazine_list')->with('success','Magazine Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $magz = Magazine::find($id); 
        return view('admin.magazine.magazine_show' ,compact('magz', 'id'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $magz = Magazine::find($id); 
        return view('admin.magazine.magazine_edit' ,compact('magz', 'id'));
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
            'name' => 'required',
            'month' => 'required',
            'year' => 'required',
            'tag' => 'required',
        ]);

        if($request->file('filename') != null){
            $cover_img = $request->file('filename');
            $extension_img = $cover_img->getClientOriginalExtension();
            Storage::disk('public')->put('Magazine/'.$cover_img->getFilename().'.'.$extension_img,  File::get($cover_img));
            //get values ng mga nasa form to save
            $filename_img = 'Magazine/'.$cover_img->getFilename().'.'.$extension_img;

        }
        else{
            $filename_img= $request->get('filename_');
            
        }
        if($request->file('pdf_filename') != null){
            $cover = $request->file('pdf_filename');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('Magazine/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Magazine/'.$cover->getFilename().'.'.$extension;

        }
        else{
            $filename= $request->get('pdf_filename_');
        }
    
        $magz_update = Magazine::find($id);
        $magz_update->magz_name = $request->get('name');
        $magz_update->magz_month = $request->get('month');
        $magz_update->magz_year = $request->get('year');
        $magz_update->magz_tag = $request->get('tag');
        $magz_update->magz_pdf = $filename;
        $magz_update->magz_filename = $filename_img;

        $magz_update->save();
        return redirect()->route('admin.magazine.magazine_list')->with('success','Data Updated');
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
