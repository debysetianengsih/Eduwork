<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <title>Create</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="form-anggota" action="process.php" method="post">
                    <table cellpadding="10" cellspacing="0" class="table table=striped">
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" id="input-nama" name="nama" class="form-control">
                                <p id="text-error-name"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" id="input-username" name="username" class="form-control">
                                <p id="text-error-username"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="input-password" name="password" class="form-control">
                                <p id="text-error-password"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <select name="sex" id="sex">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Telpon</td>
                            <td><input type="number" id="input-telp" name="telp" class="form-control">
                                <p id="text-error-telp"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" id="input-alamat" name="alamat" class="form-control">
                                <p id="text-error-alamat"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" id="input-email" name="email" class="form-control">
                                <p id="text-error-email"></p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button id="my-button" type="button" class="btn btn-primary">Save</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
$('#my-button').click(function() {
    if ($('#input-nama').val().length == 0) {
        $('#input-nama').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-name').text('Silahkan isi nama terlebih dahulu');
    } else {
        $('#form-anggota').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-username').val().length == 0) {
        $('#input-username').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-username').text('Silahkan isi username terlebih dahulu');
    } else {
        $('#form-anggota').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-password').val().length == 0) {
        $('#input-password').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-password').text('Silahkan isi password terlebih dahulu');
    } else {
        $('#form-anggota').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-telp').val().length == 0) {
        $('#input-telp').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-telp').text('Silahkan isi Telpon terlebih dahulu');
    } else {
        $('#form-anggota').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-alamat').val().length == 0) {
        $('#input-alamat').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-alamat').text('Silahkan isi alamat terlebih dahulu');
    } else {
        $('#form-anggota').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-email').val().length == 0) {
        $('#input-email').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-email').text('Silahkan isi email terlebih dahulu');
    } else {
        $('#form-anggota').submit();
    }
});
</script>