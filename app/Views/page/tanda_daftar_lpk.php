<?= $this->include('template_form/head_form') ?>
<!-- input form -->

    <div class="mb-3 row">
        <label for="nama_lembaga" class="col-sm-3 col-form-label">Nama Lembaga</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="penanggung_jawab" class="col-sm-3 col-form-label">Penanggung Jawab</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="program" class="col-sm-3 col-form-label">Program Pelatihan Kerja</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="program" name="program">
        </div>
    </div>

<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->


<!-- end upload form -->
<?= $this->include('template_form/keterangan_form') ?>
<!-- samping kanan form -->

    <ol>
        <li>
            pada bagian ....Upload keputusan penetapan LPK dari pimpinan perusahaan yang membawahi unit pelatihan kerja pada
        </li>
        <li>Foto Nomor Pokok Wajib Pajak (NPWP) atas nama lembaga</li>
        <li>
            pada bagian ..... upload tanda bukti kepemilikan atau sewa atas sarana dan prasarana kantor dan tempat pelatihan
        </li>
        <li>
            pada bagian ... upload Profil yang sekurang-kurangnya memuat Struktur organisasi dan uraian tugas, Program pelatihan kerja berbasis kompetensi yang akan diselenggarakan, Program kerja LPK dan rencana pembiayaan selama 1 tahun, Kapasitas pelatihan pertahun
        </li>
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>


<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    