<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendings;

class adminController extends Controller
{
    public function index()
      {
         $vendings = vendings::all();
         return view('admin.index', [
         'vendings' => $vendings, 
         ]);
      }

      public function edit($id) 
      { 
            $vending = vendings::find($id); 
            return view('admin.edit', [ 
                'vending' => $vending,
            ]); 
      } 
   
      public function update(Request $request, $id) 
      { 
             $vending = vendings::find($id); 
             $vending->fill( $request->all() ); 
             $vending->save(); 
             return redirect('/admin'); 
      } 
}
