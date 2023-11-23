<div class="table table-responsive" id="tabel_his_pkwt" hidden>
    <div class="judul_t_pengajuan" style="margin-top: 3%; margin-bottom: 2%; text-align: center;">
        <h3>Daftar Pelayanan PKWT</h3>
    </div>
    <table class="table table-striped" id="tb_his_pkwt">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Tanggal Pengajuan</th>
                <th>Status Pengajuan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($pkwt as $his_pkwt):?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $his_pkwt['nama_perusahaan_pkwt'] ?></td>
                <td><?= $his_pkwt['tanggal_pengajuan'] ?></td>
                <td><?= $his_pkwt['status_pengajuan'] ?></td>
                <?php if($his_pkwt['status_pengajuan'] == "ACC"):?>
                    <td style="text-align: center;">
                        <a href="<?= base_url()?>cetak/cetak_pkwt/<?= $his_pkwt['id']?>">
                            <button class="btn btn-sm btn-success">Cetak</button>
                        </a>
                    </td>
                <?php elseif($his_pkwt['status_pengajuan'] == "menunggu"):?>
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