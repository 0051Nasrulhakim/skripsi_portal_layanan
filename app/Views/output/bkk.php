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
            /* height: 100%; */
            /* border: 1px solid blue; */
            font-size: 14pt;
            flex-direction: row;
            margin-top: 2%;
        }
        hr{
            width: 100%;
            height: 4px;
            width: 78%;
            background-color: black;
        }
        .kop .gambar{
            /* width: 15%; */
            /* height: 100%; */
            /* border: 1px solid red; */
        }
        .kop .gambar img{
            text-align: center;
            width: 80%;
            /* height: 100%; */
            /* taruh di tengah */
            /* margin-left: 13%; */
        }
        .kop .text{
            width: 87%;
            /* height: 100%; */
            margin-left: -8%;
            text-align: center;
            /* float: left; */
        }
        .kop .text .line1, .line2, .line3 {
            font-size: 19pt;
            font-weight: bold;
        }
        .kop .text .line4 {
            font-size: 8pt;
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
        <div class="kop" style="margin-left: 11%; width: 77%; text-align: center;">
            
            <table>
                <tr>
                    <td rowspan="3" style="width: 13%;">
                        <div class="gambar">
                            <img src="<?= $logo?>" alt="">
                        </div>
                    </td>
                    <td style="text-align: center;">
                        <!-- <div class="line1"> -->
                            <strong>  PEMERINTAH KOTA PEKALONGAN </strong>
                        <!-- </div> -->
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <!-- <div class="line2"> -->
                            <strong> DINAS PERINDUSTRIAN DAN TENAGA KERJA </strong>
                        <!-- </div> -->
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <!-- <div class="line3"> -->
                         <strong> KOTA PEKALONGAN </strong>
                        <!-- </div> -->
                    </td>
                </tr>
            </table>
            <div class="text" style="margin-left: 13%; margin-bottom: -0.7%; margin-top: -0.43;">
                <div class="line4">
                    Jalan Majapahit No. 14 Kota Pekalongan. (0285) 421731. dinperinaker@pekalongankota.go.id.
                </div>
            </div>
        </div>

        <hr>
        <hr class="hr">

        <div class="text_tengah" style="text-align: center; margin-top: 3%; font-size: 12pt;">
            <div class="text" style="margin-bottom: -0.4%;">
                <b>SURAT TANDA DAFTAR</b>
            </div>
            <hr style="width: 36%; height: 0.3px !important;">
            <div class="nomor" style="margin-top: -0.4%;">
                NOMOR : <?= $nomor?> / <?= $bulan?> / PTK-UKM / <?=$tahun?>
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
        <div class="bawah" style="width: 77%;  margin-left: 12%; margin-top: 13%;">
            <table>
                <tr>
                    <td rowspan="8" style="width: 50%;  position: relative;">
                        <img src="<?= $foto?>" alt="" style="width: 45%; position: absolute; top: 1%; left: 0;">
                    </td>
                    <td style=" width: 100px">
                        Diterbitkan di 
                    </td>
                    <td style="width: 10px;">
                        :
                    </td>
                    <td>
                        Kota Pekalongan
                    </td>
                </tr>
                <tr>
                    <td style=" width: 100px">Pada tanggal </td>
                    <td style="width: 10px;">
                    :
                    </td>
                    <td>
                    20-02-2020
                    </td>
                    
                </tr>
                <tr>
                    <td colspan="3" style=" text-align: center;">
                        Kepala Dinas
                    </td>
                </tr>
                <tr style="margin-top: -1%;">
                    <td colspan="3" style="text-align: center; ">
                        Perindustrian dan Tenaga Kerja
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center; height: 90px;">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        SLAMET HARIYADI, SH., M.Hum
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        NIP. 19690612 199203 1 001
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>