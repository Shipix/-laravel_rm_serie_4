<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legume;

class LegumeAdmController extends Controller
{
    public function index(){
        $legumedata=Legume::all();
        $count = count($legumedata);

        return view ('legumeadm',compact('legumedata','count'));

    }
    public function show($id){
        $show=legume::find($id);
        return view ('showadm', compact('show'));
    }
    public function destroy($id){
        $destroy = Legume::find($id);
        $destroy->delete();
        return redirect('/legumeadm');
    }


}
