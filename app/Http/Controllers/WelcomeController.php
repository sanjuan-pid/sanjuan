<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mayors;
use App\News;

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
        $news2 = DB::select('select id , title, filename, date(created_at), DATE(NOW()) - INTERVAL 2 DAY from news 
                where DATE(created_at) <= DATE(NOW()) - INTERVAL 2 DAY
                and status = 1 and content_type = "News";', [1]);
                
        return view('/welcome', compact('mayors','news','announcement','events'),['news2' => $news2]);
    }
}
