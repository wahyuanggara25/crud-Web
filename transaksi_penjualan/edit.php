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

            $no_transaksi = @$_GET['no_transaksi'];

            //query memanggil atau menampilkan data dari database mysql berdasarkan kodeBuku
            $query  = "SELECT * FROM transaksi_penjualan WHERE no_transaksi = '$no_transaksi'";
            $result = mysqli_query($conn, $query);

            while ($data = mysqli_fetch_assoc($result))
            {
        ?>

        <!-- form edit data -->
        <form action="prosesEdit.php" method="POST">
        <div class="kode_barang">
            <label>Kode Barang</label>
        </div>
        <select class="form-select form-select-sm-5" aria-label=".form-select-lg example" name="kode_barang" required="required" value="<?= $data['kode_barang'];?>">
            <option value="">BR001</option>
            <?php
            $sql_barang = mysqli_query($conn, "SELECT * FROM master_barang") or die
                (mysqli_error($conn));
            while($data_barang = mysqli_fetch_array($sql_barang)) {
                echo '<option value="'.$data_barang['kode_barang'].'">'.$data_barang['kode_barang'].'</option>';
            } ?>
        </select>
        <div class="tgl_transaksi mt-1">
            <label>Tanggal Transaksi</label>
            <input type="date" class="form-control" name="tgl_transaksi" required="required" value="value="<?= $data['tgl_transaksi'];?> autocomplete="off">
        </div>
        <div class="jumlah_barang mt-1">
            <label>Jumlah Barang</label>
            <input type="text" class="form-control" name="jumlah_barang" required="required" value="<?= $data['jumlah_barang'];?>" autocomplete="off">
        </div>
        <div class="harga mt-1">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" required="required" value="<?= $data['harga'];?>" autocomplete="off">
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