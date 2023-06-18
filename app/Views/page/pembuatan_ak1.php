<?= $this->include('template_form/head_form') ?>

<!-- input form -->

    <div class="mb-3 row">
        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nik" name="nik">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="status" class="col-sm-3 col-form-label">Status</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="status" name="status">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="agama" name="agama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
    </div>
<!-- end input form -->

<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->

    <div class="mb-3 row">
        <label for="foto_ijazah" class="col-sm-3 col-form-label">Foto Ijazah Terakhir</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_ijazah" name="foto_ijazah">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pass_foto" class="col-sm-3 col-form-label">Pass Foto</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="pass_foto" name="pass_foto">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sertifikat_keahlian" class="col-sm-3 col-form-label">Sertifikat Keahlian</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="sertifikat_keahlian" name="sertifikat_keahlian" multiple>
        </div>
    </div>

<!-- end upload form -->

<?= $this->include('template_form/keterangan_form') ?>

<!-- samping kanan form -->

    <ol>
        <li>Masukkan NIK (Nomor Induk Kependudukan), Nama Lengkap, Tanggal Lahir, Jenis Kelamin, Status, Agama, Alamat sesuai yang ada di KTP</li>
        <li>Unggah Foto Ijazah Terakhir</li>
        <li>Unggah Pass Foto Bacground Berwarna MERAH</li>
        <li>Unggah sertifikat keahlian jika mempunyai. jika tidak maka bisa di abaikan </li>
        <li>Jika semua sudah benar silahkan klik tombol AJUKAN di bagian bawah form (SCROLL FORM)</li>
    </ol>

<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    
                    