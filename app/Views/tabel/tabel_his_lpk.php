<div class="table table-responsive" id="tabel_his_lpk" hidden>
    <div class="judul_t_pengajuan" style="margin-top: 3%; margin-bottom: 2%; text-align: center;">
        <h3>Daftar Pelayanan LPK</h3>
    </div>
    <table class="table table-striped" id="tb_his_lpk" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lembaga</th>
                <th>Penanggung Jawab</th>
                <th>Tanggal Pengajuan</th>
                <th>Status Pengajuan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $n=1; foreach($lpk as $his_lpk):?>
            <tr>
                <td><?= $n++?></td>
                <td><?= $his_lpk['nama_lembaga'] ?></td>
                <td><?= $his_lpk['penanggung_jawab'] ?></td>
                <td><?= $his_lpk['tanggal_pengajuan'] ?></td>
                <td><?= $his_lpk['status_pengajuan'] ?></td>
                <?php if($his_lpk['status_pengajuan'] == "ACC"):?>
                    <td style="text-align: center;">    
                        <a href="<?= base_url()?>cetak/cetak_lpk/<?= $his_lpk['id']?>">
                            <button class="btn btn-sm btn-success">Cetak</button>
                        </a>
                    </td>
                <?php elseif($his_lpk['status_pengajuan'] == "menunggu"):?>
                    <td>
                        
                    </td>
                <?php else:?>
                    <td style="text-align: center;">
                        <button class="btn btn-sm btn-danger">Lihat Pesan</button>
                    </td>
                <?php endif?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>