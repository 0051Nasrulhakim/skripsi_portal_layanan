<?= $this->include('template_form/head_form') ?>
<!-- input form -->

    <div class="mb-3 row">
        <label for="nik" class="col-sm-3 col-form-label">NIK</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nik" name="nik">
            <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="cpmi" hidden>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan Tujuan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="negara_tujuan" class="col-sm-3 col-form-label">Negara Tujuan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="negara_tujuan" name="negara_tujuan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tanggal_berangkat" class="col-sm-3 col-form-label">Tanggal Berangkat</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat">
        </div>
    </div>

<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->

    <div class="mb-3 row">
        <label for="pas_foto" class="col-sm-3 col-form-label">Pas Foto</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="pas_foto" name="pas_foto" accept="image/*">
            <div class="form-text text-muted">
                File harus berbentuk gambar
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_ktp" class="col-sm-3 col-form-label">Scan KTP</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_kk" class="col-sm-3 col-form-label">Scan KK</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_kk" name="foto_kk" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_akta_Kelahiran" class="col-sm-3 col-form-label">Scan Akta Kelahiran</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_akta_Kelahiran" name="foto_akta_Kelahiran" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_surat_nikah" class="col-sm-3 col-form-label">Scan surat nikah/cerai</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_surat_nikah" name="foto_surat_nikah[]" accept="application/pdf" multiple>
            <div class="form-text text-muted">
                Jika Tidak Ada bisa dikosongkan
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_ijazah_terakhir" class="col-sm-3 col-form-label">Scan Ijazah Terakhir</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_ijazah_terakhir" name="foto_ijazah_terakhir" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_surat_perjanjian" class="col-sm-3 col-form-label">Scan Surat Perjanjian Kerja</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_surat_perjanjian" name="foto_surat_perjanjian" accept="application/pdf">
            
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_medical_check_up" class="col-sm-3 col-form-label">Scan Hasil Medical Check</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_medical_check_up" name="foto_medical_check_up" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_ak1" class="col-sm-3 col-form-label">Scan AK-1</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_ak1" name="foto_ak1" accept="application/pdf">
        </div>
    </div>

<!-- end upload form -->
<?= $this->include('template_form/keterangan_form') ?>
<!-- samping kanan form -->

    <ol>
        <li>SYARAT WAJIB CPMI HARUS BERUSIA MINIMAL 18 TAHUN</li>
        <li>Masukkan NIK, Nama, Alamat sesuai KTP</li>
        <li>Masukkan Nama Perusahaan Tujuan</li>
        <li>Masukkan Bekerja di perusahaan tujuan</li>
        <li>Masukkan negara tujuan</li>
        <li>Masukkan perkiraan tanggal Berangkat</li>
        <li><strong>UNGGAH SEMUA BERKAS DALAM FORMAT PDF (KECUALI PASS FOTO HARUS BERBENTUK GAMBAR)</strong></li>
        <li>Apabila belum menikah bisa mengosongkan form surat nikah/cerai</li>
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>

<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    