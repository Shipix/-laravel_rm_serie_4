<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function index(){
        $fruitdata=Fruit::all();
        return view ('fruit', compact('fruitdata'));
    }
    public function show($id){
        $show=Fruit::find($id);
        return view ('show', compact('show'));
    }
}
