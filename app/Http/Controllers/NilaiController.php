<?php

namespace App\Http\Controllers;
use App\Models\Rpl;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function nilai($id){
         $data = Rpl::find($id);
        return view('rpl.nilai',compact('data'));
    }
}
