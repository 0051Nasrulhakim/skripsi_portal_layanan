<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct(){
        date_default_timezone_set("Asia/Jakarta");
        $this->admin = new \App\Models\M_admin();
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->ak1 = new \App\Models\M_ak();
            $this->pengaduan = new \App\Models\M_pengaduan();
            $this->bkk = new \App\Models\M_bkk();
            $this->cpmi = new \App\Models\M_cpmi();
            $this->lpk = new \App\Models\M_lpk();
            $this->pkwt = new \App\Models\M_pkwt();

            // hitung yang status_pengajuan acc dan menunggu dan bulan sekarang
            $bulan = $this->request->getPost('bulan') ? $this->request->getPost('bulan') : date('m');
            $data = [
                'title'=> 'Dashboard',
                'ak1_acc' => $this->ak1->where('status_pengajuan', 'acc')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'ak1_menunggu' => $this->ak1->where('status_pengajuan', 'menunggu')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'ak1_tolak' => $this->ak1->where('status_pengajuan', 'tolak')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),


                'bulan' => $bulan,

                'bkk_acc' => $this->bkk->where('status_pengajuan', 'acc')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'bkk_menunggu' => $this->bkk->where('status_pengajuan', 'menunggu')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'bkk_tolak' => $this->bkk->where('status_pengajuan', 'tolak')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),

                'cpmi_acc' => $this->cpmi->where('status_pengajuan', 'acc')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'cpmi_menunggu' => $this->cpmi->where('status_pengajuan', 'menunggu')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'cpmi_tolak' => $this->cpmi->where('status_pengajuan', 'tolak')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),

                'lpk_acc' => $this->lpk->where('status_pengajuan', 'acc')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'lpk_menunggu' => $this->lpk->where('status_pengajuan', 'menunggu')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'lpk_tolak' => $this->lpk->where('status_pengajuan', 'tolak')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),

                'pkwt_acc' => $this->pkwt->where('status_pengajuan', 'acc')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'pkwt_menunggu' => $this->pkwt->where('status_pengajuan', 'menunggu')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
                'pkwt_tolak' => $this->pkwt->where('status_pengajuan', 'tolak')->where('MONTH(tanggal_pengajuan)', $bulan)->countAllResults(),
            ];
            

            // dd($data);
            return view('admin/page/dashboard', $data);
        }
    }

    public function login_page(){
        return view('admin/page/login');
    }

    public function login(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $cek = $this->admin->where('username', $username)->first();
        
        if($cek){
            if(password_verify($password, $cek['password'])){
                $data = [
                    'id_user' => $cek['id_admin'],
                    'nama_lengkap' => $cek['nama_lengkap'],
                    'email' => $cek['email'],
                    'jenis_kelamin' => $cek['jenis_kelamin'],
                    'username' => $cek['username'],
                    'password' => $cek['password'],
                    'logged_in' => TRUE,
                    'role'      => 'admin'
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

        $this->validation->run($data, 'register_admin');
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
            $this->admin->insert($data); 
        }

        
        response()->setJSON($res);
        return response();
    }

    public function ak1()
    {
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->ak1 = new \App\Models\M_ak();
            $data = [
                'title'=> 'Pengajuan AK1',
                'data' => $this->ak1->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
            ];
            return view('admin/page/ak1', $data);
        }
    }

    public function pengaduan(){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->pengaduan = new \App\Models\M_pengaduan();
            $bulan = $this->request->getPost('bulan') ? $this->request->getPost('bulan') : date('m');
            $data = [
                'title'=> 'Daftar Pengaduan',
                'data' => $this->pengaduan->select("*, DATE_FORMAT(tanggal_pengaduan, '%d-%m-%Y %H:%i:%s') as tanggal_pengaduan")->where('MONTH(tanggal_pengaduan)', $bulan)->findAll(),
                'bulan' => $bulan
            ];
            return view('admin/page/pengaduan', $data);
        }
    }

    public function bkk()
    {
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->bkk = new \App\Models\M_bkk();
            $data = [
                'title'=> 'Pengajuan BKK',
                // tanggal indonesia
                'data' => $this->bkk->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
            ];
            return view('admin/page/bkk', $data);
        }
    }
    
    public function cpmi(){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{

            $this->cpmi = new \App\Models\M_cpmi();
            $data = [
                'title'=> 'Pengajuan CPMI',
                // tanggal indonesia
                'data' => $this->cpmi->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
            ];
            return view('admin/page/cpmi', $data);
        }
    }
    public function lpk(){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->lpk = new \App\Models\M_lpk();
            $data = [
                'title'=> 'Pengajuan LPK',
                // tanggal indonesia
                'data' => $this->lpk->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
            ];
            return view('admin/page/lpk', $data);
        }
    }
    public function pkwt(){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->pkwt = new \App\Models\M_pkwt();
            $data = [
                'title'=> 'Pengajuan PKWT',
                // tanggal indonesia
                'data' => $this->pkwt->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
            ];
            return view('admin/page/pkwt', $data);
        }
    }
    public function lihat_ak1($id){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->ak1 = new \App\Models\M_ak();
            $data = [
                'title'=> 'Pengajuan AK1',
                'data' => $this->ak1->where('id', $id)->first()
            ];
            // dd($data); 
            return view('admin/preview/lihat_ak1', $data);
        }
    }
    public function lihat_cpmi($id){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->cpmi = new \App\Models\M_cpmi();
            $data = [
                'title'=> 'Pengajuan CPMI',
                'data' => $this->cpmi->where('id', $id)->first()
            ];
            return view('admin/preview/lihat_cpmi', $data);
        }
    }
    public function lihat_bkk($id){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->bkk = new \App\Models\M_bkk();
            $data = [
                'title'=> 'Pengajuan BKK',
                'data' => $this->bkk->where('id', $id)->first()
            ];
            return view('admin/preview/lihat_bkk', $data);
        }
    }
    public function lihat_lpk($id){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->lpk = new \App\Models\M_lpk();
            $data = [
                'title'=> 'Pengajuan LPK',
                'data' => $this->lpk->where('id', $id)->first()
            ];
            return view('admin/preview/lihat_lpk', $data);
        }
    }
    public function lihat_pkwt($id){
        if(session()->get('role') != 'admin'){
            return redirect()->to(base_url('admin/login_page'));
        }else{
            $this->pkwt = new \App\Models\M_pkwt();
            $data = [
                'title'=> 'Pengajuan PKWT',
                'data' => $this->pkwt->where('id', $id)->first()
            ];
            return view('admin/preview/lihat_pkwt', $data);
        }
    }
}

