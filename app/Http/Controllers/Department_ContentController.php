<?php

namespace App\Http\Controllers;

use App\Department_Content;
use App\Department_Org;
use App\Department_Main;
use App\Events_XBazaar;
use Illuminate\Http\Request;
use DB;

class Department_ContentController extends Controller
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
        $Dept_Cont_List = DB::table('department_contents')
            ->join('department_main', 'department_contents.dept_code', '=', 'department_main.dept_code')
            ->select('department_contents.*', 'department_main.*')
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
    public function edit(Department_Content $department_Content)
    {
        return view('admin.department.cont_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department_Content  $department_Content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department_Content $department_Content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department_Content  $department_Content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department_Content $department_Content)
    {
        //
    }
}
