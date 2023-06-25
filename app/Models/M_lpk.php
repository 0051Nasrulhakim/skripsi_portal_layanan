<?php

namespace App\Models;

use CodeIgniter\Model;

class M_lpk extends Model
{
    protected $table      = 'lpk';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user','alamat_lembaga','bidang_pelatihan','foto_bukti_kepemilikan','foto_keputusan','foto_keterangan_domisili','foto_npwp_perusahaan','identitas_kepala_lpk','nama_lembaga','nomor_telfon','npwp_perusahaan','penanggung_jawab','profile_lpk','tanggal_pengajuan','status_pengajuan','pesan'];
}