<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mayors;
use App\News;
use App\Magazine;
use App\Achievement;
use App\View;
use App\Events_XBazaar;

class Pages extends Controller
{
    public function index()
    {
        return view('news_article');
    }
    public function mayor()
    {
        $news = News::where('status', 1)
            ->where('content_type', 'News')
            ->orderBy('created_at', 'desc')
            ->get();
        $news2 = DB::select('select id , title, filename, date(created_at), DATE(NOW()) - INTERVAL 2 DAY from news
                            where DATE(created_at) <= DATE(NOW()) - INTERVAL 2 DAY
                            and status = 1 and content_type = "news";', [1]);
        $achievement = DB::select('select * from achievement
                            where status = 1 and content_tag = "mayors";', [1]);

        // return($achievement)   ;
         return view('/mayors_page', compact('news','achievement'),['news2' => $news2]);
    }
    public function skills()
    {
        return view('skills_page');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function news_contents($id)
    {

        // return view('news.contents');
        $ann = DB::select('select * from news
                            where id='.$id, [1]);
        $news = News::where('status', 1)
                    ->where('content_type', "news")
                    ->orderBy('created_at', 'desc')
                    ->get();
        $events = News::where('status', 1)
                    ->where('content_type', "Events")
                    ->orderBy('created_at', 'desc')
                    ->get();
        // echo $ann;
        return view('news.contents',compact('news','events'),['ann' => $ann]);
    }
    public function news_list()
    {


    //   return view('Events/Brgy_page');
        $news = News::where('status', 1)
                    ->where('content_type', "Art")
                    ->orWhere('content_type',"News" )
                    ->orderBy('created_at', 'desc')
                    ->get();
        $events = News::where('status', 1)
                    ->where('content_type', "Events")
                    ->orderBy('created_at', 'desc')
                    ->get();
        $act = News::where('status', 1)
                    ->where('content_type', "Act")
                    ->orderBy('created_at', 'desc')
                    ->get();
        $ann = News::where('status', 1)
                    ->where('content_type', "Announcement")
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('news/list',compact('news','events','act','ann'));

    }

    public function gov()
    {
        return view('ourcity/government_page');
    }
    public function cong()
    {
        $updates_atty = DB::select('select * from news
            where content_type="Updates" and status = 1 and content_tag ="atty_b" ;');
        $ann_atty = DB::select('select * from news
            where content_type="Announcement" and status = 1 and content_tag ="atty_b";');
        $ann = DB::select('select * from news
            where content_type="Announcement" and status = 1 and content_tag = "cong";');
        $programs = DB::select('select * from news
            where content_type="Programs" and status = 1 and (content_tag = "cong" || content_tag ="atty_b");');
        $updates = DB::select('select * from news
            where content_type="Updates" and status = 1 and content_tag = "cong" ;');
        // return view('');
        $achievement = DB::select('select * from achievement
            where status = 1 and content_tag = "congressman" || content_tag ="atty_b";');
        return view('ourcity/congressman_page',compact('programs','updates','achievement','ann','updates_atty','ann_atty'));
    }
    public function vice()
    {
        $ann = DB::select('select * from news
            where content_tag ="VM"
            and content_type="Announcement"
            and status = 1', [1]);
        $programs = News::where('status', 1)
            ->where('content_tag', "VM")
            ->where('content_type', "Programs")
            ->orderBy('created_at', 'desc')
            ->get();
        $updates = News::where('status', 1)
            ->where('content_tag', "VM")
            ->where('content_type', "Updates")
            ->orderBy('created_at', 'desc')
            ->get();
        // return view('');
        $achievement = DB::select('select * from achievement
            where status = 1 and content_tag = "vm";', [1]);
        return view('ourcity/vicemayor_page',compact('programs','updates','achievement'),['ann' => $ann]);
    }
    //ourcity
    public function city()
    {
        return view('ourcity/citycouncil_page');
    }
    public function brgy()
    {
        return view('ourcity/barangay_page');
    }
    public function history()
  {
      return view('ourcity/history_page');
  }

  //programs and projects
  public function current()
  {
    $act = News::where('status', 1)
        ->where('content_type', "Act")
        ->orderBy('created_at', 'desc')
        ->get();
    // return($act);
    return view('programsandprojects/current_page',compact('act'));
  }
  public function archives()
  {
      return view('programsandprojects/archives_page');
  }

  public function brgy_contents($id)
  {

      // return view('news.contents');
      $brgy = DB::select('select * from brgy
                          where id='.$id, [1]);
      // echo $ann;
      return view('brgy.contents',compact('brgy'));
  }

  //Services
  public function announce()
  {
      return view('Services/Announcements1_page');
  }

  public function downloadable()
  {
      return view('Services/Downloadable_page');
  }

  public function quarantine()
  {
      return view('Services/QuarantineFacilities_page');
  }

  public function SJMC()
  {
      return view('Services/SJMC_page');
  }

    //Events
    public function tourism()
    {
        return view('Events/TourismFestivities_page');
    }

    public function calendar()
    {
        return view('Events/majorcalendar_page');
    }
    public function lgu()
    {
        return view('Events/lgu_page');
    }

    public function brgy1()
    {
        return view('Events/Brgy_page');
    }

    public function community()
    {
        return view('Events/Community_page');
    }

    public function XmasBazaar()
    {
        return view('Events/XmasBazaar_page');
    }

    public function storeXmasBazaar(Request $request)
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
        $events_xbazaar_new->product_desc = $request->products_desc;
        $events_xbazaar_new->reason = "PENDING FOR APPROVAL";
        $events_xbazaar_new->status = "PENDING";
        
        $events_xbazaar_new->save();
        return redirect()->route('XmasBazaar')->with('success','Registration Successful, please wait for the confirmation. Thank you!');
    }

  //Public notice
  public function bids()
  {
      return view('publicnotice/Bids_page');
  }

  public function disclosure()
  {
      return view('publicnotice/Disclosure_page');
  }

  public function executive()
  {
      return view('publicnotice/ExecutiveOrders');
  }

  public function ordinance()
  {
      return view('publicnotice/Ordinance_page');
  }

  public function announce1()
  {
      return view('publicnotice/Announcements_page');
  }
  public function exeorder2021()
  {
    $trans = DB::table('transparency')->where('trans_tag','show')->get();
    return view('ExecutiveOrder2021', compact('trans'));
  }
  public function vip()
  {
      $vips = DB::table('vip_stores')->where('status','1')->get();
      return view('Tourism/vip_page', compact('vips'));
  }

    //Directory

    //Login
    public function employee()
    {
        return view('Login/employee_page');
    }

    public function residence()
    {
        return view('Login/residence_page');
    }

    public function visitor()
    {
        return view('Login/visitor_page');
    }
    public function department()
    {
      return view('Events/Brgy_page');
    $dept = DB::select('select * from department
    where status= 1');
    // dd($dept);
        return view('deparment.department_page',compact('dept'));
    //    return view('deparment.department_page',compact('dept'));
    }
    public function department_content()
    {
        $dept = DB::select('select * from department
        where status= 1');
        $child = DB::select('SELECT *
                            FROM department
                            JOIN department_child ON department.id=department_child.sector');
        // dd($dept);
            return view('deparment.department_content',compact('dept','child'));
    }

    public function directory()
    {
        return view('directory.directory_page');
    }
    public function department_selected()
    {
        $child = DB::select('SELECT *
                            FROM department_child
                            WHERE status= 1');
        //  dd($child);
        return view('deparment.department_selected',compact('child'));
    }
    public function transparency()
    {
        return view('transparency');
    }

    public function magazine_view($id)
    {
        $magz = Magazine::find($id); 
        return view('admin.magazine.magazine_show' ,compact('magz', 'id'));
    }
}
