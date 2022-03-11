<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Brgy_Content;
use DB;
use File;

class Brgy_ContentController extends Controller
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
        $Brgy = DB::table('barangay')->get();
        return view('admin.brgy.brgy_list', compact('Brgy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brgy.brgy_create');
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
            'brgylogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'brgyname' => 'required',
            'brgycontact' => 'required',
            //'brgyabout' => 'required',
            // 'brgyvision' => 'required',
            // 'brgymission' => 'required',
            //'brgycharter' => '  required|file|mimes:pdf',
            //'brgyorg' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //Make Folder Directory for BRGY
        $Brgy_Name = $request->brgyname;
        $File_Path = public_path().'/barangay_files/'.$Brgy_Name;
        File::makeDirectory($File_Path);

        //Logo
        $Filename_Logo = $request->brgylogo->getClientOriginalName();
        $request->brgylogo->move(public_path().'/barangay_files/'.$Brgy_Name, $Filename_Logo );  // Folder Path

        //Charter
        $Filename_Charter = $request->brgycharter->getClientOriginalName();
        $request->brgycharter->move(public_path().'/barangay_files/'.$Brgy_Name, $Filename_Charter );  // Folder Path

        //Org Chart
        $Filename_Org = $request->brgyorg->getClientOriginalName();
        $request->brgyorg->move(public_path().'/barangay_files/'.$Brgy_Name, $Filename_Org );  // Folder Path

        //Get values of fields in the form
        $Brgy_new = new Brgy_Content();
        $Brgy_new->brgy_logo = $Filename_Logo;
        $Brgy_new->brgy_contact = $request->brgycontact;
        $Brgy_new->brgy_email = $request->brgyemail;
        $Brgy_new->brgy_name = $request->brgyname;
        $Brgy_new->brgy_about = $request->brgyabout;
        $Brgy_new->brgy_vision = $request->brgyvision;
        $Brgy_new->brgy_mission = $request->brgymission;
        $Brgy_new->brgy_orgchart = $Filename_Org;
        $Brgy_new->brgy_citizencharter = $Filename_Charter;
        $Brgy_new->save();

        return redirect()->route('admin.brgy.brgy_list')->with('success','Barangay contents uploaded!');
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
        $Brgy = Brgy_Content::find($id);
        return view('admin.brgy.brgy_edit' ,compact('Brgy', 'id'));
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
            'brgyname' => 'required',
            'brgycontact' => 'required',
            // 'brgyabout' => 'required',
            // 'brgyvision' => 'required',
            // 'brgymission' => 'required',
            // 'brgycharter' => '  required|file|mimes:pdf',
            // 'brgyorg' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $Brgy_Name = DB::table('barangay')->where('id',$id)->value('brgy_name');

        // Logo
        if($request->brgylogo != null)
        {
          $Filename_Logo = $request->brgylogo->getClientOriginalName();
          $request->brgylogo->move(public_path().'/barangay_files/'.$Brgy_Name, $Filename_Logo );
        }
        else
        { $Filename_Logo = $request->brgylogo_; }

        // Charter
        if($request->brgycharter != null)
        {
          $Filename_Charter = $request->brgycharter->getClientOriginalName();
          $request->brgycharter->move(public_path().'/barangay_files/'.$Brgy_Name, $Filename_Charter );
        }
        else
        { $Filename_Charter = $request->brgycharter_; }

        // Org Chart
        if($request->brgyorg != null)
        {
          $Filename_Org = $request->brgyorg->getClientOriginalName();
          $request->brgyorg->move(public_path().'/barangay_files/'.$Brgy_Name, $Filename_Org );
        }
        else
        { $Filename_Org = $request->brgyorg_; }

        //Get values of fields in the form
        $Brgy_update = Brgy_Content::find($id);
        $Brgy_update->brgy_logo = $Filename_Logo;
        $Brgy_update->brgy_contact = $request->brgycontact;
        $Brgy_update->brgy_email = $request->brgyemail;
        $Brgy_update->brgy_name = $request->brgyname;
        $Brgy_update->brgy_about = $request->brgyabout;
        $Brgy_update->brgy_vision = $request->brgyvision;
        $Brgy_update->brgy_mission = $request->brgymission;
        $Brgy_update->brgy_orgchart = $Filename_Org;
        $Brgy_update->brgy_citizencharter = $Filename_Charter;
        $Brgy_update->save();

        return redirect()->route('admin.brgy.brgy_list')->with('success','Barangay contents updated!');
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
