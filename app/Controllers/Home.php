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
            'title' => 'Pelayanan BKK',
        ];
        return view('page/pelayanan_bkk', $data);
    }

    public function rekomendasi_pasport(){
        $data = [
            'title' => 'Penerbitan Rekomendasi Paspor',
        ];
        return view('page/rekomendasi_pasport', $data);
    }

    public function tanda_daftar_lpk(){
        $data = [
            'title' => 'Tanda Daftar LPK',
        ];
        return view('page/tanda_daftar_lpk', $data);
    }

    public function pencatatan_sarana_hub_industrial(){
        $data = [
            'title' => 'Pencatatan Sarana Hubungan Industrial',
        ];
        return view('page/pencatatan_sarana_hub_industrial', $data);
    }

}
