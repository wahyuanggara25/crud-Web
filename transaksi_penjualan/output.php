<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Output Data</title>
</head>
<body>
    <h2 style="text-align: center;">Transaksi Penjualan</h2>
    <br>
        <div class="container">
        <table class="table table-sm table-hover table-bordered">
            <thead class="table-light">
                <tr>
                    <th>No Transaksi</th>
                    <th>Kode Barang</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jumlah Barang</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <?php
                //Memanggil fungsi koneksi ke Database
                include 'koneksi.php';

                $no_transaksi = 1;
                $total_harga = 0;

                //Query memanggil atau menampilkan data dari database
                $query = "SELECT * FROM transaksi_penjualan";
                $result = mysqli_query($conn, $query);

                //Menampilkan data kedalam tabel
                while ($data = mysqli_fetch_assoc($result))
                {
                    $total_harga = $data['harga']*$data['total_harga'];
            ?>

            <tbody>
                <tr>
                    <td><?= $no_transaksi++; ?></td>
                    <td><?php echo $data["kode_barang"] ?></td>
                    <td><?php echo $data["tgl_transaksi"] ?></td>
                    <td><?php echo $data["jumlah_barang"] ?></td>
                    <td><?php echo $data["harga"] ?></td>
                    <td><?php echo $data["total_harga"] ?></td>

                    <td><a href="prosesDelete.php?no_transaksi=<?= $data['no_transaksi']; ?>" class="delete link-danger" style="text-decoration: none";>Delete</a></td>
                    <td><a href="edit.php?no_transaksi=<?= $data['no_transaksi']; ?>" class="edit link-danger" style="text-decoration: none";>Edit</a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <button type="button" class="btn bg-dark text-light"><a href='TambahData.php' style="text-decoration: none"; class="link-light">Tambah Data</a></button>
        <button type="button" class="btn bg-dark text-light"><a href='/kuliah/Crud-Web2/index.php' style="text-decoration: none"; class="link-light">Menu Awal</a></button>
    </div>
</body>
</html>