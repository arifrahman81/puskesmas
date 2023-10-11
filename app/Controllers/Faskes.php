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
        $file_path = $this->handleFileUpload(); // variabel untuk menghendel penyimpanan file yang di upload ole user
        $data = [
            'name' => $this->request->getPost('name'),
            'name_faskes' => $this->request->getPost('name_faskes'),
            'address' => $this->request->getPost('address'),
            'puskesmas' => $this->request->getPost('puskesmas'),
            'name_laporan' => $this->request->getPost('name_laporan'),
            'catatan' => $this->request->getPost('catatan'),
            'file' => $file_path,
            'date' => date('Y-m-d')
        ];

        $reportModel->save($data);


        return redirect()->to('Faskes/laporan')->with('success', 'Laporan Berhasil Terkirim');
    }

    public function form_faskes(): string
    {
        return view('Faskes/form_faskes');
    }

    // private function yang menangani file yang di upload oleh user
    private function handleFileUpload()
    {
        $file = $this->request->getFile('file');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads', $newName);
            return 'uploads/' . $newName;
        }

        return null;
    }

    // function untuk menghapus data lama dengan rentan waktu 12 bulan
    public function removeOldData()
    {
        $sixMonthAgo = date('Y-m-d', strtotime('-12 month'));
        $reportModel = new ReportMonthFaskes();
        $reportModel->where('date <', $sixMonthAgo)->delete();
    }
}
