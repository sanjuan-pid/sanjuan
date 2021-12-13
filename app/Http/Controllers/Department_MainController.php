<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Department_Main;
use App\Department_Org;
use App\Department_Content;
use DB;

class Department_MainController extends Controller
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
        $dept = DB::table('department_main')->where('dept_status','ACTIVE')->get();
        return view('admin.department.dept_list', compact('dept'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.dept_create');
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
            'code' => 'required',
            'sector' => 'required',
            'placement' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
        ]);
        
        //get values ng mga nasa form to save
        $dept_new = new Department_Main();
        $dept_new->dept_name = $request->name;
        $dept_new->dept_code = $request->code;
        $dept_new->dept_sector = $request->sector;
        $dept_new->dept_placement = $request->placement;
        $dept_new->dept_contactno = $request->contact_no;
        $dept_new->dept_email = $request->email;
        $dept_new->dept_status = "ACTIVE";
        $dept_new->save();

        $org_new = new Department_Org();
        $org_new->dept_code = $request->code;
        $org_new->member_name = $request->depthead;
        $org_new->member_designation = $request->designation;
        $org_new->member_sg = $request->get('sg');
        $org_new->member_tag = "HEAD";
        $org_new->member_align = "CENTER";
        $org_new->save();

        $cont_new = new Department_Content();
        $cont_new->dept_code = $request->code;
        $cont_new->dept_desc = "";
        $cont_new->dept_mission = "";
        $cont_new->dept_vision = "";
        $cont_new->dept_philosophy = "";
        $cont_new->dept_services = "";
        $cont_new->dept_socmed = "";
        $cont_new->dept_objectives = "";
        $cont_new->dept_services = "";
        $cont_new->save();

        return redirect()->route('admin.dept.dept_list')->with('success','Department Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dept = DB::table('department_main')
        ->join('department_chart', 'department_main.dept_code', '=', 'department_chart.dept_code')
        ->select('department_chart.*', 'department_main.*')
        ->where('department_main.dept_id',$id)
        ->where('department_chart.member_tag',"HEAD")
        ->get();
        return view('admin.department.dept_edit' ,compact('dept','id'));
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
            'code' => 'required',
            'sector' => 'required',
            'placement' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
            'depthead' => 'required',
            'designation' => 'required',
            'sg' => 'required'
        ]);
        //Update ng lahat members under that dept
        DB::table('department_chart')
                       ->where('dept_code',$request->get('code_hidden'))
                       ->update(['dept_code' => $request->get('code')]);
        //Update ng mismong dept
        DB::table('department_main')
                       ->where('dept_id',$id)
                       ->update(['dept_name' => $request->get('name'),
                                 'dept_code' => $request->get('code'),
                                 'dept_placement' => $request->get('placement'),
                                 'dept_sector' => $request->get('sector'),
                                 'dept_email' => $request->get('email'),
                                 'dept_contactno' => $request->get('contact_no')]);
        //Update ng head
        DB::table('department_chart')
            ->where('member_tag', "HEAD")
            ->where('dept_code', $request->get('code'))
            ->update(['member_name' => $request->get('depthead'),
                      'member_designation' => $request->get('designation'),
                      'member_sg' => $request->get('sg')]);
        
        return redirect()->route('admin.dept.dept_list')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affected = DB::table('department_main')
              ->where('dept_id', $id)
              ->update(['dept_status' => 'INACTIVE']);
              
        return redirect()->route('admin.dept.dept_list')->with('success', 'Department is removed from the list');
    }
}
