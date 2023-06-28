<div class="table table-responsive" id="tabel_his_bkk" hidden>
    <div class="judul_t_pengajuan" style="margin-top: 3%; margin-bottom: 2%; text-align: center;">
        <h3>Daftar Pelayanan BKK</h3>
    </div>
    <table class="table table-striped" id="tb_his_bkk">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama BKK</th>
                <th>Tanggal Pengajuan</th>
                <th>Status Pengajuan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($bkk as $his_bkk):?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= $his_bkk['nama_bkk'] ?></td>
                <td><?= $his_bkk['tanggal_pengajuan'] ?></td>
                <td><?= $his_bkk['status_pengajuan'] ?></td>
                <?php if($his_bkk['status_pengajuan'] == "ACC"):?>
                    <td style="text-align: center;">    
                        <a href="<?= base_url()?>cetak/cetak_bkk/<?= $his_bkk['id'] ?>">
                            <button class="btn btn-sm btn-success">Cetak</button>
                        </a>
                    </td>
                <?php elseif($his_bkk['status_pengajuan'] == "menunggu"):?>
                <td>
                    
                </td>
                <?php else:?>
                    <td style="text-align: center;">
                        <button class="btn btn-sm btn-danger">Lihat Pesan</button>
                    </td>
                <?php endif?>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>