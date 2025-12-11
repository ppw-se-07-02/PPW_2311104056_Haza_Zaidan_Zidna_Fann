<?php include "koneksi.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="container" style="margin-left:280px;">
  <div class="py-4">

    <h3 class="mb-4">Tambah Produk</h3>

    <div class="card">
      <div class="card-body">

        <form method="POST" action="proses_tambah.php">

          <label class="form-label">Nama Produk</label>
          <input type="text" name="name" class="form-control" required>

          <label class="form-label mt-3">Brand</label>
          <input type="text" name="brand" class="form-control">

          <label class="form-label mt-3">Harga</label>
          <input type="number" name="price" class="form-control" required>

          <label class="form-label mt-3">URL Gambar</label>
          <input type="text" name="image_url" class="form-control">

          <label class="form-label mt-3">Deskripsi</label>
          <textarea name="description" class="form-control"></textarea>

          <button class="btn btn-success mt-4">Simpan</button>
          <a href="kelola_produk.php" class="btn btn-secondary mt-4">Batal</a>

        </form>

      </div>
    </div>

  </div>
</div>
