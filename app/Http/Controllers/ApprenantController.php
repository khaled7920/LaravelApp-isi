<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index(){
        //return Apprenant::all();
        $liste = Apprenant::all();
        return view('apprenants',['liste'=>$liste]);
    }
}

