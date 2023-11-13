<?php

namespace App\Controllers;

use App\Models\UserModels;
use App\Models\ReportMonthFaskes;
use App\Models\SendInformation;

class Faskes extends BaseController
{
    // function view untuk dashboard role fasilitas kesehatan
    public function dashboard(): string
    {
        return view('faskes/dashboard');
    }

    // function view data laporan
    public function tabel_laporan()
    {
        $reportModel = new ReportMonthFaskes();
        $data['data'] = $reportModel->findAll();
        return view('faskes/tabel_laporan', $data);
    }

    // function view untuk form laporan fasilitas kesehatan
    public function laporan(): string
    {
        $userModel = new UserModels();
        $data['puskesmas'] = $userModel->getPuskesmas();
        return view('faskes/laporan', $data);
    }

    // function untuk menyimpan laporan yang di kirim oleh faskes
    public function saveLaporan()
    {
        $reportModel = new ReportMonthFaskes();
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
                'date' => date('Y-m-d')
            ]);
            return redirect()->to('faskes/laporan')->with('success', 'Laporan Berhasil Terkirim');
        } else {
            return redirect()->to('faskes/laporan')->with('error', 'Laporan Gagal Terkirim');
        }
    }

    // function untuk melihat detail laporan
    public function view_laporan($id)
    {
        $reportModel = new ReportMonthFaskes();
        $data['data'] = $reportModel->find($id);
        return view('faskes/viewLaporan', $data);
    }

    // function untuk melihat informasi yang dikirim ke PKM
    public function view_information()
    {
        $modelInformation = new SendInformation();
        $data['data'] = $modelInformation->findAll();
        return view('faskes/view_information', $data);
    }

    // function form informasi yang akan dikirim ke PKM
    public function form_information(): string
    {
        $userModel = new UserModels();
        $data['puskesmas'] = $userModel->getPuskesmas();
        return view('faskes/form_informasi', $data);
    }

    // function proses insert data informasi yang akan dikirim ke PKM
    public function add_information()
    {
        $modelInformation = new SendInformation();
        $tanggal = date('Y-m-d');
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nama_faskes' => $this->request->getVar('nama_faskes'),
            'alamat' => $this->request->getVar('alamat'),
            'puskesmas' => $this->request->getVar('puskesmas'),
            'informasi' => $this->request->getVar('informasi'),
            'tanggal' => $tanggal,
        ];
        $modelInformation->insert($data);
        return redirect()->to('faskes/view_information')->with('success', 'Informasi Berhasil dikirim, Terima Kasih');
    }

    // function untuk menghapus data lama dengan rentan waktu 12 bulan
    public function removeOldData()
    {
        $sixMonthAgo = date('Y-m-d', strtotime('-12 month'));
        $reportModel = new ReportMonthFaskes();
        $reportModel->where('date <', $sixMonthAgo)->delete();
    }
}
