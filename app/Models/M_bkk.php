<?php

namespace App\Models;

use CodeIgniter\Model;

class M_bkk extends Model
{
    protected $table      = 'bkk';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user','nama_bkk','penanggung_jawab','alamat_bkk','struktur_bkk','akta_pendirian_bkk','rencana_kerja_bkk','dokumen_pendirian_bkk','pass_foto_kepsek','tanggal_pengajuan','status_pengajuan','pesan', 'nomor_kartu'];
}