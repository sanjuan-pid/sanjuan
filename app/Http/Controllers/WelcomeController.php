<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mayors;
use App\News;
use App\Magazine;
use App\brgy;

class WelcomeController extends Controller
{
    public function index()
    {
        $mayors = Mayors::where('status', 1)
               ->orderBy('type', 'asc')
               ->orderBy('created_at', 'desc')
               ->get();
        $announcement = News::where('status', 1)
                ->where('content_type', "Announcement")
                ->where('content_tag', "0")
                ->orderBy('created_at', 'desc')
                ->skip(0)
                ->take(4)
                ->get();
        $announcement3 = News::where('status', 1)
                ->where('content_type', "Announcement")
                ->where('content_tag', "0")
                ->orderBy('created_at', 'desc')
                ->skip(4)
                ->take(4)
                ->get();
        // echo $announcement;
        $news = News::where('status', 1)
                ->where('content_type', "News")     
                ->where('content_tag', 0)   
                ->orderBy('created_at', 'desc')
                ->get();
        $events = News::where('status', 1)
                ->where('content_type', "Events")  
                ->where('content_tag', 0)      
                ->orderBy('created_at', 'desc')
                ->get();
        $brgy_announcement = brgy::where('brgy_code', 0)
                ->orderBy('name', 'asc')
                ->get();
        $news2 = DB::select('select id , title, filename, date(created_at), DATE(NOW()) - INTERVAL 2 DAY from news 
                where DATE(created_at) <= DATE(NOW()) - INTERVAL 2 DAY
                and status = 1 and content_type = "News";', [1]);
        $act = News::where('status', 1)
                ->where('content_type', "Act")     
                ->where('content_tag', 0)   
                ->orderBy('created_at', 'desc')
                ->get();
        $articles = News::where('status', 1)
                ->where('content_type', "Art")     
                ->orWhere('content_type',"News" ) 
                ->where('content_tag', 0)   
                ->orderBy('created_at', 'desc')
                ->get();
        $thumbnail = Magazine::where('magz_tag', 'Publish')
                ->orderBy('created_at', 'desc')
                ->first(); 
        
        return view('/welcome', compact('mayors','articles','news','announcement','events','brgy_announcement','act','announcement3','thumbnail'),['news2' => $news2]);
}
}
