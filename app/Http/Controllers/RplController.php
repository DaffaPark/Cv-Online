<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RplExport;
use App\Imports\RplImport;
use App\Models\Rpl;
use Illuminate\Http\Request;

class RplController extends Controller
{
    public function index(){

        $data = Rpl::paginate(4);
        return view('Guru.rpl.dataRpl',compact('data'));
    }

    public function tambahmurid(){
        return view('Guru.rpl.tambahmurid');
    }


    public function insertdata(Request $request){
        $data = Rpl::create($request->all());
        return redirect('/muridrpl')->with('Sukses','Data Berhasil Ditambahkan');
    }

    public function tambahstatus($id){

        $data = Rpl::find($id);

        return view('Guru.rpl.tambahstatus', compact('data'));

    }

    public function updatestatus(Request $request, $id, Rpl $rpl){
        $data = Rpl::find($id);
        $data->update($request->all());
        
        return redirect('/muridrpl')->with('Sukses','Data Berhasil Diupdate');


    }
    public function hapusrpl($id){
        $data = Rpl::find($id);
        $data->delete();

        return redirect('/muridrpl')->with('Sukses','Data Berhasil Dihapus');
    }

    public function filterrpl(Request $request)
    {
        $data = Rpl::query();

        $data->when($request->name, function ($query) use ($request){
          return $query->where('name', 'like', '%'.$request->name.'%');
        });
        $data->when($request->kelas, function ($query) use ($request){
          return $query->whereKelas($request->kelas);
        });
        $data->when($request->jurusan, function ($query) use ($request){
          return $query->whereJurusan($request->jurusan);
        });

        return view('Guru.rpl.dataRpl', ['data' => $data -> paginate(10)]);
    }
    public function exportrpl(){
        return Excel::download(new RplExport('XII'), 'DataMuridRpl.xlsx');
    }

    public function importdatarpl(){
        return view('Guru.rpl.Import');
    }
    public function importrpl(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('DataRpl', $namafile);

        Excel::import(new RplImport, \public_path('/DataRpl/'.$namafile));
        return redirect('/muridrpl')->with('Sukses','Data Berhasil Di Import');
    }

}