<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class AddLegumeController extends Controller
{
    public function index(){
        return view('addlegume');
    }
    public function store(Request $request){
        $store = new Legume();
        $store->name = $request->name;
        $store->qantite = $request->qantite;
        $store->save();
        return redirect()->back();
    }
}
