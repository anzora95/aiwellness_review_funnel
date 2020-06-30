<?php

namespace App\Http\Controllers;

use App\Notifications\first_step;
use Illuminate\Http\Request;
use App\Aiwellness;
use Illuminate\Support\Facades\Notification;
use App\Order;
//use App\Notifications\first_step;

class IndexController extends Controller
{

//    protected $stars;
//    protected $product;
//    protected $review;
//    protected $order_number;

    public function first_step(Request $request){

        $order_number=$request->post('order');         //REQUEST DATA
        $stars=$request->post('stars');         //REQUEST DATA
        $review=$request->post('review');         //REQUEST DATA
        $product=$request->post('product');         //REQUEST DATA

        $request->session()->put('order',$order_number);    //SESSION DATA
        $request->session()->put('stars',$stars);         //SESSION DATA
        $request->session()->put('review',$review);        //SESSION DATA
        $request->session()->put('product',$product);        //SESSION DATA

//        $arr=[$user->name,0,$email_challenged->name,$tittle]; //DATA FOR EMAIL TEMPLATE CHALLENGER

        Notification::route('mail', 'jose@mvagency.co')
            ->notify(new first_step()); //EMAIL FOR JOSE

//        Notification::route('mail', 'diego@mvagency.co')
//            ->notify(new first_step()); //EMAIL FOR DIEGO

//        Notification::route('mail', 'ariel@mvagency.co')
//            ->notify(new first_step()); //EMAIL FOR ARIEL

        return view('review')->with('review',$review);

    }

    public function second_step(Request $request){

        return view('shipping');

    }

    public function last_step(Request $request){

        $email=strtolower($_POST['email']);
        $fname=ucwords(strtolower($_POST['fName']));
        $lname=ucwords(strtolower($_POST['lName']));
        $fullname = $fname." ".$lname;
        $saddress1=ucwords(strtolower($_POST['sAddress1']));
        $saddress2=ucwords(strtolower($_POST['sAddress2']));
        $city=ucwords(strtolower($_POST['city']));
        $state=$_POST['state'];
        $zip=$_POST['zip'];

        $neworder = new Aiwellness;
        $neworder->Product=$request->session()->get('product');        //ACCSESSING TO SESSION DATA AND STORE THIS DATA
        $neworder->Rating=$request->session()->get('stars');        //ACCSESSING TO SESSION DATA AND STORE THIS DATA
        $neworder->Review=$request->session()->get('review');        //ACCSESSING TO SESSION DATA AND STORE THIS DATA
        $neworder->OrderNumber=$request->session()->get('order');        //ACCSESSING TO SESSION DATA AND STORE THIS DATA
        $neworder->Email=$email;
        $neworder->First_Name=$fname;
        $neworder->Last_Name=$lname;
        $neworder->Shipping1=$saddress1;
        $neworder->Shipping2=$saddress2;
        $neworder->City=$city;
        $neworder->St=$state;
        $neworder->Zip=$zip;
        $neworder->save();

        $request->session()->forget('product');
        $request->session()->forget('stars');
        $request->session()->forget('review');
        $request->session()->forget('order');

        return view('thank');

    }

    public function db_search($order_id){


        $consulta=Order::where('Code',$order_id)->first();



        if($consulta!=null){
            $fechaactual =date('Y-m-d');
            $fechastamp=strtotime($fechaactual);
            $orderdate=strtotime($consulta->CodeDate);
            $result=$fechastamp-$orderdate;

            if ($consulta->Claimed==1){
                echo "2";
            }
            else{
                if ($result>=604800){
                    echo"0";
                }else{
                    echo "3";
                }
            }
        }else{
            echo "1";
        }


    }
}
