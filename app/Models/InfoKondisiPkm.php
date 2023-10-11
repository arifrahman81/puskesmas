<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoKondisiPkm extends Model
{
    protected $table = 'infokondisipkm';
    protected $primaryKey = 'id';
    protected $useTimesTamps = true;
    protected $dateFormat = 'date';
    protected $allowedFields = ['name', 'title', 'info', 'date'];

    public function inserData($name, $title, $info, $date)
    {
        $data = [
            'name' => $name,
            'title' => $title,
            'info' => $info,
            'date' => $date
        ];

        return $this->insert($data);
    }

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getDataById($id)
    {
        return $this->find($id);
    }
}
