<?php

namespace App\Controllers;

use function PHPUnit\Framework\isNull;

class Crud extends BaseController
{
    public function __construct()
    {
        $this->ak = model('App\Models\M_ak');
        
    
        $this->validation = \Config\Services::validation();
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
            $res = $this->pembuatan_ak1();
            if($res['status'] == 'success'){
                $data = $res['data'];
                $this->ak->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == 'bkk'){
            $this->M_bkk = new \App\Models\M_bkk();
            $res = $this->pelayanan_bkk();
            $data = $res['data'];
            if($res['status'] == 'success'){
                $this->M_bkk->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == 'pkwt'){
            $this->pkwt = new \App\Models\M_pkwt();
            $res = $this->pelayanan_pkwt();
            $data = $res['data'];
            if($res['status'] == 'success'){
                $this->pkwt->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == 'cpmi'){
            $this->cpmi = new \App\Models\M_cpmi();
            $res = $this->rekomendasi_pasport();
            $data = $res['data'];
            if($res['status'] == 'success'){
                $this->cpmi->insert($data);
            }
            
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == "pengaduan"){
            $this->pengaduan = new \App\Models\M_pengaduan();
            $res = $this->pengaduan();
            $data = $res['data'];
            if($res['status'] == 'success'){
                $this->pengaduan->insert($data);
            }
            response()->setJSON($data);
            return response();
        }else if($jenis_pelayanan == "lpk"){
            $this->lpk = new \App\Models\M_lpk();
            $res = $this->tanda_daftar_lpk();
            $data = $res['data'];
            if($res['status'] == 'success'){
                $this->lpk->insert($data);
            }
            response()->setJSON($res);
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
            if($f->getSize() === 0){
                $nama_file[] = '';
            }else{
                $nama_file[] = $nik . '_sertifikat_' .$f->getRandomName();
                $f->move('assets/file/ak1', $nama_file[count($nama_file)-1]);
            }
        }
        $tanggal = date('Y-m-d H:i:s');
        
        $data = [
            'id_user' => '',
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


        // validation run
        $this->validation->run($data, 'ak1');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }

        return $res;

    }
    
    public function pelayanan_bkk(){
        $nama_bkk           = $this->request->getVar('nama_bkk');
        $penanggung_jawab   = $this->request->getVar('penanggung_jawab');
        $alamat_bkk         = $this->request->getVar('alamat_bkk');
        $id_user            = $this->request->getVar('id_user');

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
            'pass_foto_kepsek' => $nama_pass_foto_kepsek,
            'tanggal_pengajuan' => $tanggal,
            'id_user' => $id_user
        ];

        $this->validation->run($data, 'bkk');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }

        return $res;
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
            'id_user'               => '',
            'nama_perusahaan_pkwt' => $nama_perusahaan_pkwt,
            'direktur_pkwt' => $direktur_pkwt,
            'jumlah_pekerja_pkwt' => $jumlah_pekerja_pkwt,
            'daftar_pekerja_pkwt' => $nama_daftar_pekerja_pkwt,
            'naskah_pkwt' => $nama_naskah_pkwt,
            'tanggal_pengajuan' => $tanggal,
        ];

        $this->validation->run($data, 'pkwt');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }
        return $res;
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
            'id_user'   => '',
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

        $this->validation->run($data, 'cpmi');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }
        return $res;
    }
    public function pengaduan(){
        $nama_legkap = $this->request->getPost('nama_lengkap');
        $isi_pengaduan = $this->request->getPost('isi_pengaduan');
        $email = $this->request->getPost('email');
        $id_user = $this->request->getPost('id_user');

        $data = [
            'nama_lengkap' => $nama_legkap,
            'isi_pengaduan' => $isi_pengaduan,
            'email'     => $email,
            'tanggal_pengaduan' => date('Y-m-d H:i:s'),
            'id_user' => '',
        ];

        $this->validation->run($data, 'pengaduan');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }
        return $res;
    }
    public function tanda_daftar_lpk(){
        $nama_lembaga = $this->request->getPost('nama_lembaga');
        $alamat_lembaga = $this->request->getPost('alamat_lembaga');
        $penanggung_jawab = $this->request->getPost('penanggung_jawab');
        $nomor_telfon = $this->request->getPost('nomor_telfon');
        $npwp_perusahaan = $this->request->getPost('npwp_perusahaan');
        $bidang_pelatihan = $this->request->getPost('bidang_pelatihan');

        $foto_keputusan = $this->request->getFile('foto_keputusan');
        if($foto_keputusan != null || $foto_keputusan != ''){
            $nama_foto_keputusan = $nama_lembaga . '_foto_keputusan_' .$foto_keputusan->getRandomName();
            $foto_keputusan->move('assets/file/tanda_daftar_lpk', $nama_foto_keputusan);
        }else{
            $nama_foto_keputusan = null;
        }

        $foto_npwp_perusahaan = $this->request->getFile('foto_npwp_perusahaan');
        if($foto_npwp_perusahaan != null || $foto_npwp_perusahaan != ''){
            $nama_foto_npwp_perusahaan = $nama_lembaga . '_foto_npwp_perusahaan_' .$foto_npwp_perusahaan->getRandomName();
            $foto_npwp_perusahaan->move('assets/file/tanda_daftar_lpk', $nama_foto_npwp_perusahaan);
        }else{
            $nama_foto_npwp_perusahaan = null;
        }

        $identitas_kepala_lpk = $this->request->getFile('identitas_kepala_lpk');
        if($identitas_kepala_lpk != null || $identitas_kepala_lpk != ''){
            $nama_identitas_kepala_lpk = $nama_lembaga . '_identitas_kepala_lpk_' .$identitas_kepala_lpk->getRandomName();
            $identitas_kepala_lpk->move('assets/file/tanda_daftar_lpk', $nama_identitas_kepala_lpk);
        }else{
            $nama_identitas_kepala_lpk = null;
        }

        $profile_lpk = $this->request->getFile('profile_lpk');
        if($profile_lpk != null || $profile_lpk != ''){
            $nama_profile_lpk = $nama_lembaga . '_profile_lpk_' .$profile_lpk->getRandomName();
            $profile_lpk->move('assets/file/tanda_daftar_lpk', $nama_profile_lpk);
        }else{
            $nama_profile_lpk = null;
        }

        $foto_keterangan_domisili = $this->request->getFile('foto_keterangan_domisili');
        if($foto_keterangan_domisili != null || $foto_keterangan_domisili != ''){
            $nama_foto_keterangan_domisili = $nama_lembaga . '_foto_keterangan_domisili_' .$foto_keterangan_domisili->getRandomName();
            $foto_keterangan_domisili->move('assets/file/tanda_daftar_lpk', $nama_foto_keterangan_domisili);
        }else{
            $nama_foto_keterangan_domisili = null;
        }

        $foto_bukti_kepemilikan = $this->request->getFile('foto_bukti_kepemilikan');
        if($foto_bukti_kepemilikan != null || $foto_bukti_kepemilikan != ''){
            $nama_foto_bukti_kepemilikan = $nama_lembaga . '_foto_bukti_kepemilikan_' .$foto_bukti_kepemilikan->getRandomName();
            $foto_bukti_kepemilikan->move('assets/file/tanda_daftar_lpk', $nama_foto_bukti_kepemilikan);
        }else{
            $nama_foto_bukti_kepemilikan = null;
        }

        $data = [
            'nama_lembaga' => $nama_lembaga,
            'alamat_lembaga' => $alamat_lembaga,
            'penanggung_jawab' => $penanggung_jawab,
            'nomor_telfon' => $nomor_telfon,
            'npwp_perusahaan' => $npwp_perusahaan,
            'bidang_pelatihan' => $bidang_pelatihan,
            'foto_keputusan' => $nama_foto_keputusan,
            'foto_npwp_perusahaan' => $nama_foto_npwp_perusahaan,
            'identitas_kepala_lpk' => $nama_identitas_kepala_lpk,
            'profile_lpk' => $nama_profile_lpk,
            'foto_keterangan_domisili' => $nama_foto_keterangan_domisili,
            'foto_bukti_kepemilikan' => $nama_foto_bukti_kepemilikan,
            'tanggal_pengajuan' => date('Y-m-d H:i:s'),
            'id_user'
        ];
        
        $this->validation->run($data, 'lpk');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }
        return $res;
    }
}