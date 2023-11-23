<?= $this->include('template_form/head_form') ?>

<!-- input form -->

    <div class="mb-3 row">
        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nik" name="nik">
            <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="ak1" hidden>
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
            <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"> -->
            <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
                <option selected value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
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
            <!-- <input type="text" class="form-control" id="agama" name="agama"> -->
            <select class="form-select" aria-label="Default select example" id="agama" name="agama">
                <option selected value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
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
        <label for="foto_ijazah" class="col-sm-3 col-form-label">Scan Ijazah Terakhir</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_ijazah" name="foto_ijazah" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pass_foto" class="col-sm-3 col-form-label"> Pass Foto</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="pass_foto" name="pass_foto" accept="image/*">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sertifikat_keahlian" class="col-sm-3 col-form-label">Sertifikat Keahlian</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="sertifikat_keahlian" name="file[]" multiple accept="application/pdf">
        </div>
    </div>

<!-- end upload form -->

<?= $this->include('template_form/keterangan_form') ?>

<!-- samping kanan form -->

    <ol>
        <li>Masukkan NIK (Nomor Induk Kependudukan), Nama Lengkap, Tanggal Lahir, Jenis Kelamin, Status, Agama, Alamat sesuai yang ada di KTP</li>
        <li>Unggah SCAN Ijazah Terakhir</li>
        <li>Unggah Pass Foto Bacground Berwarna MERAH</li>
        <li>Unggah SCAN sertifikat keahlian jika mempunyai. jika tidak maka bisa di abaikan </li>
        <li>Jika semua sudah benar silahkan klik tombol AJUKAN di bagian bawah form (SCROLL FORM)</li>
        <li><strong>SEMUA BERKAS HARUS BERBENTUK PDF KECUALI PASS FOTO HARUS BERBENTUK GAMBAR</strong></li>
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / dapat di cek di halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>

<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    
                    