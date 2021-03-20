<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mayors;
use App\News;

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
        return view('/mayors_page', compact('news'),['news2' => $news2]);
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
                    ->orderBy('created_at', 'desc')
                    ->get();
        $events = News::where('status', 1)
                    ->where('content_type', "Events")  
                    ->orderBy('created_at', 'desc')
                    ->get();
        // echo $ann;
        return view('news.contents',compact('news','events'),['ann' => $ann]);
    }
    // our city folder
    public function gov()
    {
        return view('ourcity/government_page');
    }
    public function cong()
    {
        return view('ourcity/congressman_page');
    }
    public function vice()
    {
        $ann = DB::select('select * from news
            where content_tag ="VM"
            and content_type="Announcement"', [1]);
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
        return view('ourcity/vicemayor_page',compact('programs','updates'),['ann' => $ann]);
    }
  
    public function city()
    {
        return view('ourcity/citycouncil_page');
    }
    public function brgy()
    {
        return view('ourcity/barangay_page');
    }
}
