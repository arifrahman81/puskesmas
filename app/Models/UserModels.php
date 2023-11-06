<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table = 'usertable';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'username',
        'password',
        'role'
    ];

    // function untuk mengecek reques berdasarkan username
    public function getUserByCredentials($username)
    {
        return $this->where('username', $username)->first();
    }

    // function add data
    public function insertUser($data)
    {
        return $this->insert($data);
    }

    // function mencari data berdasarkan role puskesmas dan faskes
    public function getUserByRoles()
    {
        return $this->whereIn('role', ['puskes', 'faskes'])->findAll();
    }

    // function mencari data berdasarkan role puskesmas
    public function getPuskesmas()
    {
        return $this->where('role', 'puskes')->findAll();
    }

    public function update_data($id, $data)
    {
        $this->set($data);
        $this->where('id', $id);
        $this->update();
    }
}
