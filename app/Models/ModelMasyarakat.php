<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMasyarakat extends Model
{
    protected $table = 'masyarakat';
    protected $useTimesTamps = true;
    protected $allowedFields = ['nama', 'alamat', 'no_hp', 'tanggal_laporan','nama_puskesmas', 'laporan', 'status'];
}