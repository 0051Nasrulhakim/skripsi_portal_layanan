<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->user = new \App\Models\M_user();
    }
    
    public function index()
    {
        return view('admin/page/dashboard');
    }

    public function login(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $cek = $this->user->where('username', $username)->first();
        if($cek){
            if(password_verify($password, $cek['password'])){
                $data = [
                    'id_user' => $cek['id_user'],
                    'nama_lengkap' => $cek['nama_lengkap'],
                    'email' => $cek['email'],
                    // 'alamat' => $cek['alamat'],
                    // 'jenis_kelamin' => $cek['jenis_kelamin'],
                    // 'tanggal_lahir' => $cek['tanggal_lahir'],
                    'username' => $cek['username'],
                    'password' => $cek['password'],
                    'logged_in' => TRUE
                ];
                $this->session->set($data);
                $res = [
                    'status' => 'success',
                    'message' => 'Login Berhasil',
                    'data' => $data
                ];
                response()->setJSON($res);
                return response();
            }else{
                $res = [
                    'status' => 'error',
                    'password' => 'Password Salah'
                ];
                response()->setJSON($res);
                return response();
            }
        }else{
            $res = [
                'status' => 'error',
                'username' => 'Username Tidak Ditemukan'
            ];
            response()->setJSON($res);
            return response();
        }
    }

    public function register(){
        $nama = $this->request->getPost('nama_register');
        $email = $this->request->getPost('email_register');
        $username = $this->request->getPost('username_register');
        $password = $this->request->getPost('password_register');

        $data = [
            'nama_lengkap' => $nama,
            'email' => $email,
            'username' => $username,
            'password' => $password,
        ];

        $this->validation->run($data, 'register');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'message' => 'Registrasi Berhasil Silahkan Login',
                'data' => $data
            ];
            $data = [
                'nama_lengkap' => $nama,
                'email' => $email,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];
            $this->user->insert($data); 
        }

        
        response()->setJSON($res);
        return response();
    }
    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url('home'));
    }
}

