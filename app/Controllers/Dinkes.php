<?php

namespace App\Controllers;

use App\Models\UserModels;
use App\Models\InfoKondisiPkm;

class Dinkes extends BaseController
{
    // function view untuk dashboard role Dines kesehatan
    public function dashboard()
    {
        return view('Dinkes/dashboard');
    }

    // function view untuk menu melihat kondissi PKM
    public function kondisi_pkm()
    {
        // objek dari class info Kondisi Pkm
        $dataModel = new InfoKondisiPkm();
        // menarik semua data dari tabel database untuk di tampilkan
        $data['data'] = $dataModel->findAll();
        return view('Dinkes/kondisi_pkm', $data);
    }

    // function view untuk melihat detail kondisi pkm yang di pilih berdasarkan id
    public function viewKondisiPkm($id)
    {
        $dataModel = new InfoKondisiPkm();
        $data['data'] = $dataModel->find($id);
        return view('Dinkes/viewKondisiPkm', $data);
    }

    // function view untuk menu blog
    public function blog()
    {
        return view('Dinkes/blog');
    }

    // function view untuk menu melihat data penyakit
    public function data_penyakit()
    {
        return view('Dinkes/data_penyakit');
    }

    // function view untuk menu melihat daftar Puskesmas dan Fasilitas Kesehatan yang terdaftar
    public function user()
    {
        $userModel = new UserModels();
        $data['usertable'] = $userModel->getUserByRoles();

        return view('Dinkes/user', $data);
    }

    // function view untuk menu melihat data pengguna yang sedang login
    public function profile()
    {
        return view('Dinkes/profile');
    }

    // function view untuk menambah blog
    public function t_blog()
    {
        return view('Dinkes/t_blog');
    }
}
