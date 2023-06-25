<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pkwt extends Model
{
    protected $table      = 'pkwt';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user','nama_perusahaan_pkwt','direktur_pkwt','jumlah_pekerja_pkwt','daftar_pekerja_pkwt','naskah_pkwt','tanggal_pengajuan','status_pengajuan','pesan'];
}