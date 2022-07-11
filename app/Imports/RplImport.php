<?php

namespace App\Imports;

use App\Models\Rpl;
use Maatwebsite\Excel\Concerns\ToModel;

class RplImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rpl([
            'nis'=> $row[1],
            'name'=> $row[2],
            'kelas'=> $row[3],
            'jurusan'=> $row[4],
            'ttl'=> $row[5],
            'alamat'=> $row[6],
            'notelp'=> $row[7],
            'email'=> $row[8],
            'nilai'=> $row[9],
            'akademik'=> $row[10],
            'sikap'=> $row[11],
            'keahlian'=> $row[12],
            'pengalaman'=> $row[13],
            'perkembangan'=> $row[14],
            'prestasi'=> $row[15],
            'organisasi'=> $row[16],
        ]);
    }
}