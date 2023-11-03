<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanMasyarakat extends Model
{
    protected $table = 'laporanmasyarakat';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_laporan',
        'name',
        'alamat',
        'no_hp',
        'tanggal',
        'Puskesmas',
        'laporan',
        'status'
    ];
}
