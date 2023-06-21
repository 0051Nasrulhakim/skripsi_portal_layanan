        </div>
    </div>
    <div class="tombol_form">
        <button class="btn btn-danger"><a href="<?= base_url()?>home">Kembali</a></button>
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
                if(response.status == 'success') {
                    var alert = $('#alert');
                    alert.attr('hidden', true);
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Pengajuan Berhasil',
                        showConfirmButton: true,
                        // redirect ke halaman dashboard
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "<?= base_url()?>home";
                        }
                    })
                } else {
                    var alert = $('#alert');
                    alert.attr('hidden', false);
                    var errors = response.errors
                    // foreach
                    alert.html('');
                    $.each(errors, function(key, value) {
                        alert.append('<li>' + value + '</li>');
                    });
                }
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