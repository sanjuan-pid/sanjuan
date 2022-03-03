<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Department_Org;
use DB;
use Carbon\Carbon;

class Department_OrgChartController extends Controller
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
        $Dept_Org_List = DB::table('department_chart')
            ->join('department_main', 'department_chart.dept_code', '=', 'department_main.dept_code')
            ->select('department_chart.*', 'department_main.*')
            ->where('department_main.dept_status','ACTIVE')
            ->get();

        //$org = DB::select('select * from department_chart;');
        return view('admin.department.org_list', compact('Dept_Org_List'));
        //return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $scores = $request->input('members');  //here data is the input array param 

        // foreach($scores as $row){
        //     $score->member_name = $row['name'];
        //     $score->dept_code = $row['dept_code'];
        //     $score->member_designation = $row['designation'];
        //     $score->member_sg = $row['sg'];
        //     $score->member_align = $row['placement'];
        //     $score->member_tag = $row['member_tag'];
        //     $score->save(); 
        // }

        $members_name = array_filter($request->name);
        $members_designation = array_filter($request->designation);
        $members_sg = array_filter($request->sg);
        $members_placement = array_filter($request->placement);
        $members_tag = array_filter($request->member_tag);
        $members_code = array_filter($request->dept_code);
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $data = [];

        foreach ($members_name as $index => $name) {
            $data[] = [
                'member_name'=>$name,
                'member_designation'=>$members_designation[$index],
                'member_sg'=>$members_sg[$index],
                'member_align'=>$members_placement[$index],
                'member_tag'=>$members_tag[$index],
                'dept_code'=>$members_code[$index],
                'created_at'=>$created_at,
                'updated_at'=>$updated_at,
            ];
        }

        DB::table('department_chart')->insert(
            $data
        );
        return redirect()->route('admin.org.org_list')->with('success','Member/s Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $org = DB::table('department_chart')
            ->join('department_main', 'department_chart.dept_code', '=', 'department_main.dept_code')
            ->select('department_chart.*', 'department_main.dept_name')
            ->where('department_chart.id',$id)
            ->get();
        
        $code = DB::table('department_chart')
              ->where('id',$id)
              ->value('dept_code');

        $member = DB::table('department_chart')
                ->where('dept_code',$code)
                ->get()
                ->groupBy('member_sg','member_align');

       return view('admin.department.org_view' ,compact('org', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // $code = DB::table('department_chart')->where('id',$id)->value('dept_code');

        // $dept = DB::table('department_chart')->where('dept_code', $code)->orderBy('member_sg','DESC')->get();

        // // $dept = DB::table('department_chart')
        // // ->join('department_main', 'department_main.dept_code', '=', 'department_chart.dept_code')
        // // ->select('department_chart.*', 'department_main.*')
        // // ->where('department_main.dept_id',$id)
        // // ->where('department_chart.member_tag',"HEAD")
        // // ->get();
        return view('admin.department.org_edit' ,compact('dept','id'));
        //return $dept;
    }

    public function emp_create($id)
    {
        $code = DB::table('department_chart')->where('id',$id)->value('dept_code');
        $dept_name = DB::table('department_main')->where('dept_code', $code)->value('dept_name');
        //$dept = DB::table('department_chart')->where('dept_code', $code)->orderBy('member_sg','DESC')->get();
        return view('admin.department.org_emp_create' ,compact('dept_name','code'));
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
        // $scores = $request->input('members');  //here data is the input array param 

        // foreach($scores as $row){
        //     $score = Department_Org::find($row['id']); 
        //     $score->member_name = $row['name'];
        //     $score->dept_code = $row['department'];
        //     $score->member_designation = $row['designation'];
        //     $score->member_sg = $row['sg'];
        //     $score->member_align = $row['placement'];
        //     $score->save(); 
        // }
        $Dept_Code = DB::table('department_chart')->where('id',$id)->value('dept_code');
        if($request->Dept_Chartfile != null)
           {
             $Filename = $request->Dept_Chartfile->getClientOriginalName();
             $request->Dept_Chartfile->move(public_path().'/department_files/'.$Dept_Code, $Filename );
           }
        else
           { $Filename = $request->Dept_Chartfile_Recent; }

           DB::table('department_chart')
           ->where('dept_code', $Dept_Code)
           ->update(['dept_chartfile' =>  $Filename]);

        //return redirect()->route('admin.org.org_list')->with('success','Member/s Information Updated');
        return redirect()->back()->with('success', 'Chart updated!');
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
