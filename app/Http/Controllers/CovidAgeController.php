<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Covid;
use App\covid_age;

class CovidAgeController extends Controller
{
    public function index()
    {
        // $covid_total = covid_total::all()->toArray();
        // $covid_brgy = Covid::all()->toArray(); //database name ung cients_final
        // return view('admin.covid.covid_age', compact('covid_brgy','covid_total'));
        return view('admin.covid.covid_age');
    }
}
