<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/login.css') ?>">
</head>
<body>
    <div class="wrapper">
        <div class="section">
            <div class="side_left">
                <img src="<?= base_url()?>img/logo_pekalongan.png" alt="" srcset="">
            </div>
            <div class="side_right">
                <div class="judul_login" id="judul">
                    Login Portal Layanan Dinperinaker
                </div>
                <div class="form_login">
                    <form method="post" id="f_login">
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label">username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn btn-primary">Login</button>
                        </div>
                        <div class="keterangan">
                            *Bagi yang belum mempunyai akun silahkan klik <div class="disini" onclick="disini_register()">Disini</div>
                        </div>
                    </form>
                </div>
                <div class="form_register" hidden>
                    <form method="post" id="f_register">
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_register" name="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" id="email_register">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label">username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" id="username_register">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label">password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="password" id="password_register">
                            </div>
                        </div>
                        <div class="button">
                            <div class="keterangan">
                                <div class="text-login">
                                    *sudah punya akun klik 
                                </div>
                                <div class="disini" onclick="disini_login()"> 
                                    Disini
                                </div>
                            </div>
                            <div class="tombol">
                                <button class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <img src="<?= base_url()?>img/tulisan_pekalongan.png" alt="" srcset="">
    </div>
    <script>
        function disini_register(){
            document.getElementById('judul').innerHTML = "Register Portal Layanan Dinperinaker";
            document.getElementsByClassName('form_login')[0].hidden = true;
            document.getElementsByClassName('form_register')[0].hidden = false;
            document.getElementById('nama_register').value = "";
            document.getElementById('email_register').value = "";
            document.getElementById('username_register').value = "";
            document.getElementById('password_register').value = "";
        }
        function disini_login(){
            document.getElementById('judul').innerHTML = "Login Portal Layanan Dinperinaker";
            document.getElementsByClassName('form_login')[0].hidden = false;
            document.getElementsByClassName('form_register')[0].hidden = true;
            document.getElementById('username').value = "";
            document.getElementById('password').value = "";
        }
    </script>
</body>
</html>