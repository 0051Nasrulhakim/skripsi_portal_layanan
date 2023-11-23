<?= $this->include('template_form/head_form') ?>
<!-- input form -->

    <div class="mb-3 row">
        <label for="nama_perusahaan_pkwt" class="col-sm-3 col-form-label">Nama Perusahaan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama_perusahaan_pkwt" name="nama_perusahaan_pkwt">
            
            <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="pkwt" hidden>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="direktur_pkwt" class="col-sm-3 col-form-label">Direktur Perusahaan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="direktur_pkwt" name="direktur_pkwt">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jumlah_pekerja_pkwt" class="col-sm-3 col-form-label">Jumlah Pekerja Yang Akan Di Catat</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="jumlah_pekerja_pkwt" name="jumlah_pekerja_pkwt">
        </div>
    </div>


<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->
    <div class="mb-3 row">
        <label for="daftar_pekerja_pkwt" class="col-sm-3 col-form-label">Daftar Pekerja</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="daftar_pekerja_pkwt" name="daftar_pekerja_pkwt" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="naskah_pkwt" class="col-sm-3 col-form-label">Naskah PKWT</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="naskah_pkwt" name="naskah_pkwt" accept="application/pdf">
        </div>
    </div>

<!-- end upload form -->
<?= $this->include('template_form/keterangan_form') ?>
<!-- samping kanan form -->

    <ol>
        <li>Masukkan Nama Perusahaan</li>
        <li>Masukkan Nama direktur Perusahaan</li>
        <li>Masukkan jumlah pekerja yang akan di catat</li>
        <li>Unggah file rekap daftar pekerja yang akan dicatatkan</li>
        <li>Unggah file naskah PKWT yang telah disepakati</li>
        <li><strong>SEMUA BERKAS YANG DI UNGGAH HARUS BERFORMAT PDF</strong></li>
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>

<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    