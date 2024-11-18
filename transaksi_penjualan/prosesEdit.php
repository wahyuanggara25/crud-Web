<?php

    include 'koneksi.php';

    $kode_barang    = @$_POST["kode_barang"];
    $tgl_transaksi  = @$_POST["tgl_transaksi"];
    $jumlah_barang  = @$_POST["jumlah_barang"];
    $harga          = @$_POST["harga"];

    //query sql untuk mengedit data ke tabel database
    $query  = "UPDATE transaksi_penjualan SET kode_barang = '$kode_barang', tgl_transaksi = '$tgl_transaksi', jumlah_barang = '$jumlah_barang', harga = '$harga'";
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