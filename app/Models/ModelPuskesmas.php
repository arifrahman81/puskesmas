<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPuskesmas extends Model
{
    protected $table = 'puskesmas';
    protected $useTimesTamps = true;
    protected $allowedFields = ['id_puskesmas', 'nama_puskesmas'];

    // public function Puskesmas()
    // {
    //     return $this->db->table('puskesmas')
    //         ->Get()->getResultArray();
    // }
}