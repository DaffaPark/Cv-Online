<?php

namespace App\Imports;

use App\Models\Tkj;
use Maatwebsite\Excel\Concerns\ToModel;

class TkjImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tkj([
            'nis'         => $row[0],
            'name'        => $row[1],
            'kelas'       => $row[2],
            'jeniskelamin'=> $row[3],
            'jurusan'     => $row[4],
            'angkatan'    => $row[5],
            'ttl'         => $row[6],
            'alamat'      => $row[7],
            'notelp'      => $row[8],
            'email'       => $row[9],
            'nilai'       => $row[10],
            'akademik'    => $row[11],
            'sikap'       => $row[12],
            'keahlian'    => $row[13],
            'pengalaman'  => $row[14],
            'perkembangan'=> $row[15],
            'prestasi'    => $row[16],
            'organisasi'  => $row[17],
            'status'      => $row[18]
        ]);
    }
}
