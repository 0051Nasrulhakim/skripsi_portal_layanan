<?= $this->include('admin/template/header') ?>
    
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</div>
<?php
    // ambil bulan sekarang
    if($bulan == null){
        $bulan = date('m');
    }

?>

<div class="container-fluid px-4 mb-4">
    <div class="filter" style="display: flex;">
        <form action="<?= base_url()?>admin/index" method="post" style="display: flex;">
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

<div class="container">
    <div class="table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td style="width: 5%;">no</td>
                    <td>Layanan</td>
                    <td>Jumlah Acc</td>
                    <td>Jumlah Tertolak</td>
                    <td>Jumlah Menunggu</td>
                    <!-- <td>Action</td> -->
                </tr>
            </thead>
            
            <tr>
                <td>1</td>
                <td>AK-1</td>
                <td><?= $ak1_acc;?></td>
                <td><?= $ak1_tolak?></td>
                <td><?= $ak1_menunggu;?></td>
                <!-- <td>sa</td> -->
            </tr>
            <tr>
                <td>2</td>
                <td>BKK</td>
                <td><?= $bkk_acc;?></td>
                <td><?= $bkk_tolak?></td>
                <td><?= $bkk_menunggu;?></td>
                <!-- <td>sa</td> -->
            </tr>
            <tr>
                <td>3</td>
                <td>CPMI</td>
                <td><?= $cpmi_acc;?></td>
                <td><?= $cpmi_tolak?></td>
                <td><?= $cpmi_menunggu;?></td>
                <!-- <td>sa</td> -->
            </tr>
            <tr>
                <td>4</td>
                <td>LPK</td>
                <td><?= $lpk_acc;?></td>
                <td><?= $lpk_tolak?></td>
                <td><?= $lpk_menunggu;?></td>
                <!-- <td>sa</td> -->
            </tr>
            <tr>
                <td>5</td>
                <td>PKWT</td>
                <td><?= $pkwt_acc;?></td>
                <td><?= $pkwt_tolak?></td>
                <td><?= $pkwt_menunggu;?></td>
                <!-- <td>sa</td> -->
            </tr>
        </table>
    </div>
</div>
            
<?= $this->include('admin/template/footer') ?>