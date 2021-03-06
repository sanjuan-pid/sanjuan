<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Mail;
use File;
use Carbon\Carbon;
use App\User;
use App\Covid_ApplicantsRecovery;
use JasperPHP\JasperPHP;
use QRCode;
use App\Mail\AttachmentMail;
use App\Mail\DeclineMail;

class HomeController1 extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

    public function cho_dashboard()
    {
        $Total = Covid_ApplicantsRecovery::all()->count();
        $Pending = Covid_ApplicantsRecovery::where('confirmed','=', null)->count();
        $Confirmed = Covid_ApplicantsRecovery::where('confirmed','=', '1')->count();
        $Declined = Covid_ApplicantsRecovery::where('confirmed','=', '2')->count();
       return view('cho - recoverysys.admin_dashboard', compact('Total','Pending','Confirmed','Declined'));
    }

    public function admin()
    {
        return view('cho - recoverysys.admin_page1');
    }

    public function list()
    {
        $applicants = Covid_ApplicantsRecovery::all();

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

    

    public function update($id)
    {
        $update = Covid_ApplicantsRecovery::find($id);
        $update->confirmed = 1;
        $update->filename = "CertRecovery_".$id.".pdf";
        $update->qr_filename = "QRCode_".$update->id.".png";
        $update->save();

        $file = public_path().'/files/'.$update->id.'/'.$update->qr_filename;    
        QRCode::text("Name: ".$update->last_name.", ".$update->first_name." ".$update->middle_name." ".$update->suffix."\n".
                    "Date of Recovery: ".Carbon::parse($update->date_end)->format('M d Y')."\n".
                    "Quarantine Facility: ".$update->quarantine_facility)->setSize(8)
                ->setMargin(2)->setOutFile($file)->png();

        $connection = ['driver' => 'generic',
                    'username' => 'root',
                    'password' => '',
                    'jdbc_driver' => 'com.mysql.jdbc.Driver',
                    'jdbc_url' => 'jdbc:mysql://localhost/pid'];
        $jasperPHP = new JasperPHP;
        $output = public_path().'/files/'.$id.'/CertRecovery_'.$update->id;
        $jasperPHP->process(public_path() . '/report1.jasper',$output,array("pdf"),array("app_id" => $update->id),$connection)->execute();

        $data = ([
            'first_name' => $update->first_name,
            'middle_name' => $update->middle_name,
            'last_name' => $update->last_name,
            'suffix' => $update->suffix,
            'file' => public_path().'/files/'.$id."/".$update->filename,
        ]);

        Mail::to($update->email)->send(new AttachmentMail($data));
        
        return Response::json($update);
    }

    public function decline(Request $request)
    {
        $update = Covid_ApplicantsRecovery::where('id', $request->id)->first();
        $update->confirmed = 2;
        $update->remarks = $request->remarks;
        $update->save();

        $data = ([
            'first_name' => $update->first_name,
            'middle_name' => $update->middle_name,
            'last_name' => $update->last_name,
            'suffix' => $update->suffix,
            'remarks' => $update->remarks,
        ]);

        Mail::to($update->email)->send(new DeclineMail($data));

        return back()->with('declined', 'Successfully declined request!');
    }

    public function print_later(Request $request)
    {
        $update = Covid_ApplicantsRecovery::where('id', $request->printID)->first();
        $update->print_now = 0;
        $update->save();
        // dd($update);
        return back()->with('message', 'Successfully generated certificate, you may print it at a later date.');
    }
}
