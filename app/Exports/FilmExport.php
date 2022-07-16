<?php

namespace App\Exports;

use App\Models\Film;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class FilmExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($film): array
    {
        return [
            $film->nis,
            $film->name,
            $film->jurusan,
            $film->angkatan,
            $film->ttl,
            $film->alamat,
            $film->notelp,
            $film->email,
            $film->nilai,
            $film->akademik,
            $film->sikap,
            $film->keahlian,
            $film->pengalaman,
            $film->perkembangan,
            $film->prestasi,
            $film->organisasi,
            $film->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Film::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
