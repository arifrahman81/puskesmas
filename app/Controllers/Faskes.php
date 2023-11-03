<?php

namespace App\Controllers;

use App\Models\UserModels;
use App\Models\ReportMonthFaskes;

class Faskes extends BaseController
{
    // function view untuk dashboard role fasilitas kesehatan
    public function dashboard(): string
    {
        return view('Faskes/dashboard');
    }

    // function view untuk menu laporan fasilitas kesehatan
    public function laporan(): string
    {
        $userModel = new UserModels();
        $data['puskesmas'] = $userModel->getPuskesmas();
        return view('Faskes/laporan', $data);
    }

    // function untuk menyimpan laporan yang di kirim oleh faskes
    public function saveLaporan()
    {
        $reportModel = new ReportMonthFaskes(); // objek baru dari class Report Month Faskes
        $file = $this->request->getFile('file');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $reportModel->insert([
                'name' => $this->request->getPost('name'),
                'name_faskes' => $this->request->getPost('name_faskes'),
                'address' => $this->request->getPost('address'),
                'puskesmas' => $this->request->getPost('puskesmas'),
                'name_laporan' => $this->request->getPost('name_laporan'),
                'catatan' => $this->request->getPost('catatan'),
                'file' => $newName,
                'file_path' => $file->getpath(),
                'date' => date('Y-m-d')
            ]);
            return redirect()->to('Faskes/laporan')->with('success', 'Laporan Berhasil Terkirim');
        } else {
            return redirect()->to('Faskes/laporan')->with('error', 'Laporan Gagal Terkirim');
        }
    }

    public function form_faskes(): string
    {
        return view('Faskes/form_faskes');
    }

    // function untuk menghapus data lama dengan rentan waktu 12 bulan
    public function removeOldData()
    {
        $sixMonthAgo = date('Y-m-d', strtotime('-12 month'));
        $reportModel = new ReportMonthFaskes();
        $reportModel->where('date <', $sixMonthAgo)->delete();
    }
}
