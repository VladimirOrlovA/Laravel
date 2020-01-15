<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShagController extends Controller
{
    public function form()
    {
        return view('form');
    }
    
    public function show1(Request $request)
    {
        $text = $request->input('text');
            
        return view('show', ['text'=>$text]);
    }
    
}
