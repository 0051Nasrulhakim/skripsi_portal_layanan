<?php

namespace App\Controllers;

use function PHPUnit\Framework\isNull;

class Crud extends BaseController
{
    public function __construct()
    {
        $this->ak = model('App\Models\M_ak');
    }

    public function testing(){
        $file = $this->request->getFileMultiple('file');
        $nama_file = [];
        foreach($file as $f){
            $nama_file[] = $f->getName();
        }
        response()->setJSON($nama_file);
        return response();

        // print_r($nama_file);

    }

    public function pengajuan_pelayanan()
    {
        
        $jenis_pelayanan = $this->request->getVar('jenis_pelayanan');

        if($jenis_pelayanan == 'ak1'){
            $respon = $this->pembuatan_ak1();
            $data = $respon;
            
            $this->ak->insert($data);
            response()->setJSON($data);
            return response();
        }else if($jenis_pelayanan == 'bkk'){
            $respon = $this->pelayanan_bkk();
            $data = $respon;
            
            // $this->bkk->insert($data);
            response()->setJSON($data);
            return response();
        }else if($jenis_pelayanan == 'pkwt'){
            $respon = $this->pelayanan_pkwt();
            $data = $respon;
            
            // $this->pkwt->insert($data);
            response()->setJSON($data);
            return response();
        }else if($jenis_pelayanan == 'cpmi'){
            $respon = $this->rekomendasi_pasport();
            $data = $respon;
            
            // $this->cpmi->insert($data);
            response()->setJSON($data);
            return response();
        }
    }

    public function pembuatan_ak1(){
        $nama_sertifikat_keahlian = [];
        $nik = $this->request->getVar('nik');
        $nama = $this->request->getVar('nama');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $jenis_kelamin = $this->request->getVar('jenis_kelamin');
        $status = $this->request->getVar('status');
        $agama = $this->request->getVar('agama');
        $alamat = $this->request->getVar('alamat');

        $foto_ijazah = $this->request->getFile('foto_ijazah');
        if($foto_ijazah != null || $foto_ijazah != ''){
            $nama_foto_ijazah = $nik . '_ijazah_' .$foto_ijazah->getRandomName();
            $foto_ijazah->move('assets/file/ak1', $nama_foto_ijazah);
        }else{
            $nama_foto_ijazah = '';
        }

        $pass_foto = $this->request->getFile('pass_foto');
        if($pass_foto != null || $pass_foto != ''){
            $nama_pass_foto = $nik . '_pass_' .$pass_foto->getRandomName();
            $pass_foto->move('assets/file/ak1', $nama_pass_foto);
        }else{
            $nama_pass_foto = '';
        }

        $file = $this->request->getFileMultiple('file');
        $nama_file = [];
        foreach($file as $f){
            $nama_file[] = $nik . '_sertifikat_' .$f->getRandomName();
            $f->move('assets/file/ak1', $nama_file[count($nama_file)-1]);
        }
        $tanggal = date('Y-m-d H:i:s');
        
        $data = [
            'nik' => $nik,
            'nama' => $nama,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'status' => $status,
            'agama' => $agama,
            'alamat' => $alamat,
            'foto_ijazah' => $nama_foto_ijazah,
            'pass_foto' => $nama_pass_foto,
            'sertifikat_keahlian' => json_encode($nama_file),
            'tanggal_pengajuan' => $tanggal,
        ];

        // $this->ak->insert($data);
        // response()->setJSON($data);
        return $data;
    }
    public function pelayanan_bkk(){
        $nama_bkk           = $this->request->getVar('nama_bkk');
        $penanggung_jawab   = $this->request->getVar('penanggung_jawab');
        $alamat_bkk         = $this->request->getVar('alamat_bkk');

        $struktur_bkk       = $this->request->getFile('struktur_bkk');
        if($struktur_bkk != null || $struktur_bkk != ''){
            $nama_struktur_bkk = $nama_bkk . '_struktur_' .$struktur_bkk->getRandomName();
            $struktur_bkk->move('assets/file/bkk', $nama_struktur_bkk);
        }else{
            $nama_struktur_bkk = null;
        }

        $akta_pendirian_bkk = $this->request->getFile('akta_pendirian_bkk');
        if($akta_pendirian_bkk != null || $akta_pendirian_bkk != ''){
            $nama_akta_pendirian_bkk = $nama_bkk . '_akta_' .$akta_pendirian_bkk->getRandomName();
            $akta_pendirian_bkk->move('assets/file/bkk', $nama_akta_pendirian_bkk);
        }else{
            $nama_akta_pendirian_bkk = null;
        }

        $rencana_kerja_bkk = $this->request->getFile('rencana_kerja_bkk');
        if($rencana_kerja_bkk != null || $rencana_kerja_bkk != ''){
            $nama_rencana_kerja_bkk = $nama_bkk . '_rencana_' .$rencana_kerja_bkk->getRandomName();
            $rencana_kerja_bkk->move('assets/file/bkk', $nama_rencana_kerja_bkk);
        }else{
            $nama_rencana_kerja_bkk = null;
        }

        $dokumen_pendirian_bkk = $this->request->getFile('dokumen_pendirian_bkk');
        if($dokumen_pendirian_bkk != null || $dokumen_pendirian_bkk != ''  ){
            $nama_dokumen_pendirian_bkk = $nama_bkk . '_dokumen_' .$dokumen_pendirian_bkk->getRandomName();
            $dokumen_pendirian_bkk->move('assets/file/bkk', $nama_dokumen_pendirian_bkk);
        }

        $pass_foto_kepsek = $this->request->getFile('pass_foto_kepsek');
        if($pass_foto_kepsek != null || $pass_foto_kepsek != ''){
            $nama_pass_foto_kepsek = $nama_bkk . '_pass_' .$pass_foto_kepsek->getRandomName();
            $pass_foto_kepsek->move('assets/file/bkk', $nama_pass_foto_kepsek);
        }else{
            $nama_pass_foto_kepsek = null;
        }

        $tanggal = date('Y-m-d H:i:s');

        $data = [
            'nama_bkk' => $nama_bkk,
            'penanggung_jawab' => $penanggung_jawab,
            'alamat_bkk' => $alamat_bkk,
            'struktur_bkk' => $nama_struktur_bkk,
            'akta_pendirian_bkk' => $nama_akta_pendirian_bkk,
            'rencana_kerja_bkk' => $nama_rencana_kerja_bkk,
            'dokumen_pendirian_bkk' => $nama_dokumen_pendirian_bkk,
            'pass_foto_kepsek' => $pass_foto_kepsek,
            'tanggal_pengajuan' => $tanggal,
        ];
        return $data;
    }
    public function pelayanan_pkwt(){
        $nama_perusahaan_pkwt = $this->request->getVar('nama_perusahaan_pkwt');
        $direktur_pkwt = $this->request->getVar('direktur_pkwt');
        $jumlah_pekerja_pkwt = $this->request->getVar('jumlah_pekerja_pkwt');

        $daftar_pekerja_pkwt = $this->request->getFile('daftar_pekerja_pkwt');
        if($daftar_pekerja_pkwt != null || $daftar_pekerja_pkwt != ''){
            $nama_daftar_pekerja_pkwt = $nama_perusahaan_pkwt . '_daftar_' .$daftar_pekerja_pkwt->getRandomName();
            $daftar_pekerja_pkwt->move('assets/file/pkwt', $nama_daftar_pekerja_pkwt);
        }else{
            $nama_daftar_pekerja_pkwt = null;
        }

        $naskah_pkwt = $this->request->getFile('naskah_pkwt');
        if($naskah_pkwt != null || $naskah_pkwt != ''){
            $nama_naskah_pkwt = $nama_perusahaan_pkwt . '_naskah_' .$naskah_pkwt->getRandomName();
            $naskah_pkwt->move('assets/file/pkwt', $nama_naskah_pkwt);
        }else{
            $nama_naskah_pkwt = null;
        }

        $tanggal = date('Y-m-d H:i:s');
        $data = [
            'nama_perusahaan_pkwt' => $nama_perusahaan_pkwt,
            'direktur_pkwt' => $direktur_pkwt,
            'jumlah_pekerja_pkwt' => $jumlah_pekerja_pkwt,
            'daftar_pekerja_pkwt' => $nama_daftar_pekerja_pkwt,
            'naskah_pkwt' => $nama_naskah_pkwt,
            'tanggal_pengajuan' => $tanggal,
        ];
        return $data;
    }

    public function rekomendasi_pasport(){
        $nik = $this->request->getVar('nik');
        $nama = $this->request->getVar('nama');
        $alamat = $this->request->getVar('alamat');
        $nama_perusahaan = $this->request->getVar('nama_perusahaan');
        $jabatan = $this->request->getVar('jabatan');
        $negara_tujuan = $this->request->getVar('negara_tujuan');
        $tanggal_berangkat = $this->request->getVar('tanggal_berangkat');

        $pas_foto = $this->request->getFile('pas_foto');
        if($pas_foto != null || $pas_foto != ''){
            $nama_pas_foto = $nik . '_pas_foto_' .$pas_foto->getRandomName();
            $pas_foto->move('assets/file/pasport', $nama_pas_foto);
        }else{
            $nama_pas_foto = null;
        }

        $foto_ktp = $this->request->getFile('foto_ktp');
        if($foto_ktp != null || $foto_ktp != ''){
            $nama_foto_ktp = $nik . '_foto_ktp_' .$foto_ktp->getRandomName();
            $foto_ktp->move('assets/file/pasport', $nama_foto_ktp);
        }else{
            $nama_foto_ktp = null;
        }

        $foto_kk = $this->request->getFile('foto_kk');
        if($foto_kk != null || $foto_kk != ''){
            $nama_foto_kk = $nik . '_foto_kk_' .$foto_kk->getRandomName();
            $foto_kk->move('assets/file/pasport', $nama_foto_kk);
        }else{
            $nama_foto_kk = null;
        }

        $foto_akta_Kelahiran = $this->request->getFile('foto_akta_Kelahiran');
        if($foto_akta_Kelahiran != null || $foto_akta_Kelahiran != ''){
            $nama_foto_akta_Kelahiran = $nik . '_foto_akta_Kelahiran_' .$foto_akta_Kelahiran->getRandomName();
            $foto_akta_Kelahiran->move('assets/file/pasport', $nama_foto_akta_Kelahiran);
        }else{
            $nama_foto_akta_Kelahiran = null;
        }

        $foto_surat_nikah = $this->request->getFile('foto_surat_nikah');
        if($foto_surat_nikah != null || $foto_surat_nikah != ''){
            $nama_foto_surat_nikah = $nik . '_foto_surat_nikah_' .$foto_surat_nikah->getRandomName();
            $foto_surat_nikah->move('assets/file/pasport', $nama_foto_surat_nikah);
        }else{
            $nama_foto_surat_nikah = null;
        }

        $foto_ijazah_terakhir = $this->request->getFile('foto_ijazah_terakhir');
        if($foto_ijazah_terakhir != null || $foto_ijazah_terakhir != ''){
            $nama_foto_ijazah_terakhir = $nik . '_foto_ijazah_terakhir_' .$foto_ijazah_terakhir->getRandomName();
            $foto_ijazah_terakhir->move('assets/file/pasport', $nama_foto_ijazah_terakhir);
        }else{
            $nama_foto_ijazah_terakhir = null;
        }

        $foto_surat_perjanjian = $this->request->getFile('foto_surat_perjanjian');
        if($foto_surat_perjanjian != null || $foto_surat_perjanjian != ''){
            $nama_foto_surat_perjanjian = $nik . '_foto_surat_perjanjian_' .$foto_surat_perjanjian->getRandomName();
            $foto_surat_perjanjian->move('assets/file/pasport', $nama_foto_surat_perjanjian);
        }else{
            $nama_foto_surat_perjanjian = null;
        }

        $foto_medical_check_up = $this->request->getFile('foto_medical_check_up');
        if($foto_medical_check_up != null || $foto_medical_check_up != ''){
            $nama_foto_medical_check_up = $nik . '_foto_medical_check_up_' .$foto_medical_check_up->getRandomName();
            $foto_medical_check_up->move('assets/file/pasport', $nama_foto_medical_check_up);
        }else{
            $nama_foto_medical_check_up = null;
        }

        $foto_ak1 = $this->request->getFile('foto_ak1');
        if($foto_ak1 != null || $foto_ak1 != ''){
            $nama_foto_ak1 = $nik . '_foto_ak1_' .$foto_ak1->getRandomName();
            $foto_ak1->move('assets/file/pasport', $nama_foto_ak1);
        }else{
            $nama_foto_ak1 = null;
        }

        $tanggal = date('Y-m-d H:i:s');

        $data =[
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'negara_tujuan' => $negara_tujuan,
            'tanggal_berangkat' => $tanggal_berangkat,
            'pas_foto' => $nama_pas_foto,
            'foto_ktp' => $nama_foto_ktp,
            'foto_kk' => $nama_foto_kk,
            'foto_akta_Kelahiran' => $nama_foto_akta_Kelahiran,
            'foto_surat_nikah' => $nama_foto_surat_nikah,
            'foto_ijazah_terakhir' => $nama_foto_ijazah_terakhir,
            'foto_surat_perjanjian' => $nama_foto_surat_perjanjian,
            'foto_medical_check_up' => $nama_foto_medical_check_up,
            'foto_ak1' => $nama_foto_ak1,
            'tanggal_pengajuan' => $tanggal,
        ];
        
        return $data;
    }
}