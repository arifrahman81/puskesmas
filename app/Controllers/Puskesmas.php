<?php

namespace App\Controllers;

use App\Models\InfoKondisiPkm;
use App\Models\ReportMonthFaskes;


class Puskesmas extends BaseController
{
    // function view untuk dashboard puskesmas
    public function dashboard(): string
    {
        return view('Puskesmas/dashboard');
    }

    // function view untuk menu melihat laporan dan kondisi pkm
    public function laporan()
    {
        $reportModel = new ReportMonthFaskes();
        $data['data'] = $reportModel->findAll();
        return view('Puskesmas/laporan', $data);
    }

    // function view untuk melihat detail laporan PKM berdasarkan Id
    public function viewLaporan($id)
    {
        $reportModel = new ReportMonthFaskes();
        $data['data'] = $reportModel->find($id);
        return view('Puskesmas/viewLaporanFaskes', $data);
    }



    public function laporan_puskesmas()
    {
        return view('Puskesmas/laporan_puskesmas');
    }

    public function t_laporan_puskesmas()
    {
        return view('Puskesmas/t_laporan_puskesmas');
    }

    public function blog()
    {
        return view('Puskesmas/blog');
    }

    public function t_blog()
    {
        return view('Puskesmas/t_blog');
    }

    public function saveDataInfoPkm()
    {
        $request = \Config\Services::request();

        $name = $request->getPost('name');
        $title = $request->getPost('title');
        $info = $request->getPost('info');
        $date = date('Y-m-d');

        $dataModel = new InfoKondisiPkm();
        $dataModel->inserData($name, $title, $info, $date);

        return redirect()->to('Puskesmas/t_blog')->with('success', 'Data Berhasil Disimpan');
    }

    public function removeOldData()
    {
        $sixMonthAgo = date('Y-m-d', strtotime('-6 month'));
        $dataModel = new InfoKondisiPkm();
        $dataModel->where('date <', $sixMonthAgo)->delete();
    }
}
