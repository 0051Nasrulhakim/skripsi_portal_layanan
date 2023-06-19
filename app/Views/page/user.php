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
                            <input type="text" class="form-control" id="nama" name="nama" disabled>
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
                            <input type="text" class="form-control" id="username" name="username" disabled>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" disabled>
                        </div>
                    </div>
                    <div class="btn_user">
                        <button type="button" class="btn btn-danger" id="btn_batal" hidden>Batal</button>
                        <button type="button" class="btn btn-primary" id="btn_update" onclick="update()">Update</button>
                        <button type="button" class="btn btn-primary" id="btn_simpan" onclick="simpan()" hidden>Simpan</button>
                    </div>
                </div>
                <div class="page_histori_pengajuan" id="page_histori_pengajuan" hidden>
                    <div class="table table-responsive">
                        <table class="table table-striped" id="tb_histori_pengajuan">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Pengajuan</th>
                                    <th>Tanggal</th>
                                    <th>keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>asasas</td>
                                    <td>12-05-2023</td>
                                    <td>Acc</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>asasas</td>
                                    <td>12-05-2023</td>
                                    <td>Acc</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="page_histori_pengaduan" id="page_histori_pengaduan" hidden>
                    <div class="table table-responsive">
                            <table class="table table-striped" id="tb_histori_pengaduan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>pengaduan</th>
                                        <th>tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>asasas</td>
                                        <td>12-05-2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>asasas</td>
                                        <td>12-05-2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
            </div>
        </div>
    </div>
</div>
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
</script>
<?= $this->include('template/publik_footer') ?>