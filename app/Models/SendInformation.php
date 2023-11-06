<?php

namespace App\Models;

use CodeIgniter\Model;

class SendInformation extends Model
{
    protected $table = 'send_information';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'nama_faskes',
        'alamat',
        'puskesmas',
        'informasi',
        'tanggal'
    ];
}
