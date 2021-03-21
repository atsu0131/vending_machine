<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendings;
use App\Models\money;
use App\Http\Requests\vendingRequest;

class vendingController extends Controller
{
    public function index () 
    {
        $goods = vendings::all();


        return view('vending/index', compact('goods'));
    }

    public function end (vendingRequest $request) 
    {

        $vendings = vendings::find($request->goods); 
        $vendings_money = money::first();

        if($request->money < $vendings->price){
            $flag = 1;
            $change = 0;
        }elseif($vendings->store <= 0){
            $flag = 2;
            $change = 0;
        }elseif($vendings_money->money < $request->money - $vendings->price){
            $flag = 3;
            $change = 0;
        }else{
            $vendings->store -= 1;
            $vendings->save(); 
            
            $vendings_money->save();
            $change =  $request->money - $vendings->price;
            $vendings_money->money = $vendings_money->money + $vendings->price - $change;
            $flag = 0;
        }
        $price = $vendings_money->money;


        return view('vending/end', compact('change','flag','price'));
    }
}
