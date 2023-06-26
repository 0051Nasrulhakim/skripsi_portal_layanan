<?= $this->include('admin/template/header') ?>
    
<div class="container-fluid px-4">
    <h1 class="mt-4" style="text-align: center; margin-bottom: 2%;"><?= $title ?></h1>
    <!-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> -->
    <div class="table table-responsive">
        <table class="table table-striped" id="tabel_lpk">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Isi Pengaduan</th>
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

<script>
    $(document).ready(function(){
        $('#tabel_lpk').DataTable();
    });
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