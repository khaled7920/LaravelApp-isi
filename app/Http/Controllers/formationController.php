<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class formationController extends Controller
{
    public function show(){
       $formations = Formation::all();

        return view('formation',['formations'=>$formations]);
    }
        
    
}
