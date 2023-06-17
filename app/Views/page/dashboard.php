<?= $this->include('template/publik_header') ?>
<?= $this->include('modals/modals_informasi') ?>
    <div class="banner">
        <div class="judul">
            <div class="j_1">
                PORTAL
            </div>
            <div class="j_2">
                 LAYANAN ONLINE
            </div>
        </div>
        <div class="informasi">
            <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Informasi</button>
        </div>
        <div class="row_card">
            <div class="card">
                <div class="card-body">
                    <div class="text">
                        Tersedia
                    </div>
                    <div class="angka">
                        7 Layanan
                    </div>  
                    <div class="tombol">
                        <button class="btn" onclick="scrollToServiceSection()">Lihat</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text">
                        Layanan Pengaduan
                    </div>
                    <div class="angka">
                        24 Jam
                    </div>
                    <div class="tombol">
                        <button class="btn">Form Pengaduan</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="text">
                        Jam Operasional
                    </div>
                    <div class="angka">
                        07.00 - 15.00
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="section_dashboard">
            <div class="judul">
                <h1>Profil Instansi</h1>
                <hr>
            </div>
            <div class="content">
                <div class="visi_misi">
                    <div class="sub-content">
                        <div class="judul_sub">
                            Visi
                        </div>
                        <div class="text_visi">
                            Terwujudnya pelayanan perindustrian dan ketenagakerjaan untuk mencapai kesejahteraan masyarakat
                        </div>
                    </div>
                    <div class="sub-content">
                        <div class="judul_sub">
                            Misi
                        </div>
                        <div class="text">
                            <ul>
                                <li>Mengembangkan pelatihan berbasis kompetensi, peningkatan produktivitas kerja, perluasan kesempatan kerja dan kewirausahaan.</li>
                                <li>Mewujudkan hubungan industrial harmonis, dinamis dan berkeadilan</li>
                                <li>Mengembangkan industri berbasis unggulan daerah</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sub-content">
                        <div class="struktur_gambar">
                            <img src="<?= base_url()?>img/struktur.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="judul" id="layanan-section">
                <h1>Jenis Layanan</h1>
                <hr>
            </div>
            <div class="content">
                <div class="jenis_layanan">
                    <div class="row_card_layanan">
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Pembuatan AK-1
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Pelayanan BKK
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Rekomendasi Paspor
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Penerbitan Tanda Daftar LPK
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Layanan Pengaduan
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Pencatatan Sarana Hubungan Industrial
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="judul_card">
                                    Pembuatan AK-1
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function scrollToServiceSection() {
            var serviceSection = document.getElementById("layanan-section");
            serviceSection.scrollIntoView({ behavior: "smooth" });
        }
    </script>
<?= $this->include('template/publik_footer') ?>
