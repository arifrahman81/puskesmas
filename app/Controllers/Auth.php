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

    // function untuk logout
    public function logout()
    {
        // Hapus data sesi pengguna
        session()->remove('userData');
        // Redirect ke halaman login atau halaman utama
        return redirect()->to('auth/login');
    }
}
