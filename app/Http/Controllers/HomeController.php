<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use File;
use Carbon\Carbon;
use App\User;
use App\Covid_ApplicantsRecovery;
use JasperPHP\JasperPHP;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function choAdmin()
    {
        $cho = "You are logged in as CHO Admin!";
        return $cho;
    }

    public function webAdmin()
    {
        $web = "You are logged in as PID Admin!";
        return $web;
    }

    public function request_form()
    {
        return view('home1');
    }
    public function submit(Request $request)
    {
        $submit = new Covid_ApplicantsRecovery;
        $date = Carbon::now();

        $submit->date_requested = Carbon::today();
        $submit->year_applied = $date->year;
        $submit->last_name = $request->last_name;
        $submit->first_name = $request->first_name;
        $submit->middle_name = $request->middle_name;
        $submit->suffix = $request->suffix;
        $submit->house_no = $request->address;
        $submit->barangay = $request->barangay;
        $submit->city = $request->city;
        $submit->date_swabbed = $request->swab_date;
        $submit->quarantine_duration = $request->qrtn_duration;
        $submit->date_start = $request->date_start;
        $submit->date_end = $request->date_end;

        $fac = $request->facility;
        if($fac == "Others")
        {
            $submit->quarantine_facility = $request->other_facility;
        }
        else
        {
            $submit->quarantine_facility = $request->facility;
        }

        $submit->fit_to_work = $request->fit_to_work;
        $submit->contact = $request->contact;
        $submit->email = $request->email;
        $submit->save();

        $save_path = public_path().'/files/'.$submit->id;
        File::makeDirectory($save_path);

        if($request->has("swab_result"))
        {
            $this->validate($request, [
                'swab_result.*' => 'file|mimes:jpeg,png,jpg'
            ]);

            $name=$request->swab_result->getClientOriginalName();
            $request->swab_result->move(public_path().'/files/'.$submit->id, $name);  // your folder path
            $submit->swab_result = $name;

            $submit->save();
        }

        if($request->has("monitoring_sheet"))
        {
            $this->validate($request, [
                'monitoring_sheet.*' => 'file|mimes:jpeg,png,jpg'
            ]);

            $name=$request->monitoring_sheet->getClientOriginalName();
            $request->monitoring_sheet->move(public_path().'/files/'.$submit->id, $name);  // your folder path
            $submit->monitoring_sheet = $name;

            $submit->save();
        }

        $applicationno = Covid_ApplicantsRecovery::find($submit->id);
        $apps = Covid_ApplicantsRecovery::where('year_applied', $date->year)->count();

        if ($apps<10)
        {
          $save ='CertRequest-'.$date->year.'-0000'.$apps;
        }
        else if ($apps>=10 && $apps<100)
        {
          $save ='CertRequest-'.$date->year.'-000'.$apps;
        }
        else if ($apps>=100 && $apps<1000)
        {
          $save ='CertRequest-'.$date->year.'-00'.$apps;
        }
        else if ($apps>=1000)
        {
          $save ='CertRequest-'.$date->year.'-0'.$apps;
        }
        else
        {
          $save ='CertRequest-'.$date->year.'-'.$apps;
        }
        $submit->request_no = $save;

        $submit->save();

        return back()->with('message', 'Successfully sent new request!');
    }
}
