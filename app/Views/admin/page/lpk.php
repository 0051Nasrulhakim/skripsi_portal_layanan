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
                    <th>Nama Lembaga</th>
                    <th>Penanggung Jawab</th>
                    <th>Alamat Lembaga</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status Pengajuan</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($data as $lpk):?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $lpk['nama_lembaga']?></td>
                    <td><?= $lpk['penanggung_jawab']?></td> 
                    <td><?= $lpk['alamat_lembaga']?></td> 
                    <td><?= $lpk['tanggal_pengajuan']?></td>
                    <td><?= $lpk['status_pengajuan']?></td>
                    <td style="text-align: center;">
                        <a href="<?= base_url()?>admin/lihat_lpk/<?= $lpk['id']?>"><button class="btn btn-sm btn-info">Lihat</button></a>
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
        $('#tabel_lpk').DataTable();
    });
</script>
            
<?= $this->include('admin/template/footer') ?>