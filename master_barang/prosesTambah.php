<?php

    include 'koneksi.php';

    $kode_barang    = @$_POST["kode_barang"];
    $nama_barang    = @$_POST["nama_barang"];
    $harga          = @$_POST["harga"];

    //Query sql untuk menginputkan data ke tabel database
    $query = "INSERT INTO master_barang VALUES('$kode_barang','$nama_barang','$harga')";
    $result = mysqli_query($conn, $query);

    //Untuk mengecek apakah ada perubahan dalam row table
    $count = mysqli_affected_rows($conn);

    //jika ada perbuahan, maka hasilnya akan langsung dipindahkan ke halaman utama
    if ($count > 0){
        header('Location: output.php');
    }

    //jika gagal maka akan menampilkan peringatan
    else {
        echo "Input data gagal!
        <br>
        <a href='prosesTambah.php'>Input Ulang</a>";
    }

?>