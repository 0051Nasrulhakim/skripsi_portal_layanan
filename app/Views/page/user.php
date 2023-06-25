<?= $this->include('template/publik_header') ?>
<?= $this->include('modals/modals_informasi') ?>

<div class="wrapper">
    <div class="section_form">
        <div class="judul">
            <h2 id= judul_page_user>Halaman User</h2>
            <!-- <hr> -->
        </div>
        
        <div class="container_user">
            <div class="left_user">
                <div class="page_profile" id="page_profile">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_user" name="id_user" value="<?=session()->get('id_user')?>" hidden>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?=session()->get('nama_lengkap')?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat" name="alamat" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" value="<?=session()->get('username')?>" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" disabled>
                            <!-- pemberitahuan -->
                            <!-- small -->
                            <div class="form-text text-muted">
                                Jika password kosong maka password tidak akan diubah
                            </div>
                        </div>
                    </div>
                    <div class="btn_user">
                        <button type="button" class="btn btn-danger" id="btn_batal" onclick="batal()" hidden>Batal</button>
                        <button type="button" class="btn btn-primary" id="btn_update" onclick="update()">Update</button>
                        <button type="button" class="btn btn-primary" id="btn_simpan" onclick="simpan()" hidden>Simpan</button>
                    </div>
                </div>
                <div class="page_histori_pengajuan" id="page_histori_pengajuan" hidden>
                    <div class="daftar_layanan">
                        <button class="btn btn-sm btn-warning active" id="btn_his_ak" onclick="btn_his_ak()">Pengajuan AK-1</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_bkk" onclick="btn_his_bkk()">Pengajuan BKK</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_cpmi" onclick="btn_his_cpmi()">Pengajuan CPMI</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_pkwt" onclick="btn_his_pkwt()">Pengajuan PKWT</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_lpk" onclick="btn_his_lpk()">Pengajuan LPK</button>
                    </div>
                    <?= $this->include('tabel/tabel_his_ak')?>
                    <?= $this->include('tabel/tabel_his_bkk')?>
                    <?= $this->include('tabel/tabel_his_cpmi')?>
                    <?= $this->include('tabel/tabel_his_lpk')?>
                    <?= $this->include('tabel/tabel_his_pkwt')?>
                </div>
                
                <div class="page_histori_pengaduan" id="page_histori_pengaduan" hidden>
                    <?= $this->include('tabel/tabel_his_pengaduan')?>
                </div>
            </div>
            <div class="right_user">
                <div class="histori_pengajuan">
                    <button type="button" class="btn btn-success" id="btn_histori_pengajuan" onclick="btn_histori_pengajuan()">Histori Pengajuan</button>
                </div>
                <div class="histori_pengaduan">
                    <button type="button" class="btn btn-success" id="btn_histori_pengaduan" onclick="btn_histori_pengaduan()">Histori Pengaduan</button>
                </div>
                <div class="profile">
                    <button type="button" class="btn btn-success active" id="btn_profile" onclick="btn_profile()">Profile</button>
                </div>
                <div class="pengaduan">
                    <button type="button" class="btn btn-success" id="btn_pengaduan" onclick="btn_pengaduan()">Pengaduan</button>
                </div>
                <div class="home">
                    <button type="button" class="btn btn-warning" id="btn_home" onclick="btn_home()">Home</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('modals/modals_balasan') ?>
<script>
    $(document).ready(function() {
        $('#tb_histori_pengajuan').DataTable();
        $('#tb_histori_pengaduan').DataTable();
        
    });
    function btn_histori_pengaduan(){
        $('#page_histori_pengaduan').attr('hidden', false);
        $('#page_histori_pengajuan').attr('hidden', true);
        $('#page_profile').attr('hidden', true);
        $('#judul_page_user').html('Histori Pengaduan');

        $('#btn_histori_pengaduan').addClass('active');
        $('#btn_profile').removeClass('active');
        $('#btn_pengaduan').removeClass('active');
        $('#btn_histori_pengajuan').removeClass('active');
    }
    function btn_histori_pengajuan(){
        $('#page_histori_pengaduan').attr('hidden', true);
        $('#page_histori_pengajuan').attr('hidden', false);
        $('#page_profile').attr('hidden', true);
        $('#judul_page_user').html('Histori Pengajuan');

        $('#btn_histori_pengaduan').removeClass('active');
        $('#btn_profile').removeClass('active');
        $('#btn_pengaduan').removeClass('active');
        $('#btn_histori_pengajuan').addClass('active');
    }
    function btn_profile(){
        $('#page_histori_pengaduan').attr('hidden', true);
        $('#page_histori_pengajuan').attr('hidden', true);
        $('#page_profile').attr('hidden', false);
        $('#judul_page_user').html('Profile User');

        $('#btn_histori_pengaduan').removeClass('active');
        $('#btn_profile').addClass('active');
        $('#btn_pengaduan').removeClass('active');
        $('#btn_histori_pengajuan').removeClass('active');
    }
    function update(){
        $('#btn_update').attr('hidden', true);
        $('#btn_simpan').attr('hidden', false);
        $('#btn_batal').attr('hidden', false);

        $('#nama').removeAttr('disabled');
        $('#alamat').removeAttr('disabled');
        $('#no_hp').removeAttr('disabled');
        $('#jenis_kelamin').removeAttr('disabled');
        $('#tanggal_lahir').removeAttr('disabled');
        $('#username').removeAttr('disabled');
        $('#password').removeAttr('disabled');
    }
    function btn_his_ak(){
        $('#btn_his_ak').addClass('active');
        $('#btn_his_bkk').removeClass('active');
        $('#btn_his_cpmi').removeClass('active');
        $('#btn_his_lpk').removeClass('active');
        $('#btn_his_pkwt').removeClass('active');

        $('#tabel_his_ak').attr('hidden', false);
        $('#tabel_his_bkk').attr('hidden', true);
        $('#tabel_his_cpmi').attr('hidden', true);
        $('#tabel_his_lpk').attr('hidden', true);
        $('#tabel_his_pkwt').attr('hidden', true);
    }
    function btn_his_bkk(){
        $('#btn_his_ak').removeClass('active');
        $('#btn_his_bkk').addClass('active');
        $('#btn_his_cpmi').removeClass('active');
        $('#btn_his_lpk').removeClass('active');
        $('#btn_his_pkwt').removeClass('active');

        $('#tabel_his_ak').attr('hidden', true);
        $('#tabel_his_bkk').attr('hidden', false);
        $('#tabel_his_cpmi').attr('hidden', true);
        $('#tabel_his_lpk').attr('hidden', true);
        $('#tabel_his_pkwt').attr('hidden', true);

        $('#tb_his_bkk').DataTable();
    }
    function btn_his_cpmi(){
        $('#btn_his_ak').removeClass('active');
        $('#btn_his_bkk').removeClass('active');
        $('#btn_his_cpmi').addClass('active');
        $('#btn_his_lpk').removeClass('active');
        $('#btn_his_pkwt').removeClass('active');

        $('#tabel_his_ak').attr('hidden', true);
        $('#tabel_his_bkk').attr('hidden', true);
        $('#tabel_his_cpmi').attr('hidden', false);
        $('#tabel_his_lpk').attr('hidden', true);
        $('#tabel_his_pkwt').attr('hidden', true);

        $('#tb_his_cpmi').DataTable();
    }
    function btn_his_lpk(){
        $('#btn_his_ak').removeClass('active');
        $('#btn_his_bkk').removeClass('active');
        $('#btn_his_cpmi').removeClass('active');
        $('#btn_his_lpk').addClass('active');
        $('#btn_his_pkwt').removeClass('active');

        $('#tabel_his_ak').attr('hidden', true);
        $('#tabel_his_bkk').attr('hidden', true);
        $('#tabel_his_cpmi').attr('hidden', true);
        $('#tabel_his_lpk').attr('hidden', false);
        $('#tabel_his_pkwt').attr('hidden', true);

        $('#tb_his_lpk').DataTable();
    }
    function btn_his_pkwt(){
        $('#btn_his_ak').removeClass('active');
        $('#btn_his_bkk').removeClass('active');
        $('#btn_his_cpmi').removeClass('active');
        $('#btn_his_lpk').removeClass('active');
        $('#btn_his_pkwt').addClass('active');
        
        $('#tabel_his_ak').attr('hidden', true);
        $('#tabel_his_bkk').attr('hidden', true);
        $('#tabel_his_cpmi').attr('hidden', true);
        $('#tabel_his_lpk').attr('hidden', true);
        $('#tabel_his_pkwt').attr('hidden', false);

        $('#tb_his_pkwt').DataTable();
    }
    function batal(){
        // reload pge
        location.reload();
    }
    function lihat_balasan(){
        $('#exampleModal').modal('show');
    }
    function btn_home(){
        window.location.href = '<?= base_url('home') ?>';
    }
</script>
<?= $this->include('template/publik_footer') ?>