<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legume;

class LegumeController extends Controller
{
    public function index(){
        $legumedata=Legume::all();
        return view ('legume',compact('legumedata'));
    }
}
