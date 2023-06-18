<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DINPERINAKER KOTA PEKALONGAN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->
        
        <!-- data tables -->
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        
        <!-- get css from publik -->
        <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
        <!-- sweeet alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    </head>
    <body>
        <div class="navbar">
            <div class="s_navbar_1">
                <img src="<?= base_url()?>img/header.png" alt="">
            </div>
            <div class="s_navbar_2">
                <!-- tombol login -->
                <div class="login" style="margin-right: 6%;">
                    <a href="<?= base_url('login')?>" class="btn">Masuk</a>
                </div>
                <div class="login" >
                    <a href="<?= base_url('regis')?>" class="btn btn-daftar">Daftar</a>
                </div>
                
                <!-- buat menu dropdown -->
                <!-- <div class="layanan">
                    <div class="dashboard">
                        dashboard
                    </div>

                </div> -->
            </div>
        </div>
        