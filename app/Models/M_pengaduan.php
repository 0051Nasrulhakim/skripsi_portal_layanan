<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pengaduan extends Model
{
    protected $table      = 'pengaduan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user','nama_lengkap', 'isi_pengaduan', 'email', 'tanggal_pengaduan','balasan', 'bukti'];
}