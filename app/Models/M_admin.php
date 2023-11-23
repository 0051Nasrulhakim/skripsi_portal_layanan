<?php

namespace App\Models;

use CodeIgniter\Model;

class M_admin extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_admin','nama_lengkap', 'email', 'username', 'password', 'jenis_kelamin'];
}