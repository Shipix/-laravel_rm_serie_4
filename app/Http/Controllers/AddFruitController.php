<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class AddFruitController extends Controller
{
    public function index(){
        return view('addfruit');
    }
    public function store(Request $request){
        $store = new Fruit;
        $store->name = $request->name;
        $store->qantite = $request->qantite;
        $store->save();
        return redirect()->back();
    }
}
