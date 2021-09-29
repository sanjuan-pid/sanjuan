<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\VIP_Stores;
use DB;

class Admin_VIPController extends Controller
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
        $vips = DB::table('vip_stores')->where('status','1')->get();
        return view('admin.VIPstores.vip_list', compact('vips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.VIPstores.vip_create');
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
            'establishment' => 'required',
            'offers' => 'required',
            'category' => 'required',
            'address' => 'required',
            'contact_person' => 'required',
            'contact_no' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('VIPStores/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $vips_new = new VIP_Stores();
        $vips_new->establishment = $request->establishment;
        $vips_new->offers = $request->offers;
        $vips_new->category = $request->category;
        $vips_new->address = $request->address;
        $vips_new->contact_person = $request->contact_person;
        $vips_new->contact_no = $request->contact_no;
        $vips_new->filename = $request->filename;
        $vips_new->status = 1;
        
        $vips_new->filename = 'VIPStores/'.$cover->getFilename().'.'.$extension;
        $vips_new->save();
        return redirect()->route('admin.vip.vip_list')->with('success','Data Added');
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
        $vips = VIP_Stores::find($id); 
        return view('admin.VIPstores.vip_edit' ,compact('vips', 'id'));
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
            'establishment' => 'required',
            'offers' => 'required',
            'category' => 'required',
            'address' => 'required',
            'contact_person' => 'required',
            'contact_no' => 'required'
        ]);

        if($request->file('filename') != null){
            $cover = $request->file('filename');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('VIPStores/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'VIPStores/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('filename_');
        }

        $vips_update = VIP_Stores::find($id);
        $vips_update->establishment = $request->get('establishment');
        $vips_update->offers = $request->get('offers');
        $vips_update->category = $request->get('category');
        $vips_update->address = $request->get('address');
        $vips_update->contact_person = $request->get('contact_person');
        $vips_update->contact_no = $request->get('contact_no');
        $vips_update->filename = $filename;

        $vips_update->save();
        return redirect()->route('admin.vip.vip_list')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vips = VIP_Stores::find($id);
        $vips->status = 0;
        $vips->save();
        return redirect()->route('admin.vip.vip_list')->with('success', 'Store is removed from the list');
    }
}
