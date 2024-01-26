<?php

namespace App\Exports;

use App\Models\Ektp;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EktpExport implements FromCollection, WithHeadings, WithMapping
{
    public $tanggal_awal;
    public $tanggal_akhir;

    public function __construct($tanggal_awal, $tanggal_akhir)
    {
        $this->tanggal_awal = $tanggal_awal;
        $this->tanggal_akhir = $tanggal_akhir;
    }

    public function collection()
    {
        $ektp = Ektp::whereBetween('created_at', [$this->tanggal_awal, $this->tanggal_akhir])->get();
        return $ektp;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Tanggal Diajukan',
            'NIK',
            'Nama Lengkap',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Golongan Darah',
            'Alamat Lengkap',
            'Agama',
            'Status Perkawinan',
            'Pekerjaan',
            'Kewarganegaraan',
            'Keterangan',
        ];
    }

    public function map($ektp): array
    {
        return [
            $ektp->id_ektp,
            $ektp->created_at,
            $ektp->nik,
            $ektp->nama,
            $ektp->tempat_lahir,
            $ektp->tanggal_lahir,
            $ektp->jenis_kelamin,
            $ektp->gol_darah,
            $ektp->alamat,
            $ektp->agama,
            $ektp->status_perkawinan,
            $ektp->pekerjaan,
            $ektp->kewarganegaraan,
            $ektp->keterangan,
        ];
    }
}