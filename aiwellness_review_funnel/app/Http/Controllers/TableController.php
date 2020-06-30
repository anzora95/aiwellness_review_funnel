<?php

namespace App\Http\Controllers;

use App\Aiwellness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{

    public function datatable(){

        $today=date("Y-m-d");
        $all_data=Aiwellness::select('Product','First_Name','Last_Name','Shipping1','City','St','Zip')->orderBy('id','desc')->get();
//        $today_data=Aiwellness::select('Product','First_Name','Last_Name','Shipping1','City','St','Zip')->where('created_at','LIKE','%{'.$today'}%')->get();
        $today_data=DB::table('aiwellnesses')->where('created_at','LIKE','%'.$today.'%')->get();

        return view('data.table')->with('data',$all_data)->with('today',$today_data);
        //año mes dia

    }



}
