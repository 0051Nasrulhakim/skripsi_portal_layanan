<div class="table table-responsive" id="tabel_his_cpmi" hidden>
    <div class="judul_t_pengajuan" style="margin-top: 3%; margin-bottom: 2%; text-align: center;">
        <h3>Daftar Pengajuan CPMI</h3>
    </div>
    <table class="table table-striped" id="tb_his_cpmi">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Perusahaan</th>
                <th>Tanggal Pengajuan</th>
                <th>Status Pengajuan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($cpmi as $his_cpmi):?>
            <tr>
                <td><?= $$i++ ?></td>
                <td><?= $his_cpmi['nama'] ?></td>
                <td><?= $his_cpmi['nama_perusahaan'] ?></td>
                <td><?= $his_cpmi['tanggal_pengajuan'] ?></td>
                <td><?= $his_cpmi['status_pengajuan'] ?></td>
                <?php if($his_cpmi['status_pengajuan'] == "ACC"):?>
                    <td style="text-align: center;">    
                        <button class="btn btn-sm btn-success">Cetak</button>
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