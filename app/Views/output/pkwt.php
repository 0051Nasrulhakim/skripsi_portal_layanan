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
                        <strong>Pencatatan PKWT</strong>
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
                        <?= $nomor?> / PKWT / <?= $bulan?> / <?= $tahun?>
                    </td>
                </tr>
                
            </table>
        </div>
        <div class="isi" style="margin-top: 2%;">
            <p style="text-indent: 0.5in; text-align: justify;">
                Berdasarkan permohonan pencatatan PKWT yang di ajukan oleh <strong><?= $data['nama_perusahaan_pkwt']?></strong>, tanggal <strong> <?= $data['tanggal_pengajuan']?></strong>, kami ingin memberitahukan bahwa permohonan Anda telah diterima dan diproses oleh Kementerian Ketenagakerjaan. Setelah melakukan evaluasi terhadap perjanjian kerja yang diajukan, kami dengan ini menyatakan bahwa pencatatan perjanjian kerja waktu tertentu telah dilakukan dan telah sesuai dengan ketentuan yang diatur dalam Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan. 
            </p>
            <p style="text-indent: 0.5in; text-align: justify;">
                Pencatatan perjanjian kerja ini akan memberikan kepastian hukum dan perlindungan bagi kedua belah pihak, yaitu pemberi kerja dan pekerja. Kami menghimbau agar kedua belah pihak mematuhi dan melaksanakan semua ketentuan yang tercantum dalam perjanjian kerja tersebut.
                Kami juga ingin mengingatkan bahwa apabila terdapat perubahan dalam perjanjian kerja ini, baik mengenai jangka waktu, gaji, maupun syarat-syarat lainnya, Anda diharapkan untuk segera melaporkannya kepada Kementerian Ketenagakerjaan guna melakukan perubahan pencatatan yang diperlukan. Adapun detail perjanjian kerja yang telah dicatatkan adalah sebagai berikut:
            </p>
            <table style="margin-top: 4%; margin-left: 0.5in;">
                <tr>
                    <td>
                        Nama Perusahaan 
                    </td>
                    <td>:</td>
                    <td><?= $data['nama_perusahaan_pkwt']?></td>
                </tr>
                <tr>
                    <td>Direktur / Penanggung jawab</td>
                    <td>:</td>
                    <td><?= $data['direktur_pkwt']?></td>
                </tr>
                <tr>
                    <td>Jumlah Pekerja PKWT Yang didaftarkan</td>
                    <td>:</td>
                    <td><?= $data['jumlah_pekerja_pkwt']?></td>
                </tr>
                
            </table>
            <p style="text-indent: 0.5in; text-align: justify; margin-top: 4%;">
                Demikian surat ini kami sampaikan. Kami mengucapkan terima kasih atas kerjasama Anda dalam mematuhi peraturan ketenagakerjaan yang berlaku.  
            </p>
        </div>
    </div>
    
</body>