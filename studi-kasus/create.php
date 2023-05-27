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
                <form id="form-produk" action="process.php" method="post">
                    <table cellpadding="10" cellspacing="0" class="table table=striped">
                        <tr>
                            <td>Select Image File:</td>
                            <td><input type="file" name="foto" action="index.php" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" id="input-nama" name="nama" class="form-control">
                                <p id="text-error-name"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" id="input-harga" name="harga" class="form-control">
                                <p id="text-error-harga"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="number" id="input-stok" name="stok" class="form-control">
                                <p id="text-error-stok"></p>
                            </td>
                        </tr>
                        <tr>
                        <td>ID Kategori</td>
                            <td>
                                <select name="kategori_id">
                                    <option value="A">High Heels</option>
                                    <option value="B">Sneakers</option>
                                    <option value="C">Sandals</option>
                                    <option value="D">Flat Shoes</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>ID Supplier</td>
                            <td>
                                <select name="supplier_id">
                                    <option value="A">Sisi</option>
                                    <option value="B">Tata</option>
                                    <option value="C">Sinta</option>
                                    <option value="D">Jojo</option>
                                </select>
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
        $('#form-produk').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-harga').val().length == 0) {
        $('#input-harga').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-harga').text('Silahkan isi harga terlebih dahulu');
    } else {
        $('#form-produk').submit();
    }
});

$('#my-button').click(function() {
    if ($('#input-stok').val().length == 0) {
        $('#input-stok').css({ "backgroundColor": "#ff00002b"});
        $('#text-error-stok').text('Silahkan isi stok terlebih dahulu');
    } else {
        $('#form-produk').submit();
    }
});

</script>