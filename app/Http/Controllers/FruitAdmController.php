<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitAdmController extends Controller
{
    public function index(){
        $fruitdata=Fruit::all();
        $count = count($fruitdata);
        return view ('fruitadm', compact('fruitdata','count'));
    }
    public function show($id){
        $show=Fruit::find($id);
        return view ('showadm', compact('show'));
    }
    public function destroy($id){
        $destroy = Fruit::find($id);
        $destroy->delete();
        return redirect('/fruitadm');
    }
}
