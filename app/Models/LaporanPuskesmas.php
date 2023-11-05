<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanPuskesmas extends Model
{
    protected $table = 'laporan_puskesmas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kota',
        'nama_puskesmas',
        'judul_laporan',
        'file'
    ];
}
