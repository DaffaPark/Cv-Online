<?php

namespace App\Exports;

use App\Models\Tkj;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class TkjExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($tkj): array
    {
        return [
            $tkj->nis,
            $tkj->name,
            $tkj->jurusan,
            $tkj->angkatan,
            $tkj->ttl,
            $tkj->alamat,
            $tkj->notelp,
            $tkj->email,
            $tkj->nilai,
            $tkj->akademik,
            $tkj->sikap,
            $tkj->keahlian,
            $tkj->pengalaman,
            $tkj->perkembangan,
            $tkj->prestasi,
            $tkj->organisasi,
            $tkj->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Tkj::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
