<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function first_step(Request $request){

        $order_number=$request->post('order');
        $stars=$request->post('stars');
        $review=$request->post('review');
        $product=$request->post('product');

        return view('review')->with('review',$review);


    }

    public function second_step(Request $request){

        return view('shipping');

    }
}
