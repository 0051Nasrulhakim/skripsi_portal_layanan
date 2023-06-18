<?= $this->include('template_form/head_form') ?>
<!-- input form -->

    <div class="mb-3 row">
        <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="direktur" class="col-sm-3 col-form-label">Direktur Perusahaan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="direktur" name="direktur">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jumlah_pekerja" class="col-sm-3 col-form-label">Jumlah Pekerja Yang Akan Di Catat</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="jumlah_pekerja" name="jumlah_pekerja">
        </div>
    </div>


<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->
    <div class="mb-3 row">
        <label for="daftar_pekerja" class="col-sm-3 col-form-label">Daftar Pekerja</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="daftar_pekerja" name="daftar_pekerja">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="naskah_pkwt" class="col-sm-3 col-form-label">Naskah PKWT</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="naskah_pkwt" name="naskah_pkwt">
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
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>

<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    