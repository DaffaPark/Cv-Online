<?php

namespace App\Http\Controllers;


use App\Models\Rpl;
use App\Models\Tkj;
use App\Models\Tv;
use App\Models\Mm;
use App\Models\Ki;
use App\Models\Peksos;
use App\Models\Di;
use App\Models\Film;
use App\Models\Animasi;
use Illuminate\Http\Request;
use PDF;

class CvController extends Controller
{
   public function cvrpl($id){
         $data = Rpl::find($id);
       return view('exportrpl', compact('data'));
    }

    public function printrpl($id){
         $data = Rpl::find($id);
        $pdf = PDF::loadview('exportrpl', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('exportrpl');
    }

    public function printtkj($id){
         $data = Tkj::find($id);
        $pdf = PDF::loadview('export_tkj', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_tkj');
    }

    public function printtv($id){
         $data = Tv::find($id);
        $pdf = PDF::loadview('export_tv', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_tv');
    }

    public function printmm($id){
         $data = Mm::find($id);
        $pdf = PDF::loadview('export_mm', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_mm');
    }

    public function printpeksos($id){
         $data = Peksos::find($id);
        $pdf = PDF::loadview('export_peksos', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_peksos');
    }

    public function printki($id){
         $data = Ki::find($id);
        $pdf = PDF::loadview('export_ki', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_ki');
    }

    public function printfilm($id){
         $data = Film::find($id);
        $pdf = PDF::loadview('export_film', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_film');
    }
    public function printdi($id){
         $data = Di::find($id);
        $pdf = PDF::loadview('export_di', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_di');
    }

    public function printanimasi($id){
         $data = Animasi::find($id);
        $pdf = PDF::loadview('export_animasi', ['data' => $data]);
        return $pdf->setPaper('a4', 'portrait')->stream('export_animasi');
    }
    
    
}
