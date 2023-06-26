<?= $this->include('admin/template/header') ?>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <div class="container">
        <div class="container_lihat">
            <div class="contain">
                <div class="side_left">
                    <div class="border_card">
                        <div class="row_side_left">
                            <img src="<?= base_url()?>assets/file/pasport/<?= $data['pas_foto']?>" alt="" srcset="">
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
                                Alamat
                            </div>
                            <div class="text">
                                <?= $data['alamat'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Nama Perusahaan
                            </div>
                            <div class="text">
                                <?= $data['nama_perusahaan'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Jabatan
                            </div>
                            <div class="text">
                                <?= $data['jabatan'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Negara Tujuan
                            </div>
                            <div class="text">
                                <?= $data['negara_tujuan'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Tanggal Berangkat
                            </div>
                            <div class="text">
                                <?= $data['tanggal_berangkat'] ?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan KTP
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_ktp" onclick="scan_ktp()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan KK
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_kk" onclick="scan_kk()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Akta Kelahiran
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_akta" onclick="scan_akta_kelahiran()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Surat Nikah / Cerai
                            </div>
                            <div class="text">
                               <?php if($data['foto_surat_nikah'] != '') :?>
                                    <button class="btn btn-sm btn-success" id="scan_surat_nikah" onclick="scan_surat_nikah()">Lihat</button>
                                    <?php else:?>
                                    (Tidak melampirkan)
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Ijazah Terakhir
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_izah" onclick="scan_ijazah_terakhir()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Perjanjian Kerja
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_perjanjian_kerja" onclick="scan_surat_perjanjian()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Medical Check-up
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_check_up" onclick="scan_medical_check_up()">Lihat</button>
                            </div>
                        </div>
                        <div class="row_side_left">
                            <div class="judul">
                                Scan Ak-1
                            </div>
                            <div class="text">
                                <button class="btn btn-sm btn-success" id="scan_ak1" onclick="scan_ak1()">Lihat</button>
                            </div>
                        </div>
                        <div class="tombol">
                            <button class="btn btn-sm btn-primary" onclick="acc(<?= $data['id']?>)">ACC</button>
                            <button class="btn btn-sm btn-danger" onclick="tolak(<?= $data['id']?>)">Tolak</button>
                        </div>
                    </div>
                </div>
                <div class="side_right">
                    <embed id="foto_ktp" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_ktp']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_kk" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_kk']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_akta_kelahiran" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_akta_Kelahiran']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_surat_nikah" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_surat_nikah']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_ijazah_terakhir" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_ijazah_terakhir']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_surat_perjanjian" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_surat_perjanjian']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_medical_check_up" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_medical_check_up']?>" type="application/pdf" width="100%" height="445px" />
                    <embed id="foto_ak1" hidden src="<?= base_url()?>assets/file/pasport/<?= $data['foto_ak1']?>" type="application/pdf" width="100%" height="445px" />
                    <!-- <canvas id="pdf-viewer"></canvas> -->
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('admin/modals/modals_tolak') ?>
    <script>
        function scan_ktp(){
            $('#foto_ktp').removeAttr('hidden');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_kk(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').removeAttr('hidden');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_akta_kelahiran(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').removeAttr('hidden');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_surat_nikah(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').removeAttr('hidden');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_ijazah_terakhir(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').removeAttr('hidden');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_surat_perjanjian(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').removeAttr('hidden');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_medical_check_up(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').removeAttr('hidden');
            $('#foto_ak1').attr('hidden', '');
        }
        function scan_ak1(){
            $('#foto_ktp').attr('hidden', '');
            $('#foto_kk').attr('hidden', '');
            $('#foto_akta_kelahiran').attr('hidden', '');
            $('#foto_surat_nikah').attr('hidden', '');
            $('#foto_ijazah_terakhir').attr('hidden', '');
            $('#foto_surat_perjanjian').attr('hidden', '');
            $('#foto_medical_check_up').attr('hidden', '');
            $('#foto_ak1').removeAttr('hidden');
        }
        function acc(id){
            $.ajax({
                url: "<?= base_url()?>crud/acc_cpmi",
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
                            window.location.href = "<?= base_url()?>admin/cpmi";
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
                url: 'http://localhost:8080/crud/tolak_cpmi',
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
                                window.location.href = "<?= base_url()?>admin/cpmi";
                            }
                        })
                    }
                }
            });
        })
    </script>
<?= $this->include('admin/template/footer') ?>