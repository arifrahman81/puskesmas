<?php

namespace App\Controllers;
use App\Models\ModelPuskesmas;

class Data extends BaseController
{
    protected $modelPuskesmas;

    public function __construct()
    {
        
        $this->modelPuskesmas = new ModelPuskesmas();

    }

    public function save()
    {
        $this->modelPuskesmas->save([
            'nama_puskesmas' => $this->request->getVar('nama_puskesmas'),
            
            
        ]);

    
    }

    public function puskesmas()
    {
        $puskesmas = $this->modelPuskesmas->findAll();
        $data = [
            'puskesmas' => $puskesmas
        ];

        return view('masyarakat/laporan', $data);
    }
}