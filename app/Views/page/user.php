<?= $this->include('template/publik_header') ?>
<?= $this->include('modals/modals_informasi') ?>

<div class="wrapper">
    <div class="section_form">
        <div class="judul">
            <h2 id= judul_page_user>Halaman User</h2>
            <!-- <hr> -->
        </div>
        <div class="box_alert" style="width: 100%;">
            <div class="alert alert-danger" role="alert" id="alert" hidden>
                
            </div>
        </div>
        <div class="container_user">
            <div class="left_user">
                <div class="page_profile" id="page_profile">
                    <form id="f_update_user" method="post">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id_user" name="id_user" value="<?=session()->get('id_user')?>" hidden>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?=session()->get('nama_lengkap')?>" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" value="<?=session()->get('email')?>" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?=session()->get('tanggal_lahir')?>" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="alamat" value="<?=session()->get('alamat')?>" name="alamat" disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled> -->
                                <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin" disabled>
                                    <option  selected>Pilih Jenis Kelamin</option>
                                    <option <?php if(session()->get('jenis_kelamin') == "Laki-laki"){echo "selected";}?> value="Laki-laki">Laki-laki</option>
                                    <option <?php if(session()->get('jenis_kelamin') == "Perempuan"){echo "selected";}?>  value="Perempuan">Perempuan</option>
                                    <!-- <option value="3">Three</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" value="<?=session()->get('username')?>" name="username" value="<?=session()->get('username')?>" disabled>
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
                            <button type="submit" class="btn btn-primary" id="btn_simpan" onclick="simpan()" hidden>Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="page_histori_pengajuan" id="page_histori_pengajuan" hidden>
                    <div class="daftar_layanan">
                        <button class="btn btn-sm btn-warning active" id="btn_his_ak" onclick="btn_his_ak()">pelayanan AK-1</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_bkk" onclick="btn_his_bkk()">Pelayanan BKK</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_cpmi" onclick="btn_his_cpmi()">Pelayanan CPMI</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_pkwt" onclick="btn_his_pkwt()">Pelayanan PKWT</button>
                        <button class="btn btn-sm btn-warning" id="btn_his_lpk" onclick="btn_his_lpk()">Pelayanan LPK</button>
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
        $('#judul_page_user').html('Histori Pelayanan');

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
    function simpan(){
        $('#f_update_user').submit(function(e) {
            e.preventDefault();
            //var formData = new FormData(this);
            $.ajax({
                url: 'http://localhost:8080/user/update_user',
                type: 'POST',
                data: $('#f_update_user').serialize(),
                //data: new FormData(this),
                success: function(response) {
                    // your code here
                    console.log(response);
                    if(response.status != 'success'){
                        var alert = $('#alert');
                        alert.attr('hidden', false);
                        var errors = response.data
                        // foreach
                        alert.html('');
                        $.each(errors, function(key, value) {
                            alert.append('<li>' + value + '</li>');
                        });
                    }else{
                        Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Berhasil Di Ubah Silahkan Login Ulang',
                        showConfirmButton: true,
                        // redirect ke halaman dashboard
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "<?= base_url()?>user/relog";
                            }
                        })
                    }

                }
            });
        })
    }
    function update(){
        $('#btn_update').attr('hidden', true);
        $('#btn_simpan').attr('hidden', false);
        $('#btn_batal').attr('hidden', false);

        $('#nama').removeAttr('disabled');
        $('#alamat').removeAttr('disabled');
        $('#no_hp').removeAttr('disabled');
        $('#email').removeAttr('disabled');
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
    
    function lihat_balasan(id){
        // alert(id);
        // cari data berdasarkan id
        $.ajax({
            url: 'http://localhost:8080/home/lihat_balasan',
            type: 'POST',
            data: {
                id: id
            },
            //data: new FormData(this),
            success: function(response) {
                console.log(response);
                $('#isi_balasan').text(response.balasan);
                $('#exampleModal').modal('show');
            }
        });
    }
    function lihat_balasan_bkk(id){
        // alert(id);
        // cari data berdasarkan id
        $.ajax({
            url: 'http://localhost:8080/home/lihat_balasan_bkk',
            type: 'POST',
            data: {
                id: id
            },
            //data: new FormData(this),
            success: function(response) {
                console.log(response);
                $('#isi_balasan').text(response.balasan);
                $('#exampleModal').modal('show');
            }
        });
    }
    function lihat_balasan_ak1(id){
        // alert(id);
        // cari data berdasarkan id
        $.ajax({
            url: 'http://localhost:8080/home/lihat_balasan_ak1',
            type: 'POST',
            data: {
                id: id
            },
            //data: new FormData(this),
            success: function(response) {
                console.log(response);
                $('#isi_balasan').text(response.balasan);
                $('#exampleModal').modal('show');
            }
        });
    }
    
    function btn_home(){
        window.location.href = '<?= base_url('home') ?>';
    }
</script>
<?= $this->include('template/publik_footer') ?>