<?php

namespace App\Exports;

use App\Models\Animasi;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class AnimasiExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($animasi): array
    {
        return [
            $animasi->nis,
            $animasi->name,
            $animasi->jurusan,
            $animasi->angkatan,
            $animasi->ttl,
            $animasi->alamat,
            $animasi->notelp,
            $animasi->email,
            $animasi->nilai,
            $animasi->akademik,
            $animasi->sikap,
            $animasi->keahlian,
            $animasi->pengalaman,
            $animasi->perkembangan,
            $animasi->prestasi,
            $animasi->organisasi,
            $animasi->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Animasi::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
