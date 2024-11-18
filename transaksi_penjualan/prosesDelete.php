<?php

    include 'koneksi.php';

    $no_transaksi   = @$_GET["no_transaksi"];

    //query sql untuk menginputkan data ke table database
    $query  = "DELETE FROM transaksi_penjualan where no_transaksi = '$no_transaksi'";
    $result = mysqli_query($conn, $query);

    //untuk mengecek apakah ada perubahan dalam row tabel
    $count = mysqli_affected_rows($conn);

    //jika ada perubahan, maka hasilnya akan langsung dipindahkan ke halaman utama
    if($count > 0)
    {
        echo "<script>alert('Data Berhasil Dihapus');window.location='output.php'</script>";
    }

    //jika gagal maka akan menampilkan peringatan
    else
    {
        echo "<script>alert('Data Gagal Dihapus');window.location='output.php'</script>";
    }

?>