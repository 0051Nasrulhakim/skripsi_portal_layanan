<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        return view('page/dashboard');
    }
    public function testing(){
        return view('page/testing');
    }

    public function login()
    {
        return view('page/login');
    }

    public function pembuatan_ak1()
    {
        $data = [
            'title' => 'Pembuatan Kartu AK-1',
        ];
        return view('page/pembuatan_ak1', $data);
    }

    public function pelayanan_bkk(){
        $data = [
            'title' => 'Penerbitan Tanda Daftar Pendirian BKK',
        ];
        return view('page/pelayanan_bkk', $data);
    }

    public function rekomendasi_pasport(){
        $data = [
            'title' => 'Penerbitan Rekomendasi Paspor CPMI (Calon Pekerja Migran)',
        ];
        return view('page/rekomendasi_pasport', $data);
    }
    public function pengaduan(){
        $data = [
            'title' => 'Layanan Pengaduan',
        ];
        return view('page/pengaduan', $data);
    }

    public function tanda_daftar_lpk(){
        $data = [
            'title' => 'Penerbitan Tanda Daftar Lembaga Pelatihan Kerja',
        ];
        return view('page/tanda_daftar_lpk', $data);
    }

    public function pencatatan_pkwt(){
        $data = [
            'title' => 'Pencatatan Perjanjian Kerja Waktu Tertentu',
        ];
        return view('page/pencatatan_pkwt', $data);
    }

    public function user(){
        $this->pengaduan = new \App\Models\M_pengaduan();
        $data = [
            'title' => 'Profile User',
            'pengaduan' => $this->pengaduan->findAll(),
        ];
        return view('page/user', $data);
    }

}
