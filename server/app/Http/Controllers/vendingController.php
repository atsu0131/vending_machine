<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendings;

class vendingController extends Controller
{
    public function index () 
    {
        $goods = vendings::all();


        return view('vending/index', compact('goods'));
    }

    public function end (Request $request) 
    {
        $vendings = vendings::find($request->goods); 

        if($request->money < $vendings->price){
            $flag = 1;
            $change = 0;
        }elseif($vendings->store <= 0){
            $flag = 2;
            $change = 0;
        }else{
            $vendings->store -= 1;
            $vendings->save(); 
            $change =  $request->money - $vendings->price; 
            $flag = 0;
        }


        return view('vending/end', compact('change','flag'));
    }
}
