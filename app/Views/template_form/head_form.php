<?= $this->include('template/publik_header') ?>
<div class="wrapper">
    <div class="section_form">
        <div class="judul">
            <h2><?= $title?></h2>
            <!-- <hr> -->
        </div>
        <div class="box_alert" style="width: 93%; margin-left: 3%;">
            <div class="alert alert-danger" role="alert" id="alert" hidden>
                
            </div>
        </div>
        <div class="container">
            <div class="side_left">
                <div class="f_open">
                    <form enctype="multipart/form-data" id="form_open">
                    <div class="bab">A. Data Diri</div>
                    <div class="contain_form">