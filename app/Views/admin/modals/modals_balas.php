<div class="modal fade" id="modal_balas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Balas Pesan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="f_balas">
                <div class="modal-body">
                
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" disabled>
                            <input type="text" class="form-control" id="id" name="id" hidden>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">Isi Balasan</label>
                        <div class="col-sm-9">
                            <textarea name="pesan" id="pesan" cols="43" rows="10"></textarea>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_ubah_balas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Balasan Pesan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="f_ubah_balas">
                <div class="modal-body">
                
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_balasan" name="nama" disabled>
                            <input type="text" class="form-control" id="id_balasan" name="id" hidden>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">Isi Balasan</label>
                        <div class="col-sm-9">
                            <textarea name="pesan" id="pesan_balasan" cols="43" rows="10"></textarea>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>