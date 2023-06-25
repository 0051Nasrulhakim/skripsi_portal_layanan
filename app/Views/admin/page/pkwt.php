<?= $this->include('admin/template/header') ?>
    
<div class="container-fluid px-4">
    <h1 class="mt-4" style="text-align: center; margin-bottom: 2%;"><?= $title ?></h1>
    <!-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> -->
    <div class="table table-responsive">
        <table class="table table-striped" id="tabel_pkwt">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Direktur</th>
                    <th>Jumlah Pkwt</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status Pengajuan</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($data as $pkwt):?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $pkwt['nama_perusahaan_pkwt']?></td>
                    <td><?= $pkwt['direktur_pkwt']?></td> 
                    <td><?= $pkwt['jumlah_pekerja_pkwt']?></td> 
                    <td><?= $pkwt['tanggal_pengajuan']?></td>
                    <td><?= $pkwt['status_pengajuan']?></td>
                    <td style="text-align: center;">
                        <a href="<?= base_url()?>admin/lihat_pkwt/<?= $pkwt['id']?>"><button class="btn btn-sm btn-info">Lihat</button></a>
                        <button class="btn btn-sm btn-warning">Ubah Status</button>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#tabel_pkwt').DataTable();
    });
</script>
            
<?= $this->include('admin/template/footer') ?>