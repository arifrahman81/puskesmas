<?php

namespace App\Controllers;
use App\Models\ModelMasyarakat;


class Masyarakat extends BaseController
{
    protected $modelMasyarakat;
    protected $modelPuskesmas;

    public function __construct()
    {
        $this->modelMasyarakat = new ModelMasyarakat();
       

    }
    
    public function masyarakat(): string
    {
        return view('masyarakat/masyarakat');
    }

    public function laporanMasyarakat()
    {
        return view('masyarakat/laporan');
    }
    
    public function save()
    {
        $this->modelMasyarakat->save([
            'tanggal_laporan' => $this->request->getVar('tanggal_laporan'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            
            'laporan' => $this->request->getVar('laporan'),
            
        ]);

        session()->setFlashdata('bisa', 'Laporan Anda Telah Kami Terima. ');
        return redirect()->to('/masyarakat/status');
    }

    

    public function status(): string
    {
        $status = $this->modelMasyarakat->findAll();
        $data = [
            'status' => $status
        ];

        return view('masyarakat/status', $data);
    }

    public function daftar_antrian(): string
    {
        return view('masyarakat/daftar_antrian');
    }
}
