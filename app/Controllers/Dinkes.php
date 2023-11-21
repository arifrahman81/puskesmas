<?php

namespace App\Controllers;

use App\Models\UserModels;
use App\Models\LaporanPuskesmas;

class Dinkes extends BaseController
{
    // function view untuk dashboard role Dines kesehatan
    public function dashboard()
    {
        return view('dinkes/dashboard');
    }

    // function view untuk menu melihat data penyakit
    public function data_penyakit()
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $data['data'] = $laporanPuskesmas->findAll();
        return view('dinkes/data_penyakit', $data);
    }

    // function untuk mendownload file pada data penyakit
    public function download_laporan_puskesmas($id)
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $file = $laporanPuskesmas->find($id);

        if ($file) {
            $file_path = WRITEPATH . 'uploads/' . $file['file'];
            return $this->response->download($file_path, null);
        } else {
            return redirect()->to('/file')->with(
                'error',
                'File not found.'
            );
        }
    }

    // function view untuk menu melihat daftar Puskesmas dan Fasilitas Kesehatan yang terdaftar
    public function user()
    {
        $userModel = new UserModels();
        $data['usertable'] = $userModel->getUserByRoles();
        return view('dinkes/user', $data);
    }

    // function untuk menambah data user
    public function t_user()
    {
        $userModel = new UserModels();
        $password = $this->request->getVar('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'password' => $hashedPassword,
            'role' => $this->request->getVar('role'),
        ];
        $userModel->insertUser($data);
        return redirect()->to('dinkes/user')->with('success', 'User Berhasil Ditambahkan.');
    }

    // function menampilkan halaman edit data
    public function edit_data($id)
    {
        $userModel = new UserModels();
        $data['data'] = $userModel->find($id);
        return view('dinkes/edit_data', $data);
    }

    // function untuk mengupdate data
    public function updateData($id)
    {
        $userModel = new UserModels();
        $password = $this->request->getVar('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'password' => $hashedPassword,
            'role' => $this->request->getVar('role')
        ];
        $userModel->update_data($id, $data);
        return redirect()->to('dinkes/user')->with('success', 'Data Berhasil Diubah');
    }

    // function hapus data user
    public function hapusData($id)
    {
        $userModel = new UserModels();
        $userModel->delete($id);
        return redirect()->to('dinkes/user')->with('success', 'Data berhasil dihapus');
    }

    // function hapus data penyakit
    public function hapusDataPenyakit($id)
    {
        $laporanPuskesmas = new LaporanPuskesmas();
        $laporanPuskesmas->delete($id);
        return redirect()->to('dinkes/data_penyakit')->with('success', 'Data berhasil dihapus');
    }

    // function view untuk menu melihat data pengguna yang sedang login
    public function profile()
    {
        return view('dinkes/profile');
    }
}
