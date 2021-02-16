<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;
use App\Models\Legume;

class HomeController extends Controller
{
    public function index(){
        $fruitdata=Fruit::all();
        $legumedata=Legume::all();
        return view ('home',compact('fruitdata','legumedata'));
    }
}
