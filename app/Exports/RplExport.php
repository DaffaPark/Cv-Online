<?php

namespace App\Exports;

use App\Models\Rpl;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class RplExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
 

    public function map($rpl): array
    {
        return [
            $rpl->nis,
            $rpl->name,
            $rpl->jurusan,
            $rpl->angkatan,
            $rpl->ttl,
            $rpl->alamat,
            $rpl->notelp,
            $rpl->email,
            $rpl->nilai,
            $rpl->akademik,
            $rpl->sikap,
            $rpl->keahlian,
            $rpl->pengalaman,
            $rpl->perkembangan,
            $rpl->prestasi,
            $rpl->organisasi,
            $rpl->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Rpl::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
