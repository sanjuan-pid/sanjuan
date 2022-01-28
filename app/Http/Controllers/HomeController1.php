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
use App\Applicants;

class HomeController1 extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function request_form()
    {
        return view('home1');
    }

    public function admin()
    {
        return view('admin_page');
    }

    public function list()
    {
        $applicants = Applicants::all();

        return DataTables::of($applicants)
            ->setRowId('id')
            ->editColumn('date_req', function($applicants){
                $requestedAt = Carbon::parse($applicants->date_requested);
                return $requestedAt->format('M d Y');
            })
            ->editColumn('swab', function($applicants){
                $requestedAt = Carbon::parse($applicants->date_swabbed);
                return $requestedAt->format('M d Y');
            })
            ->editColumn('confirm', function($applicants){
                $conf = $applicants->confirmed;
                if($conf == 1)
                {
                    return "Confirmed";
                }
                else if($conf == 2)
                {
                    return "Declined";
                }
                else
                {
                    return "Not yet confirmed";
                }
            })
            ->make(true);
    }

    public function submit(Request $request)
    {
        $submit = new Applicants;
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

        $applicationno = Applicants::find($submit->id);
        $apps = Applicants::where('year_applied', $date->year)->count();

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

    public function update($id)
    {
        $update = Applicants::find($id);
        $update->confirmed = 1;
        $update->filename = "CertRecovery_".$id.".pdf";
        $update->save();

        

        return Response::json($update);
    }

    public function decline(Request $request)
    {
        $update = Applicants::where('id', $request->id)->first();
        $update->confirmed = 2;
        $update->remarks = $request->remarks;
        $update->save();

        return back()->with('declined', 'Successfully declined request!');
    }

    public function print_later(Request $request)
    {
        $update = Applicants::where('id', $request->printID)->first();
        $update->print_now = 0;
        $update->save();
        // dd($update);
        return back()->with('message', 'Successfully generated certificate, you may print it at a later date.');
    }
}
