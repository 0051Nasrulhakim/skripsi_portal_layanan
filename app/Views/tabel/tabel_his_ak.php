<div class="table table-responsive" id="tabel_his_ak">
    <div class="judul_t_pengajuan" style="margin-top: 3%; margin-bottom: 2%; text-align: center;">
        <h3>Daftar Pelayanan AK-1</h3>
    </div>
    <table class="table table-striped" id="tb_histori_pengajuan">
        <thead>
            <tr>
                <th >No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th style="width: 10%; text-align: center;">Status Pengajuan</th>
                <th style=" text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($ak as $histori_ak):?>
            <tr>
                <td style="width: 10%; text-align: center;"><?= $no++?></td>
                <td><?= $histori_ak['nama'] ?></td>
                <td style="width: 28%;"><?= $histori_ak['tanggal_pengajuan'] ?></td>
                <td style="width: 10%; text-align: center;"><?= $histori_ak['status_pengajuan']; ?> </td>
                <!-- jika status acc -->
                <?php if($histori_ak['status_pengajuan'] == "ACC"):?>
                    <td style="text-align: center;">    
                        <a href="<?= base_url()?>cetak/cetak_ak1/<?= $histori_ak['id'] ?>">
                            <button class="btn btn-sm btn-success">Cetak</button>
                        </a>
                    </td>
                <?php elseif($histori_ak['status_pengajuan'] == "menunggu"):?>
                    <td>
                        
                    </td>
                <?php else:?>
                    <td style="text-align: center;">
                        <button class="btn btn-sm btn-danger" onclick="lihat_balasan_ak1(<?= $histori_ak['id'] ?>)">Lihat Pesan</button>
                    </td>
                <?php endif?>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>