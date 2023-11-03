<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianPasien extends Model
{
    protected $table = 'daftar_antrian';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'tgl_lahir',
        'alamat',
        'no_hp',
        'puskesmas',
        'keluhan',
        'jam',
        'nomor_antrian',
    ];
}
