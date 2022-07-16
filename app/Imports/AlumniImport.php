<?php

namespace App\Imports;

use App\Models\DataAlumni;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumniImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new DataAlumni([

            'nis'         => $row[0],
            'name'        => $row[1],
            'jurusan'     => $row[2],
            'angkatan'    => $row[3],
            'ttl'         => $row[4],
            'alamat'      => $row[5],
            'notelp'      => $row[6],
            'email'       => $row[7],
            'nilai'       => $row[8],
            'akademik'    => $row[9],
            'sikap'       => $row[10],
            'keahlian'    => $row[11],
            'pengalaman'  => $row[12],
            'perkembangan'=> $row[13],
            'prestasi'    => $row[14],
            'organisasi'  => $row[15],
            'status'      => $row[16],

        ]);
    }
}
