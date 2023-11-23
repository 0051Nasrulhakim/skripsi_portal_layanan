<?php

namespace App\Controllers;

use function PHPUnit\Framework\isNull;
use Dompdf\Dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\PseudoTypes\False_;
class Cetak extends BaseController
{
    public function __construct()
    {
        // ....
        date_default_timezone_set("Asia/Jakarta");
        // panggil helper romawi
        helper('romawi');
    }

    public function cetak_ak1($id){
        $this->ak1 = new \App\Models\M_ak();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->ak1->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/ak1/'.$db['pass_foto']));
        // ambil tanggal pengajuan  
        
        $jumlah_data = $this->ak1->countAll();
        $nomor_urut = $jumlah_data + 1;
        $nomor_urut = str_pad($nomor_urut, 6, '0', STR_PAD_LEFT);
        $nomor_urut = str_split($nomor_urut);
        $tanggal_export = date('Y-m-d H:i:s');
        $filename = 'AK1 - '.$db['nama'].'_'.$tanggal_export;
        
        // ambil 4 digit awal dari nomor kartu
        $kode_daerah = substr($db['nomor_kartu'], 0, 4);
        $kode_daerah = str_split($kode_daerah);

        // ambil digit ke 5-10 dari nomor kartu
        $nomor_kartu_kolom_2 = substr($db['nomor_kartu'], 4, 6);
        $nomor_kartu_kolom_2 = str_split($nomor_kartu_kolom_2);
        // ambil digit ke 6 digit terakhir dari nomor kartu
        $nomor_kartu_kolom_3 = substr($db['nomor_kartu'], 10, 6);
        $nomor_kartu_kolom_3 = str_split($nomor_kartu_kolom_3);

        $no_penduduk = $db['nik'];
        $no_penduduk = str_split($no_penduduk);


        $data = [
            'foto' => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'kode_daerah' => $kode_daerah,
            'no_penduduk'   => $no_penduduk,
            'nomor_kartu_kolom_2' => $nomor_kartu_kolom_2,
            'nomor_kartu_kolom_3' => $nomor_kartu_kolom_3,
            'title' => 'Cetak Kartu AK-1',
        ];
        // dd($data);
        $html = view('output/ak1', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('a4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, array("Attachment" => true));
        exit();
        // return view('output/ak1', $data);
    }
    public function cetak_bkk($id){
        $this->bkk = new \App\Models\M_bkk();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->bkk->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/bkk/'.$db['pass_foto_kepsek']));
        // dd($foto);
        $tanggal_export = date('Y-m-d H:i:s');
        $filename = 'BKK - ' .$db['nama_bkk'].'_'.$tanggal_export;

        $bulan = $db['nomor_kartu'];
        // ambil 2 digit awal dari nomor kartu
        $bulan = substr($db['nomor_kartu'], 0, 2);
        $bulan = romawi($bulan);


        // ambil digit ke 3 sampai belakang
        $nomor = substr($db['nomor_kartu'], 2); 
        
        $data = [
            'tahun' => date('Y'),
            'bulan' => $bulan,
            'nomor' => $nomor,
            'foto'  => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'title' => 'Cetak Kartu BKK',
        ];
        // dd($data);
        $html = view('output/bkk', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('a4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, array("Attachment" => true));
        exit();
        // return view('output/bkk', $data);
    }
    public function cetak_lpk($id){
        $this->lpk = new \App\Models\M_lpk();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->lpk->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/lpk/'.$db['pass_foto_kepsek']));
        // dd($foto);
        $tanggal_export = date('Y-m-d H:i:s');
        $filename = 'LPK - '.$db['nama_lembaga'].'_'.$tanggal_export;
        
        $bulan = $db['nomor_kartu'];
        // ambil 2 digit awal dari nomor kartu
        $bulan = substr($db['nomor_kartu'], 0, 2);
        $bulan = romawi($bulan);


        // ambil digit ke 3 sampai belakang
        $nomor = substr($db['nomor_kartu'], 2); 

        $data = [
            'tahun' => date('Y'),
            'bulan' => $bulan,
            'nomor' => $nomor,
            'foto' => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'title' => 'Cetak Kartu LPK',
        ];
        // dd($data);
        $html = view('output/lpk', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('a4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, array("Attachment" => true));
        exit();
        // return view('output/lpk', $data);
    }
    public function cetak_cpmi($id){
        $this->cpmi = new \App\Models\M_cpmi();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->cpmi->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/cpmi/'.$db['pass_foto']));
        // dd($foto);
        $tanggal_export = date('Y-m-d H:i:s');
        $filename = 'CPMI - '. $db['nama'].'_'.$tanggal_export;
        
        $bulan = $db['nomor_kartu'];
        // ambil 2 digit awal dari nomor kartu
        $bulan = substr($db['nomor_kartu'], 0, 2);
        $bulan = romawi($bulan);


        // ambil digit ke 3 sampai belakang
        $nomor = substr($db['nomor_kartu'], 2); 

        $data = [
            'tahun' => date('Y'),
            'bulan' => $bulan,
            'nomor' => $nomor,
            'foto' => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'title' => 'Cetak Kartu CPMI',
        ];
        // dd($data);
        $html = view('output/cpmi', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('a4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, array("Attachment" => true));
        exit();
        // return view('output/cpmi', $data);
    }
    public function cetak_pkwt($id){
        $this->pkwt = new \App\Models\M_pkwt();
        // kirim gambar dengan base64
        $gambar = 'data:image;base64,'.base64_encode(@file_get_contents('logo_pekalongan.png'));
        $db = $this->pkwt->where('id', $id)->first();
        $foto = 'data:image;base64,'.base64_encode(@file_get_contents('assets/file/pkwt/'.$db['pass_foto']));
        // dd($foto);
        $tanggal_export = date('Y-m-d H:i:s');
        $filename = 'PKWT - '. $db['nama_perusahaan_pkwt'].'_'.$tanggal_export;
        
        $bulan = $db['nomor_kartu'];
        // ambil 2 digit awal dari nomor kartu
        $bulan = substr($db['nomor_kartu'], 0, 2);
        $bulan = romawi($bulan);


        // ambil digit ke 3 sampai belakang
        $nomor = substr($db['nomor_kartu'], 2); 


        $data = [
            'tahun' => date('Y'),
            'bulan' => $bulan,
            'nomor' => $nomor,
            'foto'  => $foto,
            'logo'  => $gambar,
            'data'  => $db,
            'title' => 'Cetak Kartu PKWT',
        ];
        // dd($data);
        $html = view('output/pkwt', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('a4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, array("Attachment" => true));
        exit();
        // return view('output/pkwt', $data);
    }
}