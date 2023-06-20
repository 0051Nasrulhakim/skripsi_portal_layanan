<?= $this->include('template_form/head_form') ?>
<!-- input form -->

    <div class="mb-3 row">
        <label for="nama_bkk" class="col-sm-3 col-form-label">Nama BKK</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="bkk" hidden>
            <input type="text" class="form-control" id="nama_bkk" name="nama_bkk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="penanggung_jawab" class="col-sm-3 col-form-label">Penanggung Jawab</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat_bkk" class="col-sm-3 col-form-label">Alamat BKK</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="alamat_bkk" name="alamat_bkk">
        </div>
    </div>

<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->

    <div class="mb-3 row">
        <label for="struktur_bkk" class="col-sm-3 col-form-label">Struktur Organisasi</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="struktur_bkk" name="struktur_bkk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="akta_pendirian_bkk" class="col-sm-3 col-form-label">Akta Pendirian BKK</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="akta_pendirian_bkk" name="akta_pendirian_bkk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="rencana_kerja_bkk" class="col-sm-3 col-form-label">Rencana Kerja Tahunan</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="rencana_kerja_bkk" name="rencana_kerja_bkk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="dokumen_pendirian_bkk" class="col-sm-3 col-form-label">Dokumen Pendirian</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="dokumen_pendirian_bkk" name="dokumen_pendirian_bkk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pass_foto_kepsek" class="col-sm-3 col-form-label">Pas Foto Kepala Sekolah</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="pass_foto_kepsek" name="pass_foto_kepsek">
        </div>
    </div>

<!-- end upload form -->
<?= $this->include('template_form/keterangan_form') ?>
<!-- samping kanan form -->

    <ol>
        <li>Masukkan Nama BKK (Sekolahan / Perguruan Tinggi / Lembaga Pelatihan Kerja)</li>
        <li>Masukkan Nama Penanggung Jawab BKK</li>
        <li>Masukkan Alamat BKK</li>
        <li>Unggah Berkas Berkas Pendukung</li>
        <li>Setelah semua lengkap klik tombol ajukan</li>
        <li>Setelah pengajuan berhasil lokasi /persyaratan kelengkapan berkas. Jika persyaratan belum lengkap/salah, pengajuan ditolak dan dipersilahkan melakukan pengajuan ulang</li>
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>

<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    