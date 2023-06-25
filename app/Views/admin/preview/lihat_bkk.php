<?= $this->include('admin/template/header') ?>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <div class="container">
        <div class="container_lihat">
            <div class="contain">
                <div class="side_left">
                    <div class="border_card">
                        <div class="row_side_left">
                            <div class="judul">
                                Nama BKK
                            </div>
                            <div class="text">
                                <?= $data['nama_bkk'] ?>
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
                                Alamat BKK
                            </div>
                            <div class="text">
                                <?= $data['alamat_bkk'] ?>
                            </div>
                        </div>

                        <div class="row_side_left">
                            <div class="judul">
                                Struktur BKK
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="lihat_struktur()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Akta Pendirian
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="lihat_akta_pendirian()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Rencana BKK
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="lihat_rencana_kerja()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Dokumen Pendirian
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="lihat_dokumen_pendirian()">Lihat</button>
                            </div>
                        </div>
                        <!-- <div class="row_side_left">
                            <div class="judul">
                                Pass Foto Kepsek
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="lihat_ijazah" onclick="lihat_ijazah()">Lihat</button>
                            </div>
                        </div> -->
                        <div class="tombol">
                            <button class="btn btn-sm btn-primary" onclick="acc(<?= $data['id']?>)">ACC</button>
                            <button class="btn btn-sm btn-danger" onclick="tolak(<?= $data['id']?>)">Tolak</button>
                        </div>
                    </div>
                </div>
                <div class="side_right">
                    <embed id="struktur_bkk" hidden src="<?= base_url()?>assets/file/bkk/<?= $data['struktur_bkk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="akta_pendirian" hidden src="<?= base_url()?>assets/file/bkk/<?= $data['akta_pendirian_bkk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="rencana_kerja" hidden src="<?= base_url()?>assets/file/bkk/<?= $data['rencana_kerja_bkk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="dokumen_pendirian" hidden src="<?= base_url()?>assets/file/bkk/<?= $data['dokumen_pendirian_bkk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_kepsek" hidden src="<?= base_url()?>assets/file/bkk/<?= $data['pass_foto_kepsek']?>" type="application/pdf" width="100%" height="445px" />

                </div>
            </div>
        </div>
    </div>
    <?= $this->include('admin/modals/modals_tolak') ?>
    <script>
        function lihat_struktur(){
            $('#struktur_bkk').removeAttr('hidden');
            $('#akta_pendirian').attr('hidden', '');
            $('#rencana_kerja').attr('hidden', '');
            $('#dokumen_pendirian').attr('hidden', '');
            $('#foto_kepsek').attr('hidden', '');
        }
        function lihat_akta_pendirian(){
            $('#struktur_bkk').attr('hidden', '');
            $('#akta_pendirian').removeAttr('hidden');
            $('#rencana_kerja').attr('hidden', '');
            $('#dokumen_pendirian').attr('hidden', '');
            $('#foto_kepsek').attr('hidden', '');
        }
        function lihat_rencana_kerja(){
            $('#struktur_bkk').attr('hidden', '');
            $('#akta_pendirian').attr('hidden', '');
            $('#rencana_kerja').removeAttr('hidden');
            $('#dokumen_pendirian').attr('hidden', '');
            $('#foto_kepsek').attr('hidden', '');
        }
        function lihat_dokumen_pendirian(){
            $('#struktur_bkk').attr('hidden', '');
            $('#akta_pendirian').attr('hidden', '');
            $('#rencana_kerja').attr('hidden', '');
            $('#dokumen_pendirian').removeAttr('hidden');
            $('#foto_kepsek').attr('hidden', '');
        }
        function acc(id){
            $.ajax({
                url: "<?= base_url()?>crud/acc_bkk",
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
                            window.location.href = "<?= base_url()?>admin/bkk";
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
                url: 'http://localhost:8080/crud/tolak_bkk',
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
                                window.location.href = "<?= base_url()?>admin/bkk";
                            }
                        })
                    }
                }
            });
        })
    </script>
<?= $this->include('admin/template/footer') ?>