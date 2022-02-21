<?php

namespace App\Http\Controllers;

use App\Department_Content;
use App\Department_Org;
use App\Department_Main;
use Illuminate\Http\Request;
use DB;
use File;

class Department_ContentController extends Controller
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
        $Dept_Cont_List = DB::table('department_contents')
            ->join('department_main', 'department_contents.dept_code', '=', 'department_main.dept_code')
            ->select('department_contents.*', 'department_main.*')
            ->where('department_contents.dept_content_tag','Primary')
            ->paginate(15);

        return view('admin.department.cont_list', compact('Dept_Cont_List'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department_Content  $department_Content
     * @return \Illuminate\Http\Response
     */
    public function show(Department_Content $department_Content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department_Content  $department_Content
     * @return \Illuminate\Http\Response
     */
    public function edit($dept_code)
    {
        // $Dept_Code = DB::table('department_main')
        $Dept_Name = DB::table('department_contents')->join('department_main', 'department_contents.dept_code', '=', 'department_main.dept_code')->select('department_contents.*', 'department_main.*')->where('department_contents.dept_content_tag','Primary')->where('department_contents.dept_code',$dept_code)->get();
        $Dept_Desc = DB::table('department_contents')->where('dept_content_type','Description')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_Mission = DB::table('department_contents')->where('dept_content_type','Mission')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_Vision = DB::table('department_contents')->where('dept_content_type','Vision')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_Phil = DB::table('department_contents')->where('dept_content_type','Phil')->value('dept_content');
        $Dept_Services = DB::table('department_contents')->where('dept_content_type','Services')->where('dept_code',$dept_code)->where('dept_content_tag','Show')->get();
        $Dept_Forms = DB::table('department_contents')->where('dept_content_type','Forms')->where('dept_code',$dept_code)->where('dept_content_tag','Show')->get();
        $Dept_Links_Sys = DB::table('department_contents')->where('dept_content_type','Links_Sys')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_SocMed = DB::table('department_contents')->where('dept_content_type','SocMed')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_Requirements = DB::table('department_contents')->where('dept_content_type','Requirements')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_Sched = DB::table('department_contents')->where('dept_content_type','Sched')->where('dept_code',$dept_code)->value('dept_content');
        $Dept_Banner = DB::table('department_contents')->where('dept_content_type','Banner')->where('dept_code',$dept_code)->value('dept_content');

        return view('admin.department.cont_edit', compact('dept_code','Dept_Name','Dept_Desc','Dept_Mission','Dept_Vision','Dept_Phil','Dept_Services','Dept_Forms','Dept_Links_Sys','Dept_SocMed','Dept_Requirements','Dept_Sched','Dept_Banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department_Content  $department_Content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dept_code)
    {
        $Dept_Desc = $request->get('Dept_Desc');
        $Dept_Mission_Col = DB::table('department_contents')->where('dept_content_type','Mission')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Vision_Col = DB::table('department_contents')->where('dept_content_type','Vision')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Sched_Col = DB::table('department_contents')->where('dept_content_type','Sched')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Phil_Col = DB::table('department_contents')->where('dept_content_type','Phil')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Links_Sys_Col = DB::table('department_contents')->where('dept_content_type','Links_Sys')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Banner_Col = DB::table('department_contents')->where('dept_content_type','Banner')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Requirements_Col = DB::table('department_contents')->where('dept_content_type','Requirements')->where('dept_code',$dept_code)->value('dept_content_type');
        $Dept_Forms_Col = DB::table('department_contents')->where('dept_content_type','Forms')->where('dept_code',$dept_code)->value('dept_content_type');

        // Description
        if($Dept_Desc != '' || $Dept_Desc != null)
        { DB::table('department_contents')->where('dept_code', $dept_code)->where('dept_content_type', 'Description')->update(['dept_content' => $Dept_Desc]); }

        // Mission
       if(($Dept_Mission_Col == '' || $Dept_Mission_Col ==  null) && ($request->get('Dept_Mission') == '' || $request->get('Dept_Mission') ==  null))
        {
            $Dept_Cont_New = new Department_Content();
            $Dept_Cont_New->dept_code = $dept_code;
            $Dept_Cont_New->dept_content_type = 'Mission';
            $Dept_Cont_New->dept_content = $request->get('Dept_Mission');
            $Dept_Cont_New->dept_content_tag = 'Hide';
            $Dept_Cont_New->save();
        }
        elseif(($Dept_Mission_Col != '' || $Dept_Mission_Col !=  null) && ($request->get('Dept_Mission') != '' || $request->get('Dept_Mission') !=  null))
        {
            DB::table('department_contents')
            ->where('dept_code', $dept_code)
            ->where('dept_content_type', 'Mission')
            ->update(['dept_content' =>  $request->get('Dept_Mission'),'dept_content_tag' =>  'Show']);  
        }
        elseif(($Dept_Mission_Col == '' || $Dept_Mission_Col ==  null) && ($request->get('Dept_Mission') != '' || $request->get('Dept_Mission') !=  null))
        {
            $Dept_Cont_New = new Department_Content();
            $Dept_Cont_New->dept_code = $dept_code;
            $Dept_Cont_New->dept_content_type = 'Mission';
            $Dept_Cont_New->dept_content = $request->get('Dept_Mission');
            $Dept_Cont_New->dept_content_tag = 'Show';
            $Dept_Cont_New->save();
        }
        elseif(($Dept_Mission_Col != '' || $Dept_Mission_Col !=  null) && ($request->get('Dept_Mission') == '' || $request->get('Dept_Mission') ==  null))
        {
            DB::table('department_contents')
            ->where('dept_code', $dept_code)
            ->where('dept_content_type', 'Mission')
            ->update(['dept_content' =>  $request->get('Dept_Mission'),'dept_content_tag' =>  'Hide']);  
        }

        // Vision
       if(($Dept_Vision_Col == '' || $Dept_Vision_Col ==  null) && ($request->get('Dept_Vision') == '' || $request->get('Dept_Vision') ==  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Vision';
           $Dept_Cont_New->dept_content = $request->get('Dept_Vision');
           $Dept_Cont_New->dept_content_tag = 'Hide';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Vision_Col != '' || $Dept_Vision_Col !=  null) && ($request->get('Dept_Vision') != '' || $request->get('Dept_Vision') !=  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Vision')
           ->update(['dept_content' =>  $request->get('Dept_Vision'),'dept_content_tag' =>  'Show']);  
       }
       elseif(($Dept_Vision_Col == '' || $Dept_Vision_Col ==  null) && ($request->get('Dept_Vision') != '' || $request->get('Dept_Vision') !=  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Vision';
           $Dept_Cont_New->dept_content = $request->get('Dept_Vision');
           $Dept_Cont_New->dept_content_tag = 'Show';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Vision_Col != '' || $Dept_Vision_Col !=  null) && ($request->get('Dept_Vision') == '' || $request->get('Dept_Vision') ==  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Vision')
           ->update(['dept_content' =>  $request->get('Dept_Vision'),'dept_content_tag' =>  'Hide']);  
       }

       // Sched
       if(($Dept_Sched_Col == '' || $Dept_Sched_Col ==  null) && ($request->get('Dept_Sched') == '' || $request->get('Dept_Sched') ==  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Sched';
           $Dept_Cont_New->dept_content = $request->get('Dept_Sched');
           $Dept_Cont_New->dept_content_tag = 'Hide';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Sched_Col != '' || $Dept_Sched_Col !=  null) && ($request->get('Dept_Sched') != '' || $request->get('Dept_Sched') !=  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Sched')
           ->update(['dept_content' =>  $request->get('Dept_Sched'),'dept_content_tag' =>  'Show']);  
       }
       elseif(($Dept_Sched_Col == '' || $Dept_Sched_Col ==  null) && ($request->get('Dept_Sched') != '' || $request->get('Dept_Sched') !=  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Sched';
           $Dept_Cont_New->dept_content = $request->get('Dept_Sched');
           $Dept_Cont_New->dept_content_tag = 'Show';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Sched_Col != '' || $Dept_Sched_Col !=  null) && ($request->get('Dept_Sched') == '' || $request->get('Dept_Sched') ==  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Sched')
           ->update(['dept_content' =>  $request->get('Dept_Sched'),'dept_content_tag' =>  'Hide']);  
       }

       // Phil
       if(($Dept_Phil_Col == '' || $Dept_Phil_Col ==  null) && ($request->get('Dept_Phil') == '' || $request->get('Dept_Phil') ==  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Phil';
           $Dept_Cont_New->dept_content = $request->get('Dept_Phil');
           $Dept_Cont_New->dept_content_tag = 'Hide';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Phil_Col != '' || $Dept_Phil_Col !=  null) && ($request->get('Dept_Phil') != '' || $request->get('Dept_Phil') !=  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Phil')
           ->update(['dept_content' =>  $request->get('Dept_Phil'),'dept_content_tag' =>  'Show']);  
       }
       elseif(($Dept_Phil_Col == '' || $Dept_Phil_Col ==  null) && ($request->get('Dept_Phil') != '' || $request->get('Dept_Phil') !=  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Phil';
           $Dept_Cont_New->dept_content = $request->get('Dept_Phil');
           $Dept_Cont_New->dept_content_tag = 'Show';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Phil_Col != '' || $Dept_Phil_Col !=  null) && ($request->get('Dept_Phil') == '' || $request->get('Dept_Phil') ==  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Phil')
           ->update(['dept_content' =>  $request->get('Dept_Phil'),'dept_content_tag' =>  'Hide']);  
       }

       // Links_Sys
       if(($Dept_Links_Sys_Col == '' || $Dept_Links_Sys_Col ==  null) && ($request->get('Dept_Links_Sys') == '' || $request->get('Dept_Links_Sys') ==  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Links_Sys';
           $Dept_Cont_New->dept_content = $request->get('Dept_Links_Sys');
           $Dept_Cont_New->dept_content_tag = 'Hide';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Links_Sys_Col != '' || $Dept_Links_Sys_Col !=  null) && ($request->get('Dept_Links_Sys') != '' || $request->get('Dept_Links_Sys') !=  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Links_Sys')
           ->update(['dept_content' =>  $request->get('Dept_Links_Sys'),'dept_content_tag' =>  'Show']);  
       }
       elseif(($Dept_Links_Sys_Col == '' || $Dept_Links_Sys_Col ==  null) && ($request->get('Dept_Links_Sys') != '' || $request->get('Dept_Links_Sys') !=  null))
       {
           $Dept_Cont_New = new Department_Content();
           $Dept_Cont_New->dept_code = $dept_code;
           $Dept_Cont_New->dept_content_type = 'Links_Sys';
           $Dept_Cont_New->dept_content = $request->get('Dept_Links_Sys');
           $Dept_Cont_New->dept_content_tag = 'Show';
           $Dept_Cont_New->save();
       }
       elseif(($Dept_Links_Sys_Col != '' || $Dept_Links_Sys_Col !=  null) && ($request->get('Dept_Links_Sys') == '' || $request->get('Dept_Links_Sys') ==  null))
       {
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Links_Sys')
           ->update(['dept_content' =>  $request->get('Dept_Links_Sys'),'dept_content_tag' =>  'Hide']);  
       }

       // Banner
       if($Dept_Banner_Col != '' || $Dept_Banner_Col !=  null)
       {
           if($request->Dept_Banner != null)
           { 
             $Filename = $request->Dept_Banner->getClientOriginalName();
             $request->Dept_Banner->move(public_path().'/department_files/'.$dept_code, $Filename );
           }
           else
           { $Filename = $request->Dept_Banner_Recent; }
        
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Banner')
           ->update(['dept_content' =>  $Filename,'dept_content_tag' =>  'Show']); 
       }
       elseif(($Dept_Banner_Col == '' || $Dept_Banner_Col ==  null) && ($request->Dept_Banner != '' || $request->Dept_Banner !=  null))
       {

            $Dept_Cont_New = new Department_Content();
            $Dept_Cont_New->dept_code = $dept_code;
            $Dept_Cont_New->dept_content_type = 'Banner';
            $Filename = $request->Dept_Banner->getClientOriginalName();
            $request->Dept_Banner->move(public_path().'/department_files/'.$dept_code, $Filename );  // your folder path
            $Dept_Cont_New->dept_content = $Filename;
            $Dept_Cont_New->dept_content_tag = 'Show';
            $Dept_Cont_New->save();
       }

       // Requirements
       if($Dept_Requirements_Col != '' || $Dept_Requirements_Col !=  null)
       {
           if($request->Dept_Requirements != null)
           { 
             $Filename = $request->Dept_Requirements->getClientOriginalName();
             $request->Dept_Requirements->move(public_path().'/department_files/'.$dept_code, $Filename );
           }
           else
           { $Filename = $request->Dept_Requirements_Recent; }
        
           DB::table('department_contents')
           ->where('dept_code', $dept_code)
           ->where('dept_content_type', 'Requirements')
           ->update(['dept_content' =>  $Filename,'dept_content_tag' =>  'Show']); 
       }
       elseif(($Dept_Requirements_Col == '' || $Dept_Requirements_Col ==  null) && ($request->Dept_Requirements != '' || $request->Dept_Requirements !=  null))
       {
            $Dept_Cont_New = new Department_Content();
            $Dept_Cont_New->dept_code = $dept_code;
            $Dept_Cont_New->dept_content_type = 'Requirements';
            $Filename = $request->Dept_Requirements->getClientOriginalName();
            $request->Dept_Requirements->move(public_path().'/department_files/'.$dept_code, $Filename );  // your folder path
            $Dept_Cont_New->dept_content = $Filename;
            $Dept_Cont_New->dept_content_tag = 'Show';
            $Dept_Cont_New->save();
       }
       
       // Forms
        if ($request->hasfile('Dept_Forms_File')) {
            foreach ($request->file('Dept_Forms_File') as $Files) {

            $Filename = $Files->getClientOriginalName();
            $Files->move(public_path().'/department_files/'.$dept_code, $Filename );  // your folder path
            $data[] = $Filename;

            $Dept_Cont_New = new Department_Content();
            $Dept_Cont_New->dept_code = $dept_code;
            $Dept_Cont_New->dept_content_type = 'Forms';
            $Dept_Cont_New->dept_content = $Filename;
            $Dept_Cont_New->dept_content_tag = 'Show';
            $Dept_Cont_New->save();
        }}

        // Services
        if ($request->hasfile('Dept_Services_File')) {
            foreach ($request->file('Dept_Services_File') as $Files) {

            $Filename = $Files->getClientOriginalName();
            $Files->move(public_path().'/department_files/'.$dept_code, $Filename );  // your folder path
            $data[] = $Filename;

            $Dept_Cont_New = new Department_Content();
            $Dept_Cont_New->dept_code = $dept_code;
            $Dept_Cont_New->dept_content_type = 'Services';
            $Dept_Cont_New->dept_content = $Filename;
            $Dept_Cont_New->dept_content_tag = 'Show';
            $Dept_Cont_New->save();
        }}

        return redirect()->back()->with('success', 'Content updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department_Content  $department_Content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affected = DB::table('department_contents')
              ->where('id', $id)
              ->update(['dept_content_tag' => 'Hide']);
              
        return redirect()->back()->with('success', 'Content removed!');
    }
}
