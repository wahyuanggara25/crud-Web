<?php

    include 'koneksi.php';

    $kode_barang    = @$_POST["kode_barang"];
    $nama_barang    = @$_POST["nama_barang"];
    $harga          = @$_POST["harga"];

    //query sql untuk mengedit data ke tabel database
    $query  = "UPDATE master_barang SET nama_barang = '$nama_barang', harga = '$harga'";
    $result = mysqli_query($conn, $query);

    //untuk mengecek apakah ada perubahan dalam row tabel
    $count = mysqli_affected_rows($conn);

    //jika ada perubahan, maka hasilnya akan langsung dipindahkan ke halaman utama
    if ($count > 0){
        header('location: output.php');
    }

    //jika gagal makan akan menampilkan peringatan
    else{
        echo "<script>alert('Data Gagal Diedit');window.location='output.php'</script>";
    }