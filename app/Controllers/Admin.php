<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // public function __construct(){

    // }
    public function index()
    {
        return view('admin/page/dashboard');
    }

    public function ak1()
    {
        $this->ak1 = new \App\Models\M_ak();
        $data = [
            'title'=> 'Pengajuan AK1',
            'data' => $this->ak1->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
        ];
        return view('admin/page/ak1', $data);
    }

    public function pengaduan(){
        $this->pengaduan = new \App\Models\M_pengaduan();
        $data = [
            'title'=> 'Daftar Pengaduan',
            'data' => $this->pengaduan->select("*, DATE_FORMAT(tanggal_pengaduan, '%d-%m-%Y %H:%i:%s') as tanggal_pengaduan")->findAll()
        ];
        return view('admin/page/pengaduan', $data);
    }

    public function bkk()
    {
        $this->bkk = new \App\Models\M_bkk();
        $data = [
            'title'=> 'Pengajuan BKK',
            // tanggal indonesia
            'data' => $this->bkk->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
        ];
        return view('admin/page/bkk', $data);
    }
    
    public function cpmi(){
        $this->cpmi = new \App\Models\M_cpmi();
        $data = [
            'title'=> 'Pengajuan CPMI',
            // tanggal indonesia
            'data' => $this->cpmi->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
        ];
        return view('admin/page/cpmi', $data);
    }
    public function lpk(){
        $this->lpk = new \App\Models\M_lpk();
        $data = [
            'title'=> 'Pengajuan LPK',
            // tanggal indonesia
            'data' => $this->lpk->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
        ];
        return view('admin/page/lpk', $data);
    }
    public function pkwt(){
        $this->pkwt = new \App\Models\M_pkwt();
        $data = [
            'title'=> 'Pengajuan PKWT',
            // tanggal indonesia
            'data' => $this->pkwt->select("*, DATE_FORMAT(tanggal_pengajuan, '%d-%m-%Y %H:%i:%s') as tanggal_pengajuan")->findAll()
        ];
        return view('admin/page/pkwt', $data);
    }
    public function lihat_ak1($id){
        $this->ak1 = new \App\Models\M_ak();
        $data = [
            'title'=> 'Pengajuan AK1',
            'data' => $this->ak1->where('id', $id)->first()
        ];
        // dd($data); 
        return view('admin/preview/lihat_ak1', $data);
    }
    public function lihat_cpmi($id){
        $this->cpmi = new \App\Models\M_cpmi();
        $data = [
            'title'=> 'Pengajuan CPMI',
            'data' => $this->cpmi->where('id', $id)->first()
        ];
        return view('admin/preview/lihat_cpmi', $data);
    }
    public function lihat_bkk($id){
        $this->bkk = new \App\Models\M_bkk();
        $data = [
            'title'=> 'Pengajuan BKK',
            'data' => $this->bkk->where('id', $id)->first()
        ];
        return view('admin/preview/lihat_bkk', $data);
    }
    public function lihat_lpk($id){
        $this->lpk = new \App\Models\M_lpk();
        $data = [
            'title'=> 'Pengajuan LPK',
            'data' => $this->lpk->where('id', $id)->first()
        ];
        return view('admin/preview/lihat_lpk', $data);
    }
    public function lihat_pkwt($id){
        $this->pkwt = new \App\Models\M_pkwt();
        $data = [
            'title'=> 'Pengajuan PKWT',
            'data' => $this->pkwt->where('id', $id)->first()
        ];
        return view('admin/preview/lihat_pkwt', $data);
    }
}

