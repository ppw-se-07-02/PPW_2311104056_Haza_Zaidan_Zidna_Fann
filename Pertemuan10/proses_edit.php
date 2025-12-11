<?php
include "koneksi.php";

$id          = $_POST['id'];
$name        = $_POST['name'];
$brand       = $_POST['brand'];
$price       = $_POST['price'];
$image_url   = $_POST['image_url'];
$description = $_POST['description'];

$sql = "UPDATE products SET 
        name='$name',
        brand='$brand',
        price='$price',
        image_url='$image_url',
        description='$description'
        WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Produk berhasil diupdate'); window.location='kelola_produk.php';</script>";
} else {
    echo "<script>alert('Gagal update produk'); window.location='edit_produk.php?id=$id';</script>";
}
?>
