<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Produk berhasil dihapus'); window.location='kelola_produk.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus produk'); window.location='kelola_produk.php';</script>";
}
?>
