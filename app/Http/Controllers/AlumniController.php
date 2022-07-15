<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni; 
use App\User; 
use Auth;
use PDF;
class AlumniController extends Controller
{
    public function create()
   {
       return view('alumni.cvalumni');
   }
   
   public function store(Request $request)
   {     
        $alumni = new Alumni;
        $alumni->user_id = Auth::user()->id;
        $alumni->name = $request->name;
        $alumni->jeniskelamin = $request->jeniskelamin;
        $alumni->jurusan = $request->jurusan;
        $alumni->angkatan = $request->angkatan;
        $alumni->ttl = $request->ttl;
        $alumni->alamat = $request->alamat;
        $alumni->notelp = $request->notelp;
        $alumni->email = $request->email;
        $alumni->status = $request->status;
        $alumni->pengalamankerja = $request->pengalamankerja;
        $alumni->alamatkerja = $request->alamatkerja;
        $alumni->sesuai = $request->sesuai;
        $alumni->jabatan = $request->jabatan;
        $alumni->pendapatan = $request->pendapatan;
        $alumni->save();

        return back();

   }
  public function edit($id)
  {
    $alumni = Alumni::findOrFail($id);

    return view('alumni.editalumni', ['alumni' => $alumni]);
    } 

   public function update(Request $request, $id)
{
   $alumni = Alumni::find($id)->update($request->all()); 
         
   return back()->with('success',' Data telah diperbaharui!');
}
public function hapus($id){
        $alumni = Alumni::find($id);
        $alumni->delete();

        return back()->with('success',' Data telah dihapus!');
    }
    public function export($id){
         $alumni = Alumni::find($id);
        $pdf = PDF::loadview('alumni_pdf', ['alumni' => $alumni]);
        return $pdf->setPaper('a4', 'portrait')->stream('alumni_pdf');
    }
}
