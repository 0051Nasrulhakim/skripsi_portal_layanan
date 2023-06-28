<?php

namespace App\Controllers;

use function PHPUnit\Framework\isNull;

class Cetak extends BaseController
{
    public function __construct()
    {
        // ....
    }

    public function cetak_ak1($id){
        $this->ak1 = new \App\Models\M_ak();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->ak1->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/ak1/'.$db['pass_foto']));
        // dd($foto);
        
        $no_penduduk = str_split($db['nik']);

        $kode_daerah = substr($db['nomor_kartu'], 0, 4);
        
        $kode_daerah = str_split($kode_daerah);
        $nomor_kartu_kolom_2 = substr($db['nomor_kartu'], 4, 6);
        $nomor_kartu_kolom_2 = str_split($nomor_kartu_kolom_2);
        $nomor_kartu_kolom_3 = substr($db['nomor_kartu'], 10, 6);
        $nomor_kartu_kolom_3 = str_split($nomor_kartu_kolom_3);
        
        $data = [
            'foto' => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'kode_daerah' => $kode_daerah,
            'no_penduduk'   => $no_penduduk,
            'nomor_kartu_kolom_2' => $nomor_kartu_kolom_2,
            'nomor_kartu_kolom_3' => $nomor_kartu_kolom_3,
            'title' => 'Cetak Kartu AK-1',
        ];
        // dd($data);
        return view('output/ak1', $data);
    }
    public function cetak_bkk($id){
        $this->bkk = new \App\Models\M_bkk();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->bkk->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/bkk/'.$db['pass_foto_kepsek']));
        // dd($foto);
        
        $data = [
            'foto' => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'title' => 'Cetak Kartu BKK',
        ];
        // dd($data);
        return view('output/bkk', $data);
    }
}