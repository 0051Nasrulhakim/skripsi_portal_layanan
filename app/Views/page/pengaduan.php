<?= $this->include('template_form/head_form') ?>
<!-- input form -->



<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->

    <div class="mb-3 row">
        <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
            <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="pengaduan" hidden>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi_pengaduan" class="col-sm-3 col-form-label">Isi Pengaduan</label>
        <div class="col-sm-9">
            <!-- text area -->
            <textarea name="isi_pengaduan" id="isi_pengaduan" cols="59" rows="10" placeholder="Isi Pengaduan"></textarea>
            <!-- <input type="text" class="form-control" id="isi_pengaduan" name="isi_pengaduan"> -->
        </div>
    </div>

<!-- end upload form -->
<?= $this->include('template_form/keterangan_form') ?>
<!-- samping kanan form -->



<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>  