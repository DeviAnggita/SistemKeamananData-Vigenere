<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Enkripsi</title>
</head>

<body>
    <div class="container">
        <h1>Vigenere - Enkripsi</h1>
        <hr>
        <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Masukkan Plain Text :</label>
            <textarea class="form-control" name="plain" id="textarea-a"></textarea>
            <label for="basic">Masukkan Kunci :</label>
            <textarea class="form-control" name="kunci" id="textarea-a"></textarea><br>
            <input type="submit" class="btn btn-success" value=" Encrypt" data-theme="a">
            <input type="reset" class="btn btn-primary" value=" Hapus" data-theme="a">
        </form>
    </div>
</body>

</html>