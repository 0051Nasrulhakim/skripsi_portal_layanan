<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form enctype="multipart/form-data" id="form_open">
        <input type="file" name="file[]" multiple>
        <button type="submit">unggah</button>
    </form>
    <script>
    $('#form_open').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: 'http://localhost:8080/crud/testing',
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
</body>
</html>