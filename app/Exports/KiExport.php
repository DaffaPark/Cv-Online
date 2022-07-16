<?php

namespace App\Exports;

use App\Models\Ki;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
class KiExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($ki): array
    {
        return [
            $ki->nis,
            $ki->name,
            $ki->jurusan,
            $ki->angkatan,
            $ki->ttl,
            $ki->alamat,
            $ki->notelp,
            $ki->email,
            $ki->nilai,
            $ki->akademik,
            $ki->sikap,
            $ki->keahlian,
            $ki->pengalaman,
            $ki->perkembangan,
            $ki->prestasi,
            $ki->organisasi,
            $ki->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Ki::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
