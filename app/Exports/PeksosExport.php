<?php

namespace App\Exports;

use App\Models\Peksos;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class PeksosExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($peksos): array
    {
        return [
            $peksos->nis,
            $peksos->name,
            $peksos->jurusan,
            $peksos->angkatan,
            $peksos->ttl,
            $peksos->alamat,
            $peksos->notelp,
            $peksos->email,
            $peksos->nilai,
            $peksos->akademik,
            $peksos->sikap,
            $peksos->keahlian,
            $peksos->pengalaman,
            $peksos->perkembangan,
            $peksos->prestasi,
            $peksos->organisasi,
            $peksos->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Peksos::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
