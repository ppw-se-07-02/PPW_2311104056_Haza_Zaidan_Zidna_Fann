<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

// CEK ID DI URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("<h3 style='color:red; text-align:center; margin-top:40px;'>ERROR: ID produk tidak ditemukan.</h3>");
}

$id = intval($_GET['id']);

// AMBIL DATA PRODUK
$q = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");

if (!$q) {
    die("Query Error: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($q);

if (!$data) {
    die("<h3 style='color:red; text-align:center; margin-top:40px;'>Produk tidak ditemukan.</h3>");
}

include "header.php";
?>

<div style="display:flex;">
<?php include "sidebar.php"; ?>

<div class="container" style="margin-left:280px; padding-top:30px; max-width:700px;">
    <h2 class="fw-bold mb-4">Edit Produk</h2>

    <div class="card">
        <div class="card-body">

            <form method="POST" action="proses_edit.php">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="name" value="<?= $data['name']; ?>" required>

                <label class="form-label mt-3">Brand</label>
                <input type="text" class="form-control" name="brand" value="<?= $data['brand']; ?>">

                <label class="form-label mt-3">Harga</label>
                <input type="number" class="form-control" name="price" value="<?= $data['price']; ?>" required>

                <label class="form-label mt-3">URL Gambar</label>
                <input type="text" class="form-control" name="image_url" value="<?= $data['image_url']; ?>">

                <label class="form-label mt-3">Deskripsi</label>
                <textarea class="form-control" name="description" rows="4"><?= $data['description']; ?></textarea>

                <button class="btn btn-primary mt-4">Update Produk</button>
                <a href="kelola_produk.php" class="btn btn-secondary mt-4">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
