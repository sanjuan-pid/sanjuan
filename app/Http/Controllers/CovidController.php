<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Covid;
use App\covid_total;

class CovidController extends Controller
{
    public function index()
    {
        $covid_total = covid_total::all()->toArray();
        $covid_brgy = Covid::all()->toArray(); //database name ung cients_final
        return view('admin.covid.brgy', compact('covid_brgy','covid_total'));
    }

    public function Covid_update(Request $request)
    {
        $covid_brgy = Covid::all()->toArray();
        $i=0;
        foreach($covid_brgy as $row){
            $i++;
            $id = $row['id'];
            $regis="Registrants".$id;
            $percentage="Percentage".$id;
            // echo  $request->$percentage."<br>";
            // $show = DB::table('covid_brgy')
                // ->where('id', '=', $id)
                // ->update(['Registrants' => $request->$regis])
                // ->update(['percentage' => $request->$percentage]);
                $news = covid::find($id);
                $news->Registrants =  $request->$regis;
                $news->percentage =  $request->$percentage;
                $news->save();
            }
            //echo  $request->$regis."<br>".$request->$percentage."<br>";
            
      
            return redirect()->route('admin.covid.brgy')->with('success', 'Updated Successfully');
    }
    public function Covid_target(Request $request)
    {
        $id = $request->id;
        $news = covid_total::find($id);
        $news->val = $request->get('target_val');
        $news->save();

        return redirect()->route('admin.covid.brgy')->with('success', 'Target Updated Successfully');
    }
}
