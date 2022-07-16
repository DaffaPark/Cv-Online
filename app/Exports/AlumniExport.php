<?php

namespace App\Exports;

use App\Models\DataAlumni;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class AlumniExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($dataalumni): array
    {
        return [
            $dataalumni->nis,
            $dataalumni->name,
            $dataalumni->jurusan,
            $dataalumni->angkatan,
            $dataalumni->ttl,
            $dataalumni->alamat,
            $dataalumni->notelp,
            $dataalumni->email,
            $dataalumni->nilai,
            $dataalumni->akademik,
            $dataalumni->sikap,
            $dataalumni->keahlian,
            $dataalumni->pengalaman,
            $dataalumni->perkembangan,
            $dataalumni->prestasi,
            $dataalumni->organisasi,
            $dataalumni->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->status = $keyword;
    }
    public function query()
    {
        return DataAlumni::query()->where('status', 'like', '%' . $this->status . '%');
    }
}
