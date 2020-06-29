<?php

namespace App\Http\Controllers;

use App\Aiwellness;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function datatable(){

        $all_data=Aiwellness::select('Product','First_Name','Last_Name','Shipping1','City','St','Zip')->get();

        return view('data.table')->with('data',$all_data);

    }

}
