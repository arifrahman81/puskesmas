<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanPuskesmas extends Model
{
    protected $table = 'laporan_puskesmas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tahun',
        'bulan',
        'provinsi',
        'kota',
        'puskesmas',
        'nik',
        'nama_penderita',
        'umur',
        'jenis_kelamin',
        'nama_wali',
        'alamat',
        'tgl_kunjungan',
        'diagnosa',
        'klinis',
        'laboratorium',
    ];
}
