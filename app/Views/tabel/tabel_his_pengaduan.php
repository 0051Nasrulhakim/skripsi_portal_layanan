<div class="table table-responsive">
    <table class="table table-striped" id="tb_histori_pengaduan">
        <thead>
            <tr>
                <th>No</th>
                <th>pengaduan</th>
                <th>tanggal</th>
                <th>Balasan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($pengaduan as $v_pengaduan):?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $v_pengaduan['isi_pengaduan'] ?></td>
                <td><?= $v_pengaduan['tanggal_pengaduan'] ?></td>
                <td>
                    <button class="btn btn-sm btn-success" onclick="lihat_balasan(<?= $v_pengaduan['id'] ?>)">Lihat Balasan</button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>