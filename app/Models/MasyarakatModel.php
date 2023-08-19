<?php

namespace App\Models;

use CodeIgniter\Model;

class MasyarakatModel extends Model
{
    public function AllData()
    {
        return $this->db->table('masyarakat')
            ->get()->getResultArray();
    }
}