<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\money;

class MoneyController extends Controller
{
    public function index()
      {
         $moneys = money::all();
         return view('money.index', [
         'moneys' => $moneys, 
         ]);
      }

      public function edit($id) 
      { 
            $money = money::find($id); 
            return view('money.edit', [ 
                'money' => $money,
            ]); 
      } 
   
      public function update(Request $request, $id) 
      { 
             $money = money::find($id); 
             $money->fill( $request->all() ); 
             $money->save(); 
             return redirect('/money'); 
      } 
}
