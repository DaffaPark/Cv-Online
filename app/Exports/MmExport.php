<?php

namespace App\Exports;

use App\Models\Mm;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;

class MmExport implements WithMapping , FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($mm): array
    {
        return [
            $mm->nis,
            $mm->name,
            $mm->jurusan,
            $mm->angkatan,
            $mm->ttl,
            $mm->alamat,
            $mm->notelp,
            $mm->email,
            $mm->nilai,
            $mm->akademik,
            $mm->sikap,
            $mm->keahlian,
            $mm->pengalaman,
            $mm->perkembangan,
            $mm->prestasi,
            $mm->organisasi,
            $mm->status,
        ];
    }
     public function __construct(string $keyword)
    {
        $this->kelas = $keyword;
    }
    public function query()
    {
        return Mm::query()->where('kelas', 'like', '%' . $this->kelas . '%');
    }
}
