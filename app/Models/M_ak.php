<?php

namespace App\Models;

use CodeIgniter\Model;

class M_ak extends Model
{
    protected $table      = 'tb_ak1';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user','nik', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'status', 'alamat', 'agama', 'foto_ijazah', 'pass_foto', 'sertifikat_keahlian', 'tanggal_pengajuan'];
}