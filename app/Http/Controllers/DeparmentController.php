<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Department;
use App\Department_child;

class DeparmentController extends Controller
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
        $dept = DB::select('select * from department
            where status = 1 
            order by created_at desc;');
        return view('admin.department.department-list', compact('dept'));
    }
    public function create(){
        return view('admin.department.department-create');
    }
    public function store(Request $request)
    {
        //para marequire nya ung sa form
        $this->validate($request,[
            'sector' => 'required',
            'description' => 'required',
        ]);
        
        $dept = new department();
        $dept->title = $request->sector;
        $dept->description = $request->description;
        $dept->logo="";
        $dept->status = 1;
        $dept->save();
        
        return redirect()->route('admin.department.deparment-list')->with('success','Data Added');
    }
    public function edit($id)
    {
        $dept = department::find($id); 
        return view('admin.department.department-edit',compact('dept', 'id'));
       
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
        ]);
        // dd($request->get('description'));
        $dept_update = department::find($id);
        $dept_update->title = $request->get('title');
        $dept_update->description = $request->get('description');
        $dept_update->save();

        return redirect()->route('admin.department.deparment-list')->with('success', 'Data inserted');
        
    }
    public function child($id)
    {
        $dept_child = DB::select('SELECT *
                                FROM department
                                JOIN department_child ON department.id=department_child.sector
                                where department_child.sector='.$id, [1]);
        $dept = DB::select('SELECT *
            FROM department
            where id='.$id, [1]);                            
        return view('admin.department.child_dept',compact('dept_child','dept', 'id'));
    }
    public function child_edit($id)
    {
        $dept_child = DB::select('select * from department_child where id='.$id, [1]);
        return view('admin.department.child_dept_edit',compact('dept_child', 'id'));
    }

    public function create_child(){
        return view('admin.department.department-create-child');
    }
    public function store_child(Request $request)
    {
        //para marequire nya ung sa form
        $this->validate($request,[
            'department' => 'required',
            'description' => 'required',
        ]);

        $dept = new department_child();
        $dept->sector = $request->sector;
        $dept->name = $request->department;
        $dept->description = $request->description;
        $dept->status = 1;
        $dept->save();
        $id = $request->sector;
        
        return redirect()->route('admin.department.child_dept', ['id' => $id])->with('success','Data Added');
    }

}
