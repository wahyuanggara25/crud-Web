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
    <h2 style="text-align: center;">Master Barang</h2>
    <br>
        <div class="container">
        <table class="table table-sm table-hover table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

            <?php
                //Memanggil fungsi koneksi ke Database
                include 'koneksi.php';

                //Query memanggil atau menampilkan data dari database
                $query = "SELECT * FROM master_barang";
                $result = mysqli_query($conn, $query);

                //Menampilkan data kedalam tabel
                while ($data = mysqli_fetch_assoc($result))
                {
            ?>

            <tbody>
                <tr>
                    <td><?php echo $data["kode_barang"] ?></td>
                    <td><?php echo $data["nama_barang"] ?></td>
                    <td><?php echo $data["harga"] ?></td>

                    <td><a href="prosesDelete.php?kode_barang=<?= $data['kode_barang']; ?>" class="delete link-danger" style="text-decoration: none";>Delete</a></td>
                    <td><a href="edit.php?kode_barang=<?= $data['kode_barang']; ?>" class="edit link-danger" style="text-decoration: none";>Edit</a></td>
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