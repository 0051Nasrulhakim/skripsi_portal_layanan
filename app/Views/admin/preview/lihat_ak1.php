<?= $this->include('admin/template/header') ?>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <div class="container">
        <div class="container_lihat">
            <div class="contain">
                <div class="side_left">
                    <div class="border_card">
                        <div class="row_side_left">
                            <img src="<?= base_url()?>assets/file/ak1/<?= $data['pass_foto']?>" alt="" srcset="">
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                NIK
                            </div>
                            <div class="text">
                                <?= $data['nik'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Nama Lengkap
                            </div>
                            <div class="text">
                                <?= $data['nama'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Tanggal Lahir
                            </div>
                            <div class="text">
                                <?= $data['tanggal_lahir'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Jenis Kelamin
                            </div>
                            <div class="text">
                                <?= $data['jenis_kelamin'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Status
                            </div>
                            <div class="text">
                                <?= $data['status'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Alamat
                            </div>
                            <div class="text">
                                <?= $data['alamat'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Agama
                            </div>
                            <div class="text">
                                <?= $data['agama'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Ijazah
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="lihat_ijazah()">Lihat</button>
                            </div>
                        </div>
                        <div class="tombol">
                            <button class="btn btn-sm btn-primary" onclick="acc(<?= $data['id']?>)">ACC</button>
                            <button class="btn btn-sm btn-danger" onclick="tolak(<?= $data['id']?>)">Tolak</button>
                        </div>
                    </div>
                </div>
                <div class="side_right">
                    <embed id="foto_ijazah" hidden src="<?= base_url()?>assets/file/ak1/<?= $data['foto_ijazah']?>" type="application/pdf" width="100%" height="445px" />
                    <!-- <canvas id="pdf-viewer"></canvas> -->
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('admin/modals/modals_tolak') ?>
    <script>
        function lihat_ijazah(){
            $('#foto_ijazah').removeAttr('hidden');
        }
        function acc(id){
            $.ajax({
                url: "<?= base_url()?>crud/acc_ak1",
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
                            window.location.href = "<?= base_url()?>admin/ak1";
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
                url: 'http://localhost:8080/crud/tolak_ak1',
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
                                window.location.href = "<?= base_url()?>admin/ak1";
                            }
                        })
                    }
                }
            });
        })
    </script>
<?= $this->include('admin/template/footer') ?>