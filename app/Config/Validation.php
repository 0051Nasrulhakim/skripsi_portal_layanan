<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $ak1 = [
        'nik' => [
            'rules' => 'required|numeric|min_length[16]|max_length[20]',
            'errors' => [
                'required' => 'NIK harus diisi',
                'numeric' => 'NIK harus berupa angka',
                'min_length' => 'NIK minimal 16 digit',
                'max_length' => 'NIK maksimal 20 digit',
            ]
        ],
        'foto_ijazah' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Foto Ijazah Belum Terupload',
            ]
        ],
        'pass_foto' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pass Foto Belum Terupload',
            ]
        ],
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama harus diisi',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal lahir harus diisi',
            ]
        ],
        'agama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Agama harus diisi',
            ]
        ],
        'jenis_kelamin' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jenis Kelamin harus diisi',
            ]
        ],
    ];
    
    public $pkwt = [
        'nama_perusahaan_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Perusahaan harus diisi',
            ]
        ],
        'direktur_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Direktur harus diisi',
            ]
        ],
        'jumlah_pekerja_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jumlah Pekerja PKWT Perusahaan harus diisi',
            ]
        ],
        'daftar_pekerja_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Daftar Pekerja PKWT belum ter upload',
            ]
        ],
        'naskah_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Naskah PKWT belum ter upload',
            ]
        ],
        
    ];

    public $bkk = [
        'nama_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama BKK harus diisi',
            ]
        ],
        'struktur_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Struktur BKK Belum Terupload',
            ]
        ],
        'akta_pendirian_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Akta Pendirian BKK Belum Terupload',
            ]
        ],
        'rencana_kerja_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Rencana Kerja BKK Belum Terupload',
            ]
        ],
        'dokumen_pendirian_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Dokumen Pendirian BKK Belum Terupload',
            ]
        ],
        'pass_foto_kepsek' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Pass Foto Kepsek Belum Terupload',
            ]
        ],
        'penanggung_jawab' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penanggung jawab harus diisi',
            ]
        ],
        'alamat_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ]
    ];

    public $u_user_pass = [
        'id_user' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'ID User harus diisi',
            ]
        ],
        'nama_lengkap' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Lengkap harus diisi',
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
            ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Lahir harus diisi',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ],
        'jenis_kelamin' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jenis Kelamin harus diisi',
            ]
        ],
        'username' => [
            'rules' => 'required|is_unique[user.username, id_user,{id_user}]|min_length[5]|max_length[20]',
            'erroes' => [
                'required' => 'Username harus diisi',
                'is_unique' => 'Username sudah terdaftar',
                'min_length' => 'Username minimal 5 karakter',
                'max_length' => 'Username maksimal 20 karakter',
            ]
        ],
        'password' => [
            'rules' => 'required|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Password harus diisi',
                'min_length' => 'Password minimal 5 karakter',
                'max_length' => 'Password maksimal 20 karakter',
            ]
        ],
    ];
    public $u_user_no_pass = [
        'id_user' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'ID User harus diisi',
            ]
        ],
        'nama_lengkap' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Lengkap harus diisi',
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
            ]
        ],
        'tanggal_lahir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Lahir harus diisi',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ],
        'jenis_kelamin' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jenis Kelamin harus diisi',
            ]
        ],
        'username' => [
            'rules' => 'required|is_unique[user.username, id_user,{id_user}]|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Username harus diisi',
                'is_unique' => 'Username sudah terdaftar',
                'min_length' => 'Username minimal 5 karakter',
                'max_length' => 'Username maksimal 20 karakter',
            ]
        ],
    ];

    public $cpmi = [
        'nik' => [
            'rules' => 'required|numeric|min_length[16]|max_length[20]',
            'errors' => [
                'required' => 'NIK harus diisi',
                'numeric' => 'NIK harus berupa angka',
                'min_length' => 'NIK minimal 16 digit',
                'max_length' => 'NIK maksimal 20 digit',
            ]
        ],
        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama harus diisi',
            ]
        ],
        'alamat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat harus diisi',
            ]
        ],
        'nama_perusahaan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama perusahaan harus diisi',
            ]
        ],
        'jabatan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jabatan harus diisi',
            ]
        ],
        'negara_tujuan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Negara tujuan harus diisi',
            ]
        ],
        'tanggal_berangkat' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal berangkat harus diisi',
            ]
        ],
        'pas_foto' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Foto Belum Terupload',
            ]
        ],
        'foto_ktp' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'KTP Belum Terupload',
            ]
        ],
        'foto_kk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'KK Belum Terupload',
            ]
        ],
        'foto_akta_Kelahiran' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Akta Kelahiran Belum Terupload',
            ]
        ],
        'foto_ijazah_terakhir' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Ijazah Terakhir Belum Terupload',
            ]
        ],
        'foto_surat_perjanjian' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Surat Perjanjian Belum Terupload',
            ]
        ],
        'foto_medical_check_up' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Foto Medical Checkup Belum Terupload',
            ]
        ],
        'foto_ak1' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Ak1 Belum Terupload',
            ]
        ],
    ];

    

    public $pengaduan =[
        'nama_lengkap' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama lengkap harus diisi',
            ]
        ],
        'isi_pengaduan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Isi pengaduan harus diisi',
            ]
        ],
        'email' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Email harus diisi',
            ]
        ],
        'bukti' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'silahkan upload bukti berbentuk foto atau vidio',
            ]
        ],
        // validasi bukti opsional

    ];

    public $lpk = [
        'nama_lembaga' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama lembaga harus diisi',
            ]
        ],
        'identitas_kepala_lpk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Identitas Kepala LPK Belum Terupload',
            ]
        ],
        'foto_npwp_perusahaan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'NPWP Perusahaan Belum Terupload',
            ]
        ],
        'profile_lpk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Profile LPK Belum Terupload',
            ]
        ],
        'foto_keputusan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Surat Keputusan LPK Belum Terupload',
            ]
        ],
        'foto_keterangan_domisili' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Keterangan domisili Belum Terupload',
            ]
        ],
        'foto_bukti_kepemilikan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Bukti Kepemilikan Belum Terupload',
            ]
        ],
        'alamat_lembaga' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat lembaga harus diisi',
            ]
        ],
        'penanggung_jawab' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penanggung jawab harus diisi',
            ]
        ],
        'nomor_telfon' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nomor telfon harus diisi',
            ]
        ],
        'npwp_perusahaan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'NPWP perusahaan harus diisi',
            ]
        ],
        'bidang_pelatihan' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Bidang pelatihan harus diisi',
            ]
        ],
    ];

    public $register = [
        'nama_lengkap' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama lengkap harus diisi',
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[user.email]',
            'errors' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
                'is_unique' => 'Email sudah terdaftar',
            ]
        ],
        'username' => [
            'rules' => 'required|is_unique[user.username]|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Username harus diisi',
                'min_length' => 'Username minimal 5 karakter',
                'max_length' => 'Username maksimal 20 karakter',
                'is_unique' => 'Username sudah terdaftar',
            ]
        ],
        'password' => [
            'rules' => 'required|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Password harus diisi',
                'min_length' => 'Password minimal 5 karakter',
                'max_length' => 'Password maksimal 20 karakter',
            ]
        ]
    ];

    public $register_admin = [
        'nama_lengkap' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama lengkap harus diisi',
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[admin.email]',
            'errors' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Email tidak valid',
                'is_unique' => 'Email sudah terdaftar',
            ]
        ],
        'username' => [
            'rules' => 'required|is_unique[admin.username]|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Username harus diisi',
                'min_length' => 'Username minimal 5 karakter',
                'max_length' => 'Username maksimal 20 karakter',
                'is_unique' => 'Username sudah terdaftar',
            ]
        ],
        'password' => [
            'rules' => 'required|min_length[5]|max_length[20]',
            'errors' => [
                'required' => 'Password harus diisi',
                'min_length' => 'Password minimal 5 karakter',
                'max_length' => 'Password maksimal 20 karakter',
            ]
        ]
    ];
}
