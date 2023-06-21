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
        ]
    ];

    public $bkk = [
        'nama_bkk' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama BKK harus diisi',
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
        
    ];

    public $pkwt =[
        'nama_perusahaan_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama perusahaan harus diisi',
            ]
        ],
        'direktur_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Direktur harus diisi',
            ]
        ],
        'jumlah_pekerja_pkwt' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Jumlah pekerja harus diisi',
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
    ];

    public $lpk = [
        'nama_lembaga' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama lembaga harus diisi',
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
}
