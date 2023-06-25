<?= $this->include('template_form/head_form') ?>
<!-- input form -->

    <div class="mb-3 row">
        <label for="nama_lembaga" class="col-sm-3 col-form-label">Nama Lembaga</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga">
            <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan" value="lpk" hidden>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat_lembaga" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="alamat_lembaga" name="alamat_lembaga">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="penanggung_jawab" class="col-sm-3 col-form-label">Penanggung Jawab</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nomor_telfon" class="col-sm-3 col-form-label">Nomor Telfon</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nomor_telfon" name="nomor_telfon">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="npwp_perusahaan" class="col-sm-3 col-form-label">NPWP Perusahaan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="npwp_perusahaan" name="npwp_perusahaan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="bidang_pelatihan" class="col-sm-3 col-form-label">Bidang Pelatihan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="bidang_pelatihan" name="bidang_pelatihan">
        </div>
    </div>

<!-- end input form -->
<?= $this->include('template_form/file_form') ?>
<!-- upload pada form -->
    <div class="mb-3 row">
        <label for="foto_keputusan" class="col-sm-3 col-form-label">Scan keputusan penetapan LPK</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_keputusan" name="foto_keputusan" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_npwp_perusahaan" class="col-sm-3 col-form-label">Scan NPWP Perusahaan</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_npwp_perusahaan" name="foto_npwp_perusahaan" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="identitas_kepala_lpk" class="col-sm-3 col-form-label">Identitas Diri dan Riwayat Hidup Kepala LPK</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="identitas_kepala_lpk" name="identitas_kepala_lpk" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="profile_lpk" class="col-sm-3 col-form-label">Profil LPK yang ditandatangani oleh Kepala LPK</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="profile_lpk" name="profile_lpk" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_keterangan_domisili" class="col-sm-3 col-form-label">Scan Keterangan domisili LPK dari pejabat yang berwenang</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_keterangan_domisili" name="foto_keterangan_domisili" accept="application/pdf">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="foto_bukti_kepemilikan" class="col-sm-3 col-form-label">Scan Tanda Bukti Kepemilikan atau Sewa atas sarana dan prasarana</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="foto_bukti_kepemilikan" name="foto_bukti_kepemilikan" accept="application/pdf">
        </div>
    </div>

<!-- end upload form -->
<?= $this->include('template_form/keterangan_form') ?>
<!-- samping kanan form -->

    <ol>
        <li><strong>UPLOAD SEMUA BERKAS DALAM BENTUK PDF</strong></li>
        <li>Berkas yang pengajuanya telah di acc akan menerima file melalui email / halaman user dari dinperinaker</li>
        <li>Berkas yang pengajuanya di ditolak akan diberitahu melalui halaman user</li>
    </ol>


<!-- end samping kanan form -->
<?= $this->include('template_form/footer_form') ?>    