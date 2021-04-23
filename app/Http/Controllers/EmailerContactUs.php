<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class EmailerContactUs extends Controller
{
    public function index()
    {
        return view('contactus_page');
    }
    public function send(Request $request)
    {
        $this->validate($request,[
            'message'   => 'required' ,   
            'firstname'    =>  'required',
            'lastname'    =>  'required',
            'email'    =>  'required|email',
            'contact'    =>  'required'
        ]);

        $data = array(
            'message'   => $request->message,   
            'firstname'    =>  $request->firstname ,  
            'lastname'    =>  $request->lastname ,  
            'email'    =>  $request->email ,  
            'contact'    =>  $request->contact
        );
        Mail::to('publicinfo@sanjuancity.ph')
            ->send(new SendMail($data));
        return back()->with('Success', 'Thank you for contacting us!');
        // ->cc(['sephriverajr@gmail.com',$request->email])
    }
}
