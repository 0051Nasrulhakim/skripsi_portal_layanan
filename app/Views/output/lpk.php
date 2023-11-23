<style>
    .body{
        padding: 0%;
        margin: 0%
    }
</style>
<body>
    <div class="container" style="width: 90%; margin-left: 3%;">
        <div class="kop">
            <table style="width: 90.4%;">
                <tr>
                    <td rowspan="3" style="width: 13%;">
                        <img src="<?= $logo?>" alt="" style="width: 90%;">
                    </td>
                    <td style="text-align: center; font-size: 14;">
                        <!-- <div class="line1"> -->
                            <strong>  PEMERINTAH KOTA PEKALONGAN </strong>
                        <!-- </div> -->
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 14;">
                        <!-- <div class="line2"> -->
                            <strong> DINAS PERINDUSTRIAN DAN TENAGA KERJA </strong>
                        <!-- </div> -->
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 14;">
                        <!-- <div class="line3"> -->
                         <strong> KOTA PEKALONGAN </strong>
                        <!-- </div> -->
                    </td>
                </tr>

            </table>  
        </div>
        <hr style="height: 4px; background-color: black;">
        <hr class="hr" style="margin-top: -0.8%;">
        <div class="nomor_surat" style="text-align: center; margin-top: 5%;">
            <table style="margin-left: auto; margin-right: auto;">
                <tr style="border-bottom: 1px solid;">
                    <td colspan="3" style="text-align: center; border-bottom: 1px solid black;">
                        <strong>Tanda Daftar LPK</strong>
                    </td>
                </tr>
                <tr> 
                    <td style="width: 20%;">
                        Nomor
                    </td>
                    <td style="width: 1%;">
                        :
                    </td>
                    <td style="width: 79%;">
                        <?= $nomor?> / LPK / <?= $bulan?> / <?= $tahun?>
                    </td>
                </tr>
                
            </table>
        </div>
        <div class="isi" style="margin-top: 2%;">
        <!-- buat huruf awal menjorok -->
            <p style="text-indent: 0.5in; text-align: justify;">
                Berdasarkan permohonan yang di ajukan oleh <strong><?= $data['nama_lembaga']?></strong>, tanggal <strong> <?= $data['tanggal_pengajuan']?></strong>, terkait dengan penerbitan Tanda Daftar Lembaga Pelatihan Kerja (LPK), kami dengan ini memberikan keputusan penerbitan Tanda Daftar LPK sesuai dengan ketentuan yang berlaku. Berikut adalah rincian terkait dengan penerbitan Tanda Daftar LPK:
            </p>
            <table style="margin-top: 4%; margin-left: 0.5in;">
                <tr>
                    <td>
                        Nama Perusahaan / lembaga 
                    </td>
                    <td>:</td>
                    <td><?= $data['nama_lembaga']?></td>
                </tr>
                <tr>
                    <td>Alamat Perusahaan / lembaga </td>
                    <td>:</td>
                    <td><?= $data['alamat_lembaga']?></td>
                </tr>
                <tr>
                    <td>Penanggung Jawab </td>
                    <td>:</td>
                    <td><?= $data['penanggung_jawab']?></td>
                </tr>
                <tr>
                    <td> Nomor Telfon</td>
                    <td>:</td>
                    <td><?= $data['nomor_telfon']?></td>
                </tr>
                <tr>
                    <td>NPWP Perusahaan / lembaga</td>
                    <td>:</td>
                    <td><?= $data['npwp_perusahaan']?></td>
                </tr>
                <tr>
                    <td>
                        Bidang Pelatihan Yang di selnggarakan 
                    </td>
                    <td>:</td>
                    <td>
                        <?= $data['bidang_pelatihan']?>
                    </td>
                </tr>
            </table>
            <p style="text-indent: 0.5in; text-align: justify; margin-top: 4%;">
                Dengan diterbitkannya Tanda Daftar LPK ini, perusahaan/lembaga pelatihan tersebut diakui dan terdaftar sebagai Lembaga Pelatihan Kerja yang sah oleh Lembaga Pelatihan Kerja setempat.
                Kami mengingatkan perusahaan/lembaga pelatihan untuk mematuhi dan melaksanakan ketentuan-ketentuan yang berlaku terkait dengan penyelenggaraan pelatihan kerja. Dalam hal ada perubahan atau pembaruan terkait informasi perusahaan/lembaga pelatihan, diharapkan untuk segera menginformasikan kepada Lembaga Pelatihan Kerja setempat. Kami berharap bahwa perusahaan/lembaga pelatihan ini dapat memberikan kontribusi yang signifikan dalam pengembangan sumber daya manusia dan peningkatan keterampilan tenaga kerja.
                
            </p>
            <p style="text-indent: 0.5in; text-align: justify;">
                Demikian keputusan ini kami sampaikan. Terima kasih atas kerjasama dan keterlibatan Bapak/Ibu dalam meningkatkan kualitas tenaga kerja di negara kita.
            </p>

        </div>
    </div>
</body>
