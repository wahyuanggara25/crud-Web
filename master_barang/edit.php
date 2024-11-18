<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
    <h2 style="text-align: center;">Edit Data</h2>

    <div class="container col-md-8">
        <?php
            include 'koneksi.php';

            $kode_barang = @$_GET['kode_barang'];

            //query memanggil atau menampilkan data dari database mysql berdasarkan kodeBuku
            $query  = "SELECT * FROM master_barang WHERE kode_barang = '$kode_barang'";
            $result = mysqli_query($conn, $query);

            while ($data = mysqli_fetch_assoc($result))
            {
        ?>

        <!-- form edit data -->
        <form action="prosesEdit.php" method="POST">
        <div class="kode_barang">
            <label>Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang" required="required" autocomplete="off" value="<?= $data['kode_barang'];?>" disabled>
        </div>
        <div class="nama_barang mt-1">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" required="required" autocomplete="off" value="<?= $data['nama_barang'];?>">
        </div>
        <div class="harga mt-1">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" required="required" autocomplete="off" value="<?= $data['harga'];?>">
        </div>
        <?php
            }
        ?>
        <br>
        <button type="submit" class="btn btn-primary bg-dark text-white">Edit Data</button>
        </div>
    </div>
    </form>
</body>
</html>