<?php
include "connect.php"; // Assume this file sets up your $mysqli connection

if (isset($_POST['simpan'])) {
    $id_menu = $_POST['id'];
    $nm_menu = $_POST['nama'];
    $harga_menu = $_POST['harga'];
    $stok_menu = $_POST['stok'];

    // Using prepared statements to prevent SQL injection
    $data = mysqli_query($mysqli, "INSERT INTO stok (id, nama, harga, stok) VALUES ('$id', '$nm_menu', '$harga_menu', '$stok_menu' )") or die("Data salah: " . mysqli_error($mysqli));

    // Mengecek apakah data berhasil disimpan atau tidak
    if($data){
        // Jika berhasil, mengarahkan ke halaman tampil.php
        echo "<script>
        alert('Data berhasil disimpan');
        window.location.replace('finpro.php');
        </script>";
    } else {
        // Jika gagal, mengarahkan ke halaman add.php
        echo "<script>
        alert('Data gagal disimpan');
        window.location.replace('add.php');
        </script>";
    }
}
?>