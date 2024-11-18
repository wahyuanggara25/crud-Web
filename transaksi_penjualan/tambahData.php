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
    <h2 style="text-align: center;">Tambah Data Transaksi</h2>

    <?php
        //Memanggil fungsi koneksi ke Database
        include 'koneksi.php';
    ?>

    <div class="container col-md-8">
    <form action="prosesTambah.php" method="POST">
        <div class="kode_barang">
            <label>Kode Barang</label>
        </div>
        <select class="form-select form-select-sm-5" aria-label=".form-select-lg example" name="kode_barang" required="required">
            <option value="">Pilih Kode Barang</option>
            <?php
            $sql_barang = mysqli_query($conn, "SELECT * FROM master_barang") or die
                (mysqli_error($conn));
            while($data_barang = mysqli_fetch_array($sql_barang)) {
                echo '<option value="'.$data_barang['kode_barang'].'">'.$data_barang['kode_barang'].'</option>';
            } ?>
        </select>
        <div class="tgl_transaksi mt-1">
            <label>Tanggal Transaksi</label>
            <input type="date" class="form-control" name="tgl_transaksi" required="required" autocomplete="off">
        </div>
        <div class="jumlah_barang mt-1">
            <label>Jumlah Barang</label>
            <input type="text" class="form-control" name="jumlah_barang" required="required" autocomplete="off">
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