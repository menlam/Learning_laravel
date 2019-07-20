<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AllSqlQueryController extends Controller
{
    public function index(){
        $customers = DB::table('customers')->get();
        return view('index',['customers'=>$customers]);

    }

    public function singlerow(){
        $customers=DB::table('customers')->where('first_name','Francisco')->first();
        echo "<pre>";
            print_r($customers);
        echo "</pre>";
    }

    public function singlecolumn(){

        $customers=DB::table('customers')->where('first_name','Francisco')->value('last_name');
        echo "<pre>";
            print_r($customers);
        echo "</pre>";
    }

    public function pluck1(){

        $names=DB::table('customers')->pluck('first_name');
            foreach($names as $name){
                echo $name,"<br>";
            }
    }

    public function pluck2(){

        $names=DB::table('customers')->pluck('first_name','company');
            foreach($names as $company=>$first_name){
                echo "Name :" , $first_name," ||||";
                echo "Company: ", $company, "<br>";
            }
    }

    public function chunk(){

    }

    public function aggregate(){
        
    }
}
