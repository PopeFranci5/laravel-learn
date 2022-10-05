<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoneyController extends Controller
{
    public function index() {
        return view('add-money-type');
    }

    public function submitmyform(Request $request)                 
      {
        // validation starts
         $this->validate($request,[                                         
            "name"=>"required",
            "amount"=>"required",
            "rate"=>"required",
            "country"=>"required",
            "first_minted"=>"required",
            ],[
                "name.required"=>"Name Should be filled",
                "amount.required"=>"Amount Should be filled",
                "rate.required"=>"Rate Should be filled",
                "country.required"=>"Country Should be filled",
                "first_minted.required"=>"Mint Date Should be filled",
            ]);  
                 // validation ends
         
                //Database insertion code starts
            $name = $request->input('name');
            $amount = $request->input('amount');
            $rate = $request->input('rate');
            $country = $request->input('country');
            $first_minted = $request->input('first_minted');
            $data=array('name'=>$name,'amount'=>$amount,'rate'=>$rate,'country'=>$country,'first_minted'=>$first_minted);
            DB::table('money')->insert($data);                            
               //Database insertion code ends    

            die("Form Submitted"); 
      }

    function api()
    {
        return Money::with(['variations', 'stocks'])->get();
    }
}
