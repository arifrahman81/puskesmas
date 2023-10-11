<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModels;

class Auth extends Controller
{

    // function view Login
    public function login()
    {
        return view('auth/login');
    }

    // function proses untuk login
    public function process_login()
    {
        $request = \Config\Services::request();
        // mengambil inputan dari user
        $username = $request->getPost('username');
        $password = $request->getPost('password');

        // objek dari class Usermodel
        $userModel = new UserModels();

        // memanggil fungsi untuk mengecek username reques dari user
        $user = $userModel->getUserByCredentials($username);

        // array untuk menampung routes berdasarkan role dari user
        $rolesToDashboard = [
            'dinkes' => 'dinkes/dashboard',
            'puskes' => 'puskesmas/dashboard',
            'faskes' => 'faskes/dashboard'
        ];

        // menentukan role user
        if ($user && isset($rolesToDashboard[$user['role']]) && password_verify($password, $user['password'])) {
            $userData = [
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role']
            ];
            // menyimpan  session user yang login
            session()->set('userData', $userData);

            return redirect()->to($rolesToDashboard[$user['role']]);
        } else {
            return redirect()->back()->with('error', 'Login gagal. Username atau Password Salah.');
        }
    }


    public function process_register()
    {
        $request = \Config\Services::request();
        // Ambil data dari form pendaftaran
        $name = $request->getPost('name');
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        $role = $request->getPost('role');

        // Enkripsi kata sandi
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data pengguna ke database
        $data = [
            'name' => $name,
            'username' => $username,
            'password' => $hashedPassword,
            'role' => $role // Atur role sesuai kebutuhan
        ];

        $userModel = new UserModels();
        $userModel->insertUser($data);

        // Redirect ke halaman login setelah pendaftaran
        return redirect()->to('auth/login')->with('success', 'Registration successful. Please login.');
    }

    public function registrasi()
    {
        return view('auth/regis');
    }



    public function logout()
    {
        // Hapus data sesi pengguna
        session()->remove('userData');

        // Redirect ke halaman login atau halaman utama
        return redirect()->to('auth/login');  // Ganti dengan URL halaman login atau halaman utama
    }
}
