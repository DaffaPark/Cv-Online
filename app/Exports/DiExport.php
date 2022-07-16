<?php

namespace App\Exports;

use App\Models\Di;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class DiExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($di): array
    {
        return [
            $di->nis,
            $di->name,
            $di->jurusan,
            $di->angkatan,
            $di->ttl,
            $di->alamat,
            $di->notelp,
            $di->email,
            $di->nilai,
            $di->akademik,
            $di->sikap,
            $di->keahlian,
            $di->pengalaman,
            $di->perkembangan,
            $di->prestasi,
            $di->organisasi,
            $di->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Di::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
