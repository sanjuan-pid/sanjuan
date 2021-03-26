<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Activity;

class ActivityController extends Controller
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
        // // $ann = Announcement::all()->toArray();
        // $redirectTo = $_GET["content_type"];
        $act = DB::select('select * from activity
            where status = 1 
            order by created_at desc;');
        // return ($redirectTo);
        return view('admin.activity.act-list', compact('act'));
        //
    }
}
