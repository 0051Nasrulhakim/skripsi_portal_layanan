<?= $this->include('admin/template/header') ?>
    
<div class="container-fluid px-4">
    <h1 class="mt-4" style="text-align: center; margin-bottom: 2%;"><?= $title ?></h1>
    <!-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> -->

    <?php
        // ambil bulan sekarang
        if($bulan == null){
            $bulan = date('m');
        }

    ?>

    <div class="container-fluid px-4 mb-4">
        <div class="filter" style="display: flex;">
            <form action="<?= base_url()?>admin/pengaduan" method="post" style="display: flex;">
                <div class="field" style="margin-left: 2%;">
                    <select name="bulan" id="bulan" class="form-select">
                        <option value="1" <?php if($bulan == '1'){echo 'selected';}?>>Januari</option>
                        <option value="2" <?php if($bulan == '2'){echo 'selected';}?>>Februari</option>
                        <option value="3" <?php if($bulan == '3'){echo 'selected';}?>>Maret</option>
                        <option value="4" <?php if($bulan == '4'){echo 'selected';}?>>April</option>
                        <option value="5" <?php if($bulan == '5'){echo 'selected';}?>>Mei</option>
                        <option value="6" <?php if($bulan == '6'){echo 'selected';}?>>Juni</option>
                        <option value="7" <?php if($bulan == '7'){echo 'selected';}?>>Juli</option>
                        <option value="8" <?php if($bulan == '8'){echo 'selected';}?>>Agustus</option>
                        <option value="9" <?php if($bulan == '9'){echo 'selected';}?>>September</option>
                        <option value="10" <?php if($bulan == '10'){echo 'selected';}?>>Oktober</option>
                        <option value="11" <?php if($bulan == '11'){echo 'selected';}?>>November</option>
                        <option value="12" <?php if($bulan == '12'){echo 'selected';}?>>Desember</option>
                    </select>
                </div>
                <button class="btn btn-sm btn-primary" style="margin-left: 2%;" type="submit">
                    Tampilkan
                </button>
            </form>

        </div>
    </div>

    <div class="table table-responsive">
        <table class="table table-striped" id="tabel_lpk">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Pengaduan</th>
                    <th>Bukti</th>
                    <th>balasan</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($data as $pengaduan):?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $pengaduan['nama_lengkap']?></td>
                    <td><?= $pengaduan['tanggal_pengaduan']?></td> 
                    <td><?= $pengaduan['isi_pengaduan']?></td> 
                    <td>
                        <?php if($pengaduan['bukti'] != '' ){?>
                            <!-- tombol lihat -->
                            <button class="btn btn-sm btn-primary" onclick="preview('<?= $pengaduan['bukti']?>')">
                                lihat
                            </button>
                        <?php }else{?>
                        <?php echo 'tidak ada bukti';}?>
                    </td>
                    <td><?= $pengaduan['balasan']?></td>
                    <td style="text-align: center;">
                        <?php if($pengaduan['balasan'] == ""):?>
                        <button class="btn btn-sm btn-success" onclick="balas(
                            '<?= $pengaduan['id']?>',
                            '<?= $pengaduan['nama_lengkap']?>'
                        )">Balas</button>
                        <?php else:?>
                        <button class="btn btn-sm btn-warning" onclick="ubah_balas(
                            '<?= $pengaduan['id']?>',
                            '<?= $pengaduan['nama_lengkap']?>',
                            '<?= $pengaduan['balasan']?>'
                        )">Ubah Balasan</button>
                        <?php endif;?>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->include('admin/modals/modals_balas') ?>
<?= $this->include('admin/modals/modals_preview') ?>

<script>
    $(document).ready(function(){
        $('#tabel_lpk').DataTable();
    });
    function preview(nama_file){
        $('#nama_file').val(nama_file);
        // abil nama extensi
        console.log(nama_file);
        var ext = nama_file.split('.').pop();
        // jika extensi jpg atau png
        if(ext == 'jpg' || ext == 'png'){
            $('#preview_img').attr('src', 'http://localhost:8080/assets/file/bukti/'+nama_file);
            $('#preview_img').show();
            $('#preview_video').hide();
        }else{
            $('#preview_video').attr('src', 'http://localhost:8080/assets/file/bukti/'+nama_file);
            $('#preview_video').show();
            $('#preview_img').hide();
        }
        $('#modal_preview').modal('show');
        // jika modal di tutup
        $('#modal_preview').on('hidden.bs.modal', function(){
            $('#preview_img').attr('src', '');
            $('#preview_video').attr('src', '');
        });
    }
    function balas(id, nama){
        // kirim id modals
        // alert(nama);

        $('#id').val(id);
        $('#nama').val(nama);
        $('#modal_balas').modal('show');
    }
    function ubah_balas(id, nama, pesan){
        // kirim id modals
        // alert(nama);
        $('#id_balasan').val(id);
        $('#nama_balasan').val(nama);
        $('#pesan_balasan').val(pesan);
        $('#modal_ubah_balas').modal('show');
    }
    $('#f_balas').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'http://localhost:8080/Crud/balas',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                console.log(data);
                if(data.status == "success"){
                    $('#modal_balas').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Membalas',
                        showConfirmButton: false,
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }
            }
        });
    });
    $('#f_ubah_balas').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'http://localhost:8080/Crud/ubah_balas',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                console.log(data);
                if(data.status == "success"){
                    $('#modal_balas').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Mengubah Balasan',
                        showConfirmButton: false,
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }
            }
        });
    });
</script>
            
<?= $this->include('admin/template/footer') ?>