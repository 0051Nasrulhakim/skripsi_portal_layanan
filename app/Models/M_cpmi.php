<?php

namespace App\Models;

use CodeIgniter\Model;

class M_cpmi extends Model
{
    protected $table      = 'cpmi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user','nik','nama','alamat','nama_perusahaan','jabatan','negara_tujuan','tanggal_berangkat','pas_foto','foto_ktp','foto_kk','foto_akta_Kelahiran','foto_surat_nikah','foto_ijazah_terakhir','foto_surat_perjanjian','foto_medical_check_up','foto_ak1','tanggal_pengajuan'];
}