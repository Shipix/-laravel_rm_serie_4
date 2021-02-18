<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class EditLegumeAdmin extends Controller
{
    public function edit(Legume $id){
        $legumedata=Legume::find($id);
        return view('editlegumeadm', compact('legumedata'));
    }
    public function update($id, Request $request){
        $legumedata=Legume::find($id);
        $legumedata->name= $request->name;
        $legumedata->qantite= $request->qantite;
        $legumedata->save();
        return redirect('/legume-showadm/'.$legumedata->id);
    }
}
