<?php

namespace App\Http\Controllers;

use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AlumniImport;
use App\Models\DataAlumni;
use Illuminate\Http\Request;

class DataAlumniController extends Controller
{
    public function index(){

        $alumnis = DataAlumni::paginate(4);
        return view('Guru.dataalumni.muridalumni',compact('alumnis'));
    }

    public function tambahalumni(){
        return view('Guru.dataalumni.tambahalumni');
    }


    public function insertalumni(Request $request){
        $alumnis = DataAlumni::create($request->all());
        return redirect('/muridalumni')->with('Sukses','Data Berhasil Ditambahkan');
    }

    public function statusalumni($id){

        $alumnis = DataAlumni::find($id);

        return view('Guru.dataalumni.statusalumni', compact('alumnis'));

    }

    public function updatealumni(Request $request, $id, DataAlumni $dataAlumni){
        $alumnis = DataAlumni::find($id);
        $alumnis->update($request->all());
        
        return redirect('/muridalumni')->with('Sukses','Data Berhasil Diupdate');


    }
    public function hapusalumni($id){
        $alumnis = DataAlumni::find($id);
        $alumnis->delete();

        return redirect('/muridalumni')->with('Sukses','Data Berhasil Dihapus');
    }

    public function filteralumni(Request $request)
    {
        $alumnis = DataAlumni::query();

        $alumnis->when($request->name, function ($query) use ($request){
          return $query->where('name', 'like', '%'.$request->name.'%');
        });
        $alumnis->when($request->jurusan, function ($query) use ($request){
          return $query->whereJurusan($request->jurusan);
        });

        return view('Guru.dataalumni.muridalumni', ['alumnis' => $alumnis -> paginate(10)]);
    }
    public function exportalumni(){
        return Excel::download(new AlumniExport('Alumni'), 'DataAlumni.xlsx');
    }

    public function importdataalumni(){
        return view('Guru.dataalumni.Importalumni');
    }
    public function importalumni(Request $request){
        $alumnis = $request->file('file');

        $namafile = $alumnis->getClientOriginalName();
        $alumnis->move('DataAlumni', $namafile);

        Excel::import(new AlumniImport, \public_path('/DataAlumni/'.$namafile));
        return redirect('/muridalumni')->with('Sukses','Data Berhasil Di Import');
    }
}
