<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<style>
    
    .container .kop{
        width: 100%;
        /* height: 100%; */
        font-size: 14pt;
        /* display: flex;
        flex-direction: row; */
        margin-top: 2%;
    }
    .container .kop .nama_kartu{
        text-align: right;
        /* margin-right: 4%; */
    }
    .container .kop .logo{
        width: 20%;
        /* height: 100%; */
        float: left;
        
    }
    .container .kop .logo img{
        text-align: center;
        width: 38%;
        /* height: 100%; */
        /* taruh di tengah */
        margin-left: 30%;
    }
    .container .kop .text{
        width: 68%;
        margin-left: -1%;
        /* height: 100%; */
        text-align: center;
        float: left;
    }
    .container .kop .text .line-1, .line-2, .line-3{
        font-size: 14pt;
        margin-bottom: 1%;
    }

    .container .kop .nama_kartu{
        width: 10%;
        margin-right: 40px;
        /* height: 100%; */
        float: left;
    }
    .container .nomor_pencaker{
        width: 100%;
        margin-top: 2%;
        display: flex;
        flex-direction: row;
        margin-left: 14%;
        margin-bottom: 1%;
    }
    .container .nomor_pencaker .text{
        width: 15%;
        /* height: 100%; */
        /* float: left; */
    }
    .container .nomor_pencaker .titik2{
        width: 3%;
        text-align: center;
        /* height: 100%; */
        /* float: left; */
    }

    /* buat table border */
    .container .nomor_pencaker .nomor table{
        border-collapse: collapse;
        width: 20%;
        font-size: 10pt;
        /* height: 100%; */
        /* float: left; */
    }
    .container .nomor_pencaker .nomor table td{
        border: 1px solid black;
        text-align: center;
        width: 15px;
    }
    .container .nomor_pencaker .nomor table td:nth-child(1){
        border: none;
        text-align: center;
        width: 15px;
    }
    .container .nomor_pencaker .nomor table td:nth-child(2){
        border: none;
        text-align: center;
        width: 15px;
    }
    .isi{
        /* border: 1px solid; */
        display: flex;
        flex-direction: row;
    }
    .isi .gambar{
        font-size: 10pt;
        width: 78%;
        margin-left: 7%;
        margin-right: 3%;
    }
    .isi .gambar img{
        /* letakkan di tengah atas kolom tabel*/
        width: 100px;
        /* height: 100%; */
    }
    /* hapus margin ol li */
    ol, ul {
        margin: 0;
        padding: 0;
        /* list-style-position: inside; */
    }
    /* .keterangan {
        
        margin-right: 2%;
    }
    .keterangan .text{
        font-size: 8pt;
        font-weight: bold;
    } */
    .laporan{
        font-size: 10pt;
        width: 85%;
        margin-top: 1%;
        margin-left: 27%;
    }
    .tabel_bawah{
        font-size: 10pt;
        width: 59.5%;
        margin-top: 1%;
        margin-left: 27%;
        margin-bottom: 2%;
    }
    .laporan table{
        border: 1px solid black;
        border-collapse: collapse;
        width: 82%;
        /* height: 100%; */
        /* float: left; */
    }
    .laporan table td{
        border: 1px solid black;
        border-collapse: collapse;
        /* width: 70%; */
        /* height: 100%; */
        /* float: left; */
    }
    .tabel_bawah table{
        border: 1px solid black;
        border-collapse: collapse;
        width: 70%;
        /* height: 100%; */
        /* float: left; */
    }
    /* child td 1 */
    .isi .gambar table td:nth-child(1){
        position: relative;
    }
    .isi .gambar table td:nth-child(1) img{
        position: absolute;
        top: 1%;
        left: 0;
    }

</style>
<body>
    <div class="margin" style="border: 1px solid; margin-right: 5%;">
        <div class="container" style="margin: 2%;">
            <div class="kop">
                <div class="logo">
                    <img src="<?= $logo?>" alt="" srcset="">
                </div>
                <div class="text">
                    <div class="line-1">
                        PEMERINTAH KOTA PEKALONGAN
                    </div>
                    <div class="line-2">
                        DINAS TENAGA KERJA KOTA PEKALONGAN
                    </div>
                    <div class="line-3">
                        KARTU TANDA PENCARI KERJA
                    </div>
                </div>
                <div class="nama_kartu">
                    AK/1
                </div>
            </div>
            <div class="nomor_pencaker">
                <!-- <div class="text">
                    Nomor Pencaker
                </div>
                <div class="titik2">
                    :
                </div> -->
                <div class="nomor" style="margin-top: 12%;">
                    <!-- buat nomor kartu ada di dalam kotak kotak-->
                    <table>
                        <tr>
                            <td style="width: 120px; text-align: left;">Nomor Pencaker</td>
                            <td> : </td>
                            <?php foreach($kode_daerah as $k_daerah):?>
                            <td><?= $k_daerah ?></td>
                            <?php endforeach?>
                            
                            <td>
                                -
                            </td>

                            <?php foreach($nomor_kartu_kolom_2 as $n_k2):?>
                            <td>
                                <?= $n_k2 ?>
                            </td>
                            <?php endforeach?>
                            <td>
                                -
                            </td>
                            <?php foreach($nomor_kartu_kolom_3 as $n_k3):?>
                            <td>
                                <?= $n_k3 ?>
                            </td>
                            <?php endforeach?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="nomor_pencaker">
                <!-- <div class="text">
                    Nomor Penduduk
                </div>
                <div class="titik2">
                    :
                </div> -->
                <div class="nomor">
                    <!-- buat nomor kartu ada di dalam kotak kotak-->
                    <table>
                        <tr>
                            <td style="width: 120px; text-align: left;">
                                Nomor Penduduk
                            </td>
                            <td>
                                :
                            </td>
                            <?php foreach($no_penduduk as $np):?>
                                <td>
                                    <?= $np ?>
                                </td>
                            <?php endforeach;?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="isi">
                <div class="gambar">
                    <table>
                        <tr>
                            <td><img src="<?= $foto?>" alt=""></td>
                            <td style="width: 10px;"></td>
                            <td>
                                <div class="text_keterangan" style="margin-left:3%">
                                    Keterangan :
                                    <ol style="margin-left: 4%;">
                                        <li style=" margin-top: 1%;">Kartu ini berlaku untuk melamar pekerjaan</li>
                                        <li>Bila ada perubahan data / keterangan lahinya atau telah mendapat pekerjaan harap segera melapor</li>
                                        <li>Apabila yang bersangkutan telah diterima bekerja maka instansi / perusahaan yang menerima agar mengembalikan AK/1 ini kepada dinas tenaga kerja</li>
                                        <li>Kartu ini berlaku selama 2 tahun dengan keharusan melapor setiap 6 bulan sekali tehitung sejak tanggal pendaftaran</li>
                                        <li>Apabila dikemudian hari terbukti memberikan keterangan yang tidak benar atau memiliki lebih dari 1 AK/1 maka akan dituntut sesuai dengan peraturan perundang undangan yang berlaku.</li>
                                    </ol>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                </div>
                
            </div>
            <div class="laporan">
                <table>
                    <tr style="text-align: center;">
                        <td style="width: 20%;">Laporan</td>
                        <td style="width: 40%;">Tanggal</td>
                        <td style="width: 40%;">TTD Petugas</td>
                    </tr>
                    <tr>
                        <td>Pertama</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <Td>Kedua</Td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <Td>Ketiga</Td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="tabel_bawah">
                <table>
                    <tr>
                        <td style="width: 90px;">
                            Diterima di 
                        </td>
                        <td> : </td>
                        <td>
                        .......................................................................................................
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 90px;"> Alamat </td>
                        <td> : </td>
                        <td>
                        .......................................................................................................
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
<!-- </html> -->