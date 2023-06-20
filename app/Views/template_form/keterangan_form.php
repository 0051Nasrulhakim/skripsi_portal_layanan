        </div>
    </div>
    <div class="tombol_form">
        <button class="btn btn-danger"> Kembali</button>
        <button type="submit" class="btn btn-primary"> Ajukan</button>
    </div>
</div>

</form>
<script>
    $('#form_open').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        // serialize() -> untuk mengambil semua data yang ada di dalam form
        // var formData = $('#form_open').serialize();
        // console.log(formData);
        $.ajax({
            url: 'http://localhost:8080/crud/pengajuan_pelayanan',
            type: 'POST',
            // data: $('#update_form').serialize(),
            processData: false,
            contentType: false,
            data: formData,
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    })
</script>

<div class="side_right">
    <div class="judul">
        Insturksi Pengisian Formulir
    </div>
    <div class="contain">
        <div class="list">