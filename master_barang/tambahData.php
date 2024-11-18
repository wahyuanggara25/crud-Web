<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
    <h2 style="text-align: center;">Tambah Data Barang</h2>

    <div class="container col-md-8">
    <form action="prosesTambah.php" method="POST">
        <div class="kode_barang">
          <label>Kode Barang</label>
          <input type="text" class="form-control" name="kode_barang" required="required" autocomplete="off">
        </div>
        <div class="nama_barang mt-1">
          <label>Nama Barang</label>
          <input type="text" class="form-control" name="nama_barang" required="required" autocomplete="off">
        </div>
        <div class="harga mt-1">
          <label>Harga</label>
          <input type="text" class="form-control" name="harga" required="required" autocomplete="off">
        </div>
        <br>
        <button type="submit" class="btn btn-primary bg-dark text-white">Tambah Data</button>
    </div>
    </form>

</body>
</html>