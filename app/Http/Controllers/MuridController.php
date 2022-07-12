<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Rpl;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MuridController extends Controller
{

  public function index()
    {
        return view('murid.murid');
    }
   public function searchrpl(){

    	
        $data = Rpl::all();
    	return view('murid.searchrpl',compact('data'));
    }
    function findrpl(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('rpls')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchrpl',['murids'=>$murids]);

    }
    public function searchtkj(){

      
        $data = Rpl::all();
      return view('murid.searchtkj',compact('data'));
    }
    function findtkj(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('tkjs')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchtkj',['murids'=>$murids]);

    }
    public function searchtv(){

      
        $data = Rpl::all();
      return view('murid.searchtv',compact('data'));
    }
    function findtv(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('tvs')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchtv',['murids'=>$murids]);

    }
    public function searchpeksos(){

      
        $data = Rpl::all();
      return view('murid.searchpeksos',compact('data'));
    }
    function findpeksos(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('peksos')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchpeksos',['murids'=>$murids]);

    }
    public function searchmm(){

      
        $data = Rpl::all();
      return view('murid.searchmm',compact('data'));
    }
    function findmm(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('mms')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchmm',['murids'=>$murids]);

    }
    public function searchki(){

      
        $data = Rpl::all();
      return view('murid.searchki',compact('data'));
    }
    function findki(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('kis')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchki',['murids'=>$murids]);

    }
    public function searchfilm(){

      
        $data = Rpl::all();
      return view('murid.searchfilm',compact('data'));
    }
    function findfilm(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('films')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchfilm',['murids'=>$murids]);

    }
    public function searchdi(){

      
        $data = Rpl::all();
      return view('murid.searchdi',compact('data'));
    }
    function finddi(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('dis')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchdi',['murids'=>$murids]);

    }
    public function searchanimasi(){

      
        $data = Rpl::all();
      return view('murid.searchanimasi',compact('data'));
    }
    function findanimasi(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);
  
           $search_text = $request->input('query');
           $murids = DB::table('animasis')
                      ->where('nis','LIKE','%'.$search_text.'%')
                    //   ->orWhere('SurfaceArea','<', 10)
                    //   ->orWhere('LocalName','like','%'.$search_text.'%')
                      ->paginate(2);
            return view('murid.searchanimasi',['murids'=>$murids]);

    }



}