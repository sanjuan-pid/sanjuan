<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events_XBazaar;
use DB;

class Events_XBazaar_Controller extends Controller
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
        $Bazaar = DB::table('events_xbazaar')->orderByRaw("FIELD(status , 'PENDING', 'APPROVED', 'REJECTED')")->paginate(2);
        return view('admin.events.xbazaar.eve_xbazaar_list', compact('Bazaar'));
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
        $this->validate($request,[
            'name' => 'required',
            'contact_no' => 'required',
            'category' => 'required',
            'contact_email' => 'required',
            'contact_person' => 'required',
            'products_desc' => 'required',
        ]);
        
        //get values ng mga nasa form to save
        $events_xbazaar_new = new Events_XBazaar();
        $events_xbazaar_new->name = $request->name;
        $events_xbazaar_new->category = $request->category;
        $events_xbazaar_new->email = $request->contact_email;
        $events_xbazaar_new->contact_no = $request->contact_no;
        $events_xbazaar_new->contact_person = $request->contact_person;
        $events_xbazaar_new->products_desc = $request->products_desc;
        $events_xbazaar_new->reason = "PENDING FOR APPROVAL";
        $events_xbazaar_new->status = "PENDING";
        
        $events_xbazaar_new->save();
        return redirect()->route('XmasBazaar')->with('success','Registration Successful, please wait for the confirmation via email/text. Thank you!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // $Bazaar = Events_XBazaar::find($id);
        // $Bazaar->status = "APPROVED";
        // $Bazaar->reason = "APPROVED";

        $Bazaar = Events_XBazaar::find($id);
        $Bazaar->category = $request->category;
        $Bazaar->save();
        // return redirect()->route('admin.eve_xbazaar.eve_xbazaar_list')->with('success', 'Application Approved');
        return redirect()->back()->with('success', 'Application Changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->validate($request,[
            'reason' => 'required',
        ]);

        $Bazaar = Events_XBazaar::find($id);
        $Bazaar->status = "REJECTED";
        $Bazaar->reason = $request->reason;
        $Bazaar->save();
        return redirect()->route('admin.eve_xbazaar.eve_xbazaar_list')->with('success', 'Application Rejected');
    }
}
