<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .contain{
            width: 100%;
        }
        .kop{
            width: 100%;
            height: 100%;
            /* border: 1px solid blue; */
            font-size: 14pt;
            display: flex;
            flex-direction: row;
            margin-top: 2%;
            /* center */
            justify-content: center;
        }
        hr{
            width: 100%;
            height: 4px;
            width: 78%;
            background-color: black;
        }
        .kop .gambar{
            width: 15%;
            height: 100%;
            /* border: 1px solid red; */
        }
        .kop .gambar img{
            text-align: center;
            width: 48%;
            height: 100%;
            /* border: 1px solid red; */
            /* taruh di tengah */
            /* margin-left: 13%; */
        }
        .kop .text{
            width: 60%;
            height: 100%;
            margin-left: -8%;
            /* border: 1px solid red; */
            text-align: center;
        }
        .kop .text .line1, .line2, .line3 {
            font-size: 19pt;
            font-weight: bold;
        }
        .kop .text .line4 {
            font-size: 10pt;
        }

        .kop .text .line1, .line2, .line3{
            margin-bottom: 1%;
        }
        .hr{
            margin-top: -0.5%;
            width: 100%;
            height: 1px;
            width: 78%;
        }
        /* buat jarak baris ol li */
        ol li{
            margin-top: 1%;
            margin-left: 3%;
        }
        .foter{
            margin-top: 17%;
            margin-left: 11%;
        }
        .foter .text{
            width: 50%;
        }
        .titik{
            margin-right: 2%;
        }
        .foter .gambar{ 
            width: 60%;
            /* border: 1px solid; */
        }
        .foter .gambar img{
            width: 23%;
            /* border: 1px solid; */
        }
        .foter .ttd{
            width: 25%;
            /* border: 1px solid; */
        }
        .diterbitkan_di{
            display: flex;
        }
        .jabatan{
            /* border: 1px solid; */
            text-align: center;
        }
    </style>
    <div class="contain">
        <div class="kop">
            <div class="gambar">
                <img src="<?= $logo?>" alt="">
            </div>
            <div class="text">
                <div class="line1">
                    PEMERINTAH KOTA PEKALONGAN
                </div>
                <div class="line2">
                    DINAS PERINDUSTRIAN DAN TENAGA KERJA 
                </div>
                <div class="line3">
                    KOTA PEKALONGAN
                </div>
                <div class="line4">
                    Jalan Majapahit No. 14 Kota Pekalongan. (0285) 421731. dinperinaker@pekalongankota.go.id.
                </div>
            </div>
        </div>

        <hr>
        <hr class="hr">

        <div class="text_tengah" style="text-align: center; margin-top: 4%;">
            <div class="text">
                <b>SURAT TANDA DAFTAR</b>
            </div>
            <hr style="width: 18%; height: 1px;">
            <div class="nomor">
                NOMOR : 506 / 2 / PTK-UKM / 2018
            </div>
        </div>
        <div class="isi" style="margin-left: 11%; margin-top: 3%; margin-right: 11%; font-size: 14pt;">
            Berdasarkan peraturan metri ketenagakerjaan RI No.30 Tahun 2016 Tentang Penempatan Tenaga Kerja menyetujui :
            <ol>
                <li>Pembentukan bursa kerja khusus <b> <?= $data['nama_bkk']?> </b> sesuai dengan nama SMK / Perguruan Tinggi / Lembaga Pelatihan Kerja</li>
                <li>Nama penanggung jawab bursa kerja khusus <?= $data['nama_bkk']?> <b> <?= $data['penanggung_jawab']?> </b> </li>
                <li>Alamat Bursa Kerja Khusus <?= $data['alamat_bkk']?></li>
                <li> 
                    Sejak diterbitkannya surat tanda daftar ini, Bursa Kerja Khusus dengan nama <b> <?= $data['nama_bkk']?> </b> dapat melakukan kegiatan antar kerja dan sewaktu waktu dapat dibatalkan oleh kepala dinas perinsutrian dan ketenaga kerjaan kota pekalongan apabila tidak melaksanakan pelayanan penempatan tenaga kerja sesauai dengan ketentuan peraturan perundang undangan bidang penempatan kerja,
                </li>
            </ol>
            berlaku 1 (Satu) tahun sejak diterbitkan. 
        </div>
        <div class="bawah" >
            <div class="foter" style="display: flex; flex-direction: row; font-size: 14pt;">
                <div class="gambar">
                    <img src="<?= $foto?>" alt="">
                </div>
                <div class="ttd">
                    <div class="diterbitkan_di">
                        <div class="text">
                            Diterbitkan di
                        </div>
                        <div class="titik">
                            :
                        </div>
                        <div class="text-2">
                            Kota Pekalongan
                        </div>
                    </div>
                    <div class="diterbitkan_di">
                        <div class="text">
                            Pada tanggal
                        </div>
                        <div class="titik">
                            :
                        </div>
                        <div class="text-2">
                            20-02-2020
                        </div>
                    </div>
                    <div class="jabatan" style="margin-top: 5%;">
                        <div class="text_jabatan">
                            Kepala Dinas 
                        </div>
                        <div class="text_jabatan">
                            Perindustrian dan Tenaga Kerja
                        </div>
                    </div>
                    <div class="nama" style="text-align: center; margin-top: 27%;">
                        <div class="text_nama">
                            NASRUL HAKIM
                        </div>
                        <div class="text_nip">
                            NIP. 19690612 199203 1 001
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>