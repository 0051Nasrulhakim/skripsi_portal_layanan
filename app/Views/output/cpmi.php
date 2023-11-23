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
                        <strong>Pengurusan pasport CPMI</strong>
                    </td>
                </tr>
                <tr> 
                    <td style="width: 20%;">
                        Nomor
                    </td>
                    <td style="width: 20px;">
                        :
                    </td>
                    <td style="width: 79%;">
                        <?= $nomor?> / CPMI / <?= $bulan?> / <?= $tahun?>
                    </td>
                </tr>
                
            </table>
        </div>
        <div class="isi" style="margin-top: 2%;">
            <p style="text-indent: 0.5in; text-align: justify;">
                Dalam rangka kepentingan kunjungan resmi yang akan dilakukan oleh perwakilan negara kami, yang akan melaksanakan kerja / kunjungan kerja. kepada Bapak/Ibu, kami dengan ini memberikan surat rekomendasi untuk pengurusan paspor bagi individu berikut: 
            </p>
            <table style="margin-top: 4%; margin-left: 0.5in;">
                <tr>
                    <td>
                        Nama Lengkap 
                    </td>
                    <td>:</td>
                    <td><?= $data['nama']?></td>
                </tr>
                <tr>
                    <td>
                        NIK 
                    </td>
                    <td>:</td>
                    <td><?= $data['nik']?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $data['alamat']?></td>
                </tr>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td>:</td>
                    <td><?= $data['nama_perusahaan']?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?= $data['jabatan']?></td>
                </tr>
                <tr>
                    <td>Negara Tujuan</td>
                    <td>:</td>
                    <td><?= $data['negara_tujuan']?></td>
                </tr>
                <tr>
                    <td>Tanggal Berangkat</td>
                    <td>:</td>
                    <td><?= $data['tanggal_berangkat']?></td>
                </tr>
                
            </table>
            <p style="text-indent: 0.5in; text-align: justify;">
                Surat rekomendasi ini diberikan untuk memfasilitasi proses pengurusan paspor bagi individu-individu tersebut. Kami memohon agar permohonan paspor mereka dapat diprioritaskan dan diproses dengan cepat sesuai dengan ketentuan yang berlaku. Kami menyatakan bahwa kunjungan tersebut bertujuan untuk memperkuat kerjasama multilateral dan mengadakan pertemuan dengan pihak-pihak terkait. Oleh karena itu, kami mengharapkan dukungan penuh dari pihak Bapak/Ibu dalam memperlancar proses pengurusan paspor untuk individu diatas.
            </p>
            <p style="text-indent: 0.5in; text-align: justify;">
                Kami mengucapkan terima kasih atas perhatian dan kerjasama yang diberikan. Harapannya, kunjungan ini akan berjalan dengan lancar dan memberikan kontribusi yang positif dalam meningkatkan hubungan antara negara.
            </p>
        </div>
    </div>
    
</body>