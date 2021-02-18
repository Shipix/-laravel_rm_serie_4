<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class EditFruitAdmin extends Controller
{
    public function edit($id){
        $fruitdata=Fruit::find($id);
        return view('editfruitadm', compact('fruitdata'));
    }
    public function update($id, Request $request){
        $fruitdata=Fruit::find($id);
        $fruitdata->name= $request->name;
        $fruitdata->qantite= $request->qantite;
        $fruitdata->save();
        return redirect('/fruit-showadm/'.$fruitdata->id);
    }
}
