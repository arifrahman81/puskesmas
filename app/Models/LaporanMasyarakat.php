<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanMasyarakat extends Model
{
    protected $table = 'laporanmasyarakat';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'alamat',
        'no_hp',
        'date',
        'Puskesmas',
        'laporan',
    ];
}
