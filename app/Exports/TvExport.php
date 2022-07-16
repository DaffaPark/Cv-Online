<?php

namespace App\Exports;

use App\Models\Tv;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class TvExport  implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($tv): array
    {
        return [
            $tv->nis,
            $tv->name,
            $tv->jurusan,
            $tv->angkatan,
            $tv->ttl,
            $tv->alamat,
            $tv->notelp,
            $tv->email,
            $tv->nilai,
            $tv->akademik,
            $tv->sikap,
            $tv->keahlian,
            $tv->pengalaman,
            $tv->perkembangan,
            $tv->prestasi,
            $tv->organisasi,
            $tv->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Tv::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
