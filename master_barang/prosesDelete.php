<?php

    include 'koneksi.php';

    $kode_barang   = @$_GET["kode_barang"];

    //query sql untuk menginputkan data ke table database
    $query  = "DELETE FROM master_barang where kode_barang = '$kode_barang'";
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