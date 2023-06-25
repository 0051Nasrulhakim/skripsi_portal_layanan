<?= $this->include('admin/template/header') ?>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <div class="container">
        <div class="container_lihat">
            <div class="contain">
                <div class="side_left">
                    <div class="border_card">
                        <div class="row_side_left">
                            <div class="judul">
                                Nama Perusahaan
                            </div>
                            <div class="text">
                                <?= $data['nama_perusahaan_pkwt'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Nama Direktur
                            </div>
                            <div class="text">
                                <?= $data['direktur_pkwt'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Jumlah Pekerja PKWT
                            </div>
                            <div class="text">
                                <?= $data['jumlah_pekerja_pkwt'] ?>
                            </div>
                        </div>
                        
                        <div class="row_side_left">
                            <div class="judul">
                                Daftar Pekerja PKWT
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="t_daftar_pekerja_pkwt" onclick="daftar_pekerja_pkwt()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Naskah PKWT
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="t_naskah_pkwt" onclick="naskah_pkwt()">Lihat</button>
                            </div>
                        </div>
                        <div class="tombol">
                            <button class="btn btn-sm btn-primary" onclick="acc(<?= $data['id']?>)">ACC</button>
                            <button class="btn btn-sm btn-danger" onclick="tolak(<?= $data['id']?>)">Tolak</button>
                        </div>
                    </div>
                </div>
                <div class="side_right">
                    <embed id="daftar_pekerja_pkwt" hidden src="<?= base_url()?>assets/file/pkwt/<?= $data['daftar_pekerja_pkwt']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="naskah_pkwt" hidden src="<?= base_url()?>assets/file/pkwt/<?= $data['naskah_pkwt']?>" type="application/pdf" width="100%" height="445px" />
                    <!-- <canvas id="pdf-viewer"></canvas> -->
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('admin/modals/modals_tolak') ?>
    <script>
        function daftar_pekerja_pkwt(){
            $('#daftar_pekerja_pkwt').removeAttr('hidden');
            $('#naskah_pkwt').attr('hidden', '');
        }
        function naskah_pkwt(){
            $('#naskah_pkwt').removeAttr('hidden');
            $('#daftar_pekerja_pkwt').attr('hidden', '');
        }
        function acc(id){
            $.ajax({
                url: "<?= base_url()?>crud/acc_pkwt",
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
                            window.location.href = "<?= base_url()?>admin/pkwt";
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
                url: 'http://localhost:8080/crud/tolak_pkwt',
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
                                window.location.href = "<?= base_url()?>admin/pkwt";
                            }
                        })
                    }
                }
            });
        })
    </script>
<?= $this->include('admin/template/footer') ?>