<?php

namespace App\Controllers;

use function PHPUnit\Framework\isNull;

class Crud extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->validation = \Config\Services::validation();
        $this->ak = model('App\Models\M_ak');
        
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
            if($res['status'] == 'success'){
                $data = $res['data'];
                $this->M_bkk->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == 'pkwt'){
            $this->pkwt = new \App\Models\M_pkwt();
            $res = $this->pelayanan_pkwt();
            if($res['status'] == 'success'){
                $data = $res['data'];
                $this->pkwt->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == "cpmi"){
            $this->cpmi = new \App\Models\M_cpmi();
            $res = $this->rekomendasi_pasport();
            if($res['status'] == 'success'){
                $data = $res['data'];
                $this->cpmi->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == "pengaduan"){
            $this->pengaduan = new \App\Models\M_pengaduan();
            $res = $this->pengaduan();
            if($res['status'] == 'success'){
                $data = $res['data'];
                $this->pengaduan->insert($data);
            }
            response()->setJSON($res);
            return response();
        }else if($jenis_pelayanan == "lpk"){
            $this->lpk = new \App\Models\M_lpk();
            $res = $this->tanda_daftar_lpk();
            if($res['status'] == 'success'){
                $data = $res['data'];
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
        $cek_foto_ijazah = $foto_ijazah->getSize();
        if($cek_foto_ijazah != 0){
            $nama_foto_ijazah = $nik . '_ijazah_' .$foto_ijazah->getRandomName();
            
        }else{
            $nama_foto_ijazah = '';
        }

        $pass_foto = $this->request->getFile('pass_foto');
        $cek_pass_foto = $pass_foto->getSize();
        if($cek_pass_foto != 0){
            $nama_pass_foto = $nik . '_pass_' .$pass_foto->getRandomName();
            
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
            'id_user' => session()->get('id_user'),
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
            $foto_ijazah->move('assets/file/ak1', $nama_foto_ijazah);
            $pass_foto->move('assets/file/ak1', $nama_pass_foto);

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
        $cek_struktur_bkk   = $struktur_bkk->getSize();
        if($cek_struktur_bkk != 0){
            $nama_struktur_bkk = $nama_bkk . '_struktur_' .$struktur_bkk->getRandomName();
        }else{
            $nama_struktur_bkk = '';
        }

        $akta_pendirian_bkk = $this->request->getFile('akta_pendirian_bkk');
        $cek_akta_pendirian_bkk = $akta_pendirian_bkk->getSize();
        if($cek_akta_pendirian_bkk != 0){
            $nama_akta_pendirian_bkk = $nama_bkk . '_akta_' .$akta_pendirian_bkk->getRandomName();
        }else{
            $nama_akta_pendirian_bkk = '';
        }

        $rencana_kerja_bkk = $this->request->getFile('rencana_kerja_bkk');
        $cek_rencana_kerja_bkk = $rencana_kerja_bkk->getSize();
        if($cek_rencana_kerja_bkk != 0){
            $nama_rencana_kerja_bkk = $nama_bkk . '_rencana_' .$rencana_kerja_bkk->getRandomName();
        }else{
            $nama_rencana_kerja_bkk = '';
        }

        $dokumen_pendirian_bkk = $this->request->getFile('dokumen_pendirian_bkk');
        $cek_dokumen_pendirian_bkk = $dokumen_pendirian_bkk->getSize();
        if($cek_dokumen_pendirian_bkk != 0){
            $nama_dokumen_pendirian_bkk = $nama_bkk . '_dokumen_' .$dokumen_pendirian_bkk->getRandomName();
        }else{
            $nama_dokumen_pendirian_bkk = '';
        }

        $pass_foto_kepsek = $this->request->getFile('pass_foto_kepsek');
        $cek_pas_foto_kepsek = $pass_foto_kepsek->getSize();
        if($cek_pas_foto_kepsek != 0){
            $nama_pass_foto_kepsek = $nama_bkk . '_pass_' .$pass_foto_kepsek->getRandomName();
        }else{
            $nama_pass_foto_kepsek = '';
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
            'id_user' => session()->get('id_user')
        ];

        $this->validation->run($data, 'bkk');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            $struktur_bkk->move('assets/file/bkk', $nama_struktur_bkk);
            $akta_pendirian_bkk->move('assets/file/bkk', $nama_akta_pendirian_bkk);
            $rencana_kerja_bkk->move('assets/file/bkk', $nama_rencana_kerja_bkk);
            $dokumen_pendirian_bkk->move('assets/file/bkk', $nama_dokumen_pendirian_bkk);
            $pass_foto_kepsek->move('assets/file/bkk', $nama_pass_foto_kepsek);
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
        $cek_daftar_pekerja_pkwt = $daftar_pekerja_pkwt->getSize();
        if($cek_daftar_pekerja_pkwt != 0){
            $nama_daftar_pekerja_pkwt = $nama_perusahaan_pkwt . '_daftar_' .$daftar_pekerja_pkwt->getRandomName();
        }else{
            $nama_daftar_pekerja_pkwt = '';
        }

        $naskah_pkwt = $this->request->getFile('naskah_pkwt');
        $cek_naskah_pkwt = $naskah_pkwt->getSize();
        if($cek_naskah_pkwt != 0){
            $nama_naskah_pkwt = $nama_perusahaan_pkwt . '_naskah_' .$naskah_pkwt->getRandomName();
        }else{
            $nama_naskah_pkwt = '';
        }

        $tanggal = date('Y-m-d H:i:s');
        $pkwt = [
            'id_user'               => session()->get('id_user'),
            'nama_perusahaan_pkwt'      => $nama_perusahaan_pkwt,
            'direktur_pkwt'             => $direktur_pkwt,
            'jumlah_pekerja_pkwt' => $jumlah_pekerja_pkwt,
            'daftar_pekerja_pkwt' => $nama_daftar_pekerja_pkwt,
            'naskah_pkwt' => $nama_naskah_pkwt,
            'tanggal_pengajuan' => $tanggal,
        ];

        if($this->validation->run($pkwt, 'pkwt') == FALSE){
            $res = [
                'status' => 'error',
                'errors' => $this->validation->getErrors()
            ];
        }else{
            $res = [
                'status' => 'success',
                'data' => $pkwt
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
        $data = [
            'id_user'   => session()->get('id_user'),
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'negara_tujuan' => $negara_tujuan,
            'tanggal_berangkat' => $tanggal_berangkat,
            'tanggal_pengajuan' => date('Y-m-d H:i:s'),
        ];
        
        // get file
        $pas_foto = $this->request->getFile('pas_foto');
        $cek_pas_foto = $pas_foto->getSize();
        if($cek_pas_foto != 0){
            $nama_pas_foto = $nik . '_pas_foto_' .$pas_foto->getRandomName();
            // pindah
            
        }else{
            $nama_pas_foto = '';
        }

        $foto_ktp = $this->request->getFile('foto_ktp');
        $cek_ktp = $foto_ktp->getSize();
        if($cek_ktp != 0){
            $nama_foto_ktp = $nik . '_foto_ktp_' .$foto_ktp->getRandomName();
        }else{
            $nama_foto_ktp = '';
        }

        $foto_kk = $this->request->getFile('foto_kk');
        $cek_kk = $foto_kk->getSize();
        if($cek_kk != 0){
            $nama_foto_kk = $nik . '_foto_kk_' .$foto_kk->getRandomName();
        }else{
            $nama_foto_kk = '';
        }

        $foto_akta_Kelahiran = $this->request->getFile('foto_akta_Kelahiran');
        $cek_akta_Kelahiran = $foto_akta_Kelahiran->getSize();
        if($cek_akta_Kelahiran != 0){
            $nama_foto_akta_Kelahiran = $nik . '_foto_akta_Kelahiran_' .$foto_akta_Kelahiran->getRandomName();
        }else{
            $nama_foto_akta_Kelahiran = '';
        }

        $foto_surat_nikah = $this->request->getFileMultiple('foto_surat_nikah');
        $nama_foto_surat_nikah = [];
        foreach($foto_surat_nikah as $f){
            if($f->getSize() === 0){
                $nama_foto_surat_nikah[] = '';
            }else{
                $nama_foto_surat_nikah[] = $nik . 'surat_nikah' .$f->getRandomName();
                $f->move('assets/file/pasport', $nama_foto_surat_nikah[count($nama_foto_surat_nikah)-1]);
            }
        }

        $foto_ijazah_terakhir = $this->request->getFile('foto_ijazah_terakhir');
        $cek_ijazah_terakhir = $foto_ijazah_terakhir->getSize();
        if($cek_ijazah_terakhir != 0){
            $nama_foto_ijazah_terakhir = $nik . '_foto_ijazah_terakhir_' .$foto_ijazah_terakhir->getRandomName();
        }else{
            $nama_foto_ijazah_terakhir = '';
        }

        $foto_surat_perjanjian = $this->request->getFile('foto_surat_perjanjian');
        $cek_foto_surat_perjanjian = $foto_surat_perjanjian->getSize();
        if($cek_foto_surat_perjanjian != 0){
            $nama_foto_surat_perjanjian = $nik . '_foto_surat_perjanjian_' .$foto_surat_perjanjian->getRandomName();
        }else{
            $nama_foto_surat_perjanjian = '';
        }

        $foto_medical_check_up = $this->request->getFile('foto_medical_check_up');
        $cek_foto_medical_check_up = $foto_medical_check_up->getSize();
        if($cek_foto_medical_check_up != 0){
            $nama_foto_medical_check_up = $nik . '_foto_medical_check_up_' .$foto_medical_check_up->getRandomName();
        }else{
            $nama_foto_medical_check_up = '';
        }


        $foto_ak1 = $this->request->getFile('foto_ak1');
        $cek_foto_ak1 = $foto_ak1->getSize();
        if($cek_foto_ak1 != 0){
            $nama_foto_ak1 = $nik . '_foto_ak1_' .$foto_ak1->getRandomName();
        }else{
            $nama_foto_ak1 = '';
        }

        $tanggal = date('Y-m-d H:i:s');

        $data =[
            'id_user'   => session()->get('id_user'),
            'nik' => $nik,
            'nama' => $nama,
            'alamat' => $alamat,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'negara_tujuan' => $negara_tujuan,
            'tanggal_berangkat' => $tanggal_berangkat,
            'nomor_kartu' => '',

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


        if($this->validation->run($data, 'cpmi') == FALSE){
            $errors = $this->validation->getErrors();
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];

        }else{

            $pas_foto->move('assets/file/pasport', $nama_pas_foto);
            $foto_ktp->move('assets/file/pasport', $nama_foto_ktp);
            $foto_kk->move('assets/file/pasport', $nama_foto_kk);
            $foto_akta_Kelahiran->move('assets/file/pasport', $nama_foto_akta_Kelahiran);
            $foto_ijazah_terakhir->move('assets/file/pasport', $nama_foto_ijazah_terakhir);
            $foto_surat_perjanjian->move('assets/file/pasport', $nama_foto_surat_perjanjian);
            $foto_medical_check_up->move('assets/file/pasport', $nama_foto_medical_check_up);
            $foto_ak1->move('assets/file/pasport', $nama_foto_ak1);
            $res = [
                'status' => 'success',
                'data' => $data,
                'message' => 'Data berhasil ditambahkan'
            ];
        }        

        return $res;
    }

    public function pengaduan(){
        $nama_legkap = $this->request->getPost('nama_lengkap');
        $isi_pengaduan = $this->request->getPost('isi_pengaduan');
        $email = $this->request->getPost('email');
        $id_user = $this->request->getPost('id_user');

        $b = $this->request->getFile('bukti');

        $cek_bukti = $b->getSize();
        // get ext
        $ext = $b->getClientExtension();

        $tanggal = date('Y_m_d_H_i_s');
        if($cek_bukti != 0){
            $nama_bukti = session()->get('id_user') . '_bukti_' . $tanggal . '.' . $ext;
            // pindahkan patch file
            $b->move('assets/file/bukti', $nama_bukti);
        }else{
            $nama_bukti = '';
        }

        $data = [
            'nama_lengkap' => $nama_legkap,
            'isi_pengaduan' => $isi_pengaduan,
            'email'     => $email,
            'tanggal_pengaduan' => date('Y-m-d H:i:s'),
            'id_user' => session()->get('id_user'),
            'bukti' => $nama_bukti
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
        $cek_foto_keputusan = $foto_keputusan->getSize();
        if($cek_foto_keputusan != 0){
            $nama_foto_keputusan = $nama_lembaga . '_foto_keputusan_' .$foto_keputusan->getRandomName();
            
        }else{
            $nama_foto_keputusan = '';
        }

        $foto_npwp_perusahaan = $this->request->getFile('foto_npwp_perusahaan');
        $cek_foto_npwp_perusahaan = $foto_npwp_perusahaan->getSize();
        if($cek_foto_npwp_perusahaan){
            $nama_foto_npwp_perusahaan = $nama_lembaga . '_foto_npwp_perusahaan_' .$foto_npwp_perusahaan->getRandomName();
        }else{
            $nama_foto_npwp_perusahaan = '';
        }

        $identitas_kepala_lpk = $this->request->getFile('identitas_kepala_lpk');
        $cek_identitas_kepala_lpk = $identitas_kepala_lpk->getSize();
        if($cek_identitas_kepala_lpk != 0){
            $nama_identitas_kepala_lpk = $nama_lembaga . '_identitas_kepala_lpk_' .$identitas_kepala_lpk->getRandomName();
        }else{
            $nama_identitas_kepala_lpk = null;
        }
        
        $profile_lpk = $this->request->getFile('profile_lpk');
        $cek_profile_lpk = $profile_lpk->getSize();
        if($cek_profile_lpk != 0){
            $nama_profile_lpk = $nama_lembaga . '_profile_lpk_' .$profile_lpk->getRandomName();
        }else{
            $nama_profile_lpk = '';
        }

        $foto_keterangan_domisili = $this->request->getFile('foto_keterangan_domisili');
        $cek_foto_keterangan_domisili = $foto_keterangan_domisili->getSize();
        if($cek_foto_keterangan_domisili != 0 ){
            $nama_foto_keterangan_domisili = $nama_lembaga . '_foto_keterangan_domisili_' .$foto_keterangan_domisili->getRandomName();
        }else{
            $nama_foto_keterangan_domisili = '';
        }

        $foto_bukti_kepemilikan = $this->request->getFile('foto_bukti_kepemilikan');
        $cek_foto_bukti_kepemilikan = $foto_bukti_kepemilikan->getSize();
        if($cek_foto_bukti_kepemilikan != 0){
            $nama_foto_bukti_kepemilikan = $nama_lembaga . '_foto_bukti_kepemilikan_' .$foto_bukti_kepemilikan->getRandomName();
        }else{
            $nama_foto_bukti_kepemilikan = '';
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
            'id_user' => session()->get('id_user')
        ];
        
        $this->validation->run($data, 'lpk');
        $errors = $this->validation->getErrors();
        if($errors){
            $res = [
                'status' => 'error',
                'errors' => $errors
            ];
        }else{
            
            $identitas_kepala_lpk->move('assets/file/tanda_daftar_lpk', $nama_identitas_kepala_lpk);
            $foto_npwp_perusahaan->move('assets/file/tanda_daftar_lpk', $nama_foto_npwp_perusahaan);
            $profile_lpk->move('assets/file/tanda_daftar_lpk', $nama_profile_lpk);
            $foto_keterangan_domisili->move('assets/file/tanda_daftar_lpk', $nama_foto_keterangan_domisili);
            $foto_keputusan->move('assets/file/tanda_daftar_lpk', $nama_foto_keputusan);
            $foto_bukti_kepemilikan->move('assets/file/tanda_daftar_lpk', $nama_foto_bukti_kepemilikan);
            $res = [
                'status' => 'success',
                'data' => $data
            ];
        }
        return $res;
    }

    public function acc_ak1(){
        $id = $this->request->getvar('id');

        $this->ak_up = model('App\Models\M_ak');
        $db = $this->ak_up->where('id', $id)->first();

        $tanggal_acc = date('ymd');
        
        $kode_daerah = substr($db['nik'], 0, 4);
        $jumlah = $this->ak_up->where('YEAR(tanggal_pengajuan)', date('Y'))->where('status_pengajuan', 'ACC');
        $jumlah = $jumlah->countAllResults();
        $jumlah = $jumlah + 1;
        // $jumlah = sprintf("%06d", $jumlah);
        // buat jumlah 6 digit
        if($jumlah < 10){
            $jumlah = '00000' . $jumlah;
        }elseif($jumlah < 100){
            $jumlah = '0000' . $jumlah;
        }elseif($jumlah < 1000){
            $jumlah = '000' . $jumlah;
        }elseif($jumlah < 10000){
            $jumlah = '00' . $jumlah;
        }elseif($jumlah < 100000){
            $jumlah = '0' . $jumlah;
        }else{
            $jumlah = $jumlah;
        }
        $nomor_kartu = $kode_daerah . $tanggal_acc . $jumlah;
        
        $cek = $this->ak_up->where('nomor_kartu', $nomor_kartu)->first();
        if($cek){
            $nomor_kartu = $kode_daerah . $tanggal_acc . $jumlah + 1;
        }else{
            $nomor_kartu = $kode_daerah . $tanggal_acc . $jumlah;
        }
        
        $data = [
            'nomor_kartu'      => $nomor_kartu,
            'status_pengajuan' => 'ACC',
            'pesan'            => ''
        ];
        $this->ak_up->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }

    public function acc_bkk(){
        $this->bkk = model('App\Models\M_bkk');
        $id = $this->request->getvar('id');

        $db = $this->bkk->where('id', $id)->first();
        // bulan acc
        $tanggal_acc = date('ymd');
        // ambil bulan
        $bulan = substr($tanggal_acc, 2, 2);
        
        $jumlah = $this->bkk->where('YEAR(tanggal_pengajuan)', date('Y'))->where('status_pengajuan', 'ACC');
        $jumlah = $jumlah->countAllResults();
        $jumlah = $jumlah + 1;


        $nomor_kartu = $tanggal_acc . $jumlah;
        
        $cek = $this->bkk->where('nomor_kartu', $nomor_kartu)->first();
        if($cek){
            $nomor_kartu = $bulan . $jumlah + 1;
        }else{
            $nomor_kartu = $bulan . $jumlah;
        }
        // 

        $data = [
            'status_pengajuan' => 'ACC',
            'nomor_kartu'      => $nomor_kartu,
            'pesan'            => ''
        ];
        $this->bkk->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($tanggal_acc);
        return response();
    }
    
    public function acc_lpk(){
        $this->lpk = model('App\Models\M_lpk');
        $id = $this->request->getvar('id');
    
        $db = $this->lpk->where('id', $id)->first();
        // bulan acc
        $tanggal_acc = date('ymd');
        // ambil bulan
        $bulan = substr($tanggal_acc, 2, 2);
        
        $jumlah = $this->lpk->where('YEAR(tanggal_pengajuan)', date('Y'))->where('status_pengajuan', 'ACC');
        $jumlah = $jumlah->countAllResults();
        $jumlah = $jumlah + 1;


        $nomor_kartu = $tanggal_acc . $jumlah;
        
        $cek = $this->lpk->where('nomor_kartu', $nomor_kartu)->first();
        if($cek){
            $nomor_kartu = $bulan . $jumlah + 1;
        }else{
            $nomor_kartu = $bulan . $jumlah;
        }

        $data = [
            'status_pengajuan' => 'ACC',
            'pesan'            => '',
            'nomor_kartu'      => $nomor_kartu,
        ];
        $this->lpk->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res    );
        return response();
    }
    public function acc_pkwt(){
        $this->pkwt = model('App\Models\M_pkwt');
        $id = $this->request->getvar('id');

        $db = $this->pkwt->where('id', $id)->first();
        // bulan acc
        $tanggal_acc = date('ymd');
        // ambil bulan
        $bulan = substr($tanggal_acc, 2, 2);
        
        $jumlah = $this->pkwt->where('YEAR(tanggal_pengajuan)', date('Y'))->where('status_pengajuan', 'ACC');
        $jumlah = $jumlah->countAllResults();
        $jumlah = $jumlah + 1;


        $nomor_kartu = $tanggal_acc . $jumlah;
        
        $cek = $this->pkwt->where('nomor_kartu', $nomor_kartu)->first();
        if($cek){
            $nomor_kartu = $bulan . $jumlah + 1;
        }else{
            $nomor_kartu = $bulan . $jumlah;
        }

        $data = [
            'status_pengajuan' => 'ACC',
            'pesan'            => '',
            'nomor_kartu'      => $nomor_kartu,
        ];
        $this->pkwt->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }
    public function acc_cpmi(){
        $this->cpmi = model('App\Models\M_cpmi');
        $id = $this->request->getvar('id');

        $db = $this->cpmi->where('id', $id)->first();
        // bulan acc
        $tanggal_acc = date('ymd');
        // ambil bulan
        $bulan = substr($tanggal_acc, 2, 2);
        
        $jumlah = $this->cpmi->where('YEAR(tanggal_pengajuan)', date('Y'))->where('status_pengajuan', 'ACC');
        $jumlah = $jumlah->countAllResults();
        $jumlah = $jumlah + 1;


        $nomor_kartu = $tanggal_acc . $jumlah;
        
        $cek = $this->cpmi->where('nomor_kartu', $nomor_kartu)->first();
        if($cek){
            $nomor_kartu = $bulan . $jumlah + 1;
        }else{
            $nomor_kartu = $bulan . $jumlah;
        }

        $data = [
            'status_pengajuan' => 'ACC',
            'pesan'            => '',
            'nomor_kartu'      => $nomor_kartu,
        ];
        $this->cpmi->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }

    public function tolak_cpmi(){
        $this->cpmi = model('App\Models\M_cpmi');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'status_pengajuan' => 'TOLAK',
            'pesan'            => $pesan
        ];
        $this->cpmi->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }

    public function tolak_ak1(){
        $this->ak_up = model('App\Models\M_ak');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'status_pengajuan' => 'TOLAK',
            'pesan'            => $pesan
        ];
        $this->ak_up->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }
    public function tolak_pkwt(){
        $this->pkwt = model('App\Models\M_pkwt');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'status_pengajuan' => 'TOLAK',
            'pesan'            => $pesan
        ];
        $this->pkwt->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }

    public function tolak_bkk(){
        $this->bkk = model('App\Models\M_bkk');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'status_pengajuan' => 'TOLAK',
            'pesan'            => $pesan
        ];
        $this->bkk->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }

    public function tolak_lpk(){
        $this->lpk = model('App\Models\M_lpk');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'status_pengajuan' => 'TOLAK',
            'pesan'            => $pesan
        ];
        $this->lpk->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $id
        ];
        response()->setJSON($res);
        return response();
    }
    public function balas(){
        $this->balas = model('App\Models\M_pengaduan');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'balasan'       => $pesan,
        ];
        $this->balas->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $data
        ];
        response()->setJSON($res);
        return response();
    }
    public function ubah_balas(){
        $this->balas = model('App\Models\M_pengaduan');
        $id = $this->request->getvar('id');
        $pesan = $this->request->getvar('pesan');
        $data = [
            'balasan'       => $pesan,
        ];
        $this->balas->update($id, $data);
        $res = [
            'status' => 'success',
            'data' => $data
        ];
        response()->setJSON($res);
        return response();
    }
}