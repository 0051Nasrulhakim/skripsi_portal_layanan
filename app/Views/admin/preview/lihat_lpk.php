<?= $this->include('admin/template/header') ?>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <div class="container">
        <div class="container_lihat">
            <div class="contain">
                <div class="side_left">
                    <div class="border_card">
                        
                        <div class="row_side_left">
                            <div class="judul">
                                Nama Lembaga
                            </div>
                            <div class="text">
                                <?= $data['nama_lembaga'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Alamat Lembaga
                            </div>
                            <div class="text">
                                <?= $data['alamat_lembaga'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Penanggung Jawab
                            </div>
                            <div class="text">
                                <?= $data['penanggung_jawab'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Nomor Telfon
                            </div>
                            <div class="text">
                                <?= $data['nomor_telfon'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                NPWP Perusahaan
                            </div>
                            <div class="text">
                                <?= $data['npwp_perusahaan'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Bidang Pelatihan
                            </div>
                            <div class="text">
                                <?= $data['bidang_pelatihan'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Foto Keputusan
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="foto_keputusan()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Foto NPWP
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="foto_npwp()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Identitas Kepala LPK
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="identitas_kepala()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Profile LPK
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="profile_lpk()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Keterangan Domisili
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="keterangan_domisili()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Bukti Kepemilikan
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="bukti_kepemilikan()">Lihat</button>
                            </div>
                        </div>

                        <div class="tombol">
                            <button class="btn btn-sm btn-primary" onclick="acc(<?= $data['id']?>)">ACC</button>
                            <button class="btn btn-sm btn-danger" onclick="tolak(<?= $data['id']?>)">Tolak</button>
                        </div>
                    </div>
                </div>
                <div class="side_right">
                    <embed id="foto_keputusan" hidden src="<?= base_url()?>assets/file/tanda_daftar_lpk/<?= $data['foto_keputusan']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_npwp" hidden src="<?= base_url()?>assets/file/tanda_daftar_lpk/<?= $data['foto_npwp_perusahaan']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="identitas_kepala" hidden src="<?= base_url()?>assets/file/tanda_daftar_lpk/<?= $data['identitas_kepala_lpk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="profile_lpk" hidden src="<?= base_url()?>assets/file/tanda_daftar_lpk/<?= $data['profile_lpk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="keterangan_domisili" hidden src="<?= base_url()?>assets/file/tanda_daftar_lpk/<?= $data['foto_keterangan_domisili']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="bukti_kepemilikan" hidden src="<?= base_url()?>assets/file/tanda_daftar_lpk/<?= $data['foto_bukti_kepemilikan']?>" type="application/pdf" width="100%" height="445px" />
                    <!-- <canvas id="pdf-viewer"></canvas> -->
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('admin/modals/modals_tolak') ?>
    <script>
        function foto_keputusan(){
            $('#foto_keputusan').removeAttr('hidden');
            $('#foto_npwp').attr('hidden', '');
            $('#identitas_kepala').attr('hidden', '');
            $('#profile_lpk').attr('hidden', '');
            $('#keterangan_domisili').attr('hidden', '');
            $('#bukti_kepemilikan').attr('hidden', '');
        }
        function foto_npwp(){
            $('#foto_keputusan').attr('hidden', '');
            $('#foto_npwp').removeAttr('hidden');
            $('#identitas_kepala').attr('hidden', '');
            $('#profile_lpk').attr('hidden', '');
            $('#keterangan_domisili').attr('hidden', '');
            $('#bukti_kepemilikan').attr('hidden', '');
        }
        function identitas_kepala(){
            $('#foto_keputusan').attr('hidden', '');
            $('#foto_npwp').attr('hidden', '');
            $('#identitas_kepala').removeAttr('hidden');
            $('#profile_lpk').attr('hidden', '');
            $('#keterangan_domisili').attr('hidden', '');
            $('#bukti_kepemilikan').attr('hidden', '');
        }
        function profile_lpk(){
            $('#foto_keputusan').attr('hidden', '');
            $('#foto_npwp').attr('hidden', '');
            $('#identitas_kepala').attr('hidden', '');
            $('#profile_lpk').removeAttr('hidden');
            $('#keterangan_domisili').attr('hidden', '');
            $('#bukti_kepemilikan').attr('hidden', '');
        }
        function keterangan_domisili(){
            $('#foto_keputusan').attr('hidden', '');
            $('#foto_npwp').attr('hidden', '');
            $('#identitas_kepala').attr('hidden', '');
            $('#profile_lpk').attr('hidden', '');
            $('#keterangan_domisili').removeAttr('hidden');
            $('#bukti_kepemilikan').attr('hidden', '');
        }
        function bukti_kepemilikan(){
            $('#foto_keputusan').attr('hidden', '');
            $('#foto_npwp').attr('hidden', '');
            $('#identitas_kepala').attr('hidden', '');
            $('#profile_lpk').attr('hidden', '');
            $('#keterangan_domisili').attr('hidden', '');
            $('#bukti_kepemilikan').removeAttr('hidden');
        }

        function acc(id){
            $.ajax({
                url: "<?= base_url()?>crud/acc_lpk",
                type: "post",
                data: {
                    id: id
                },
                success: function(data){
                    console.log(data);
                    // swal
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data Berhasil Di ACC',
                        showConfirmButton: true,
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            // redirect
                            window.location.href = "<?= base_url()?>admin/lpk";
                        }
                    })
                }
            })
        }
        function tolak(id){
            $('#modal_tolak').modal('show');
            $('#id').val(id);
        }

        $('#f_tolak').submit(function(e) {
            e.preventDefault();
            //var formData = new FormData(this);
            $.ajax({
                url: 'http://localhost:8080/crud/tolak_lpk',
                type: 'post',
                data: $('#f_tolak').serialize(),
                //data: new FormData(this),
                success: function(response) {
                    if(response.status == 'success'){
                        $('#modal_tolak').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Data Berhasil Di Tolak',
                            showConfirmButton: true,
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                // redirect
                                window.location.href = "<?= base_url()?>admin/lpk";
                            }
                        })
                    }
                }
            });
        })
    </script>
<?= $this->include('admin/template/footer') ?>