<?php
include "koneksi.php";

$name        = $_POST['name'];
$brand       = $_POST['brand'];
$price       = $_POST['price'];
$image_url   = $_POST['image_url'];
$description = $_POST['description'];

$sql = "INSERT INTO products (name, brand, price, image_url, description)
        VALUES ('$name', '$brand', '$price', '$image_url', '$description')";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Produk berhasil ditambahkan'); window.location='kelola_produk.php';</script>";
} else {
    echo "<script>alert('Gagal menambah produk'); window.location='tambah_produk.php';</script>";
}
?>
