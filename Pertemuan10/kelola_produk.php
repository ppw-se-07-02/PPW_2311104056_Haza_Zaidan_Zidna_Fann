<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Kelola Produk</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="container" style="margin-left:280px;">
  <div class="py-4">

    <h2 class="fw-bold mb-4">Kelola Produk</h2>

    <a href="tambah_produk.php" class="btn btn-success mb-3">+ Tambah Produk</a>

    <form class="d-flex mb-3" method="GET">
        <input type="text" name="q" class="form-control me-2" placeholder="Cari produk / brand"
               value="<?= isset($_GET['q']) ? $_GET['q'] : '' ?>">
        <button class="btn btn-primary">Cari</button>

        <?php if(isset($_GET['q']) && $_GET['q']!=''): ?>
            <a href="kelola_produk.php" class="btn btn-secondary ms-2">Reset</a>
        <?php endif; ?>
    </form>

    <?php
    if(isset($_GET['q']) && $_GET['q']!=''){
        $q = mysqli_real_escape_string($conn, $_GET['q']);
        $sql = "SELECT * FROM products WHERE name LIKE '%$q%' OR brand LIKE '%$q%'";
    } else {
        $sql = "SELECT * FROM products";
    }

    $result = mysqli_query($conn, $sql);
    ?>

    <div class="card">
      <div class="card-body table-responsive">

        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama</th>
              <th>Brand</th>
              <th>Harga</th>
              <th width="150">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            if(mysqli_num_rows($result) > 0){
                $no = 1;
                while($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
                <td><?= $no++; ?></td>

                <td>
                  <?php if($row['image_url']): ?>
                    <img src="<?= $row['image_url']; ?>" width="80" class="rounded">
                  <?php else: ?>
                    <span class="text-muted">Tidak ada gambar</span>
                  <?php endif; ?>
                </td>

                <td><?= $row['name']; ?></td>
                <td><?= $row['brand']; ?></td>
                <td>Rp <?= number_format($row['price'], 0, ',', '.'); ?></td>

                <td>
                  <a href="edit_produk.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="proses_hapus.php?id=<?= $row['id']; ?>" 
                     onclick="return confirm('Yakin ingin menghapus?')" 
                     class="btn btn-danger btn-sm">Hapus</a>
                </td>
              </tr>
            <?php } } else { ?>
              <tr>
                <td colspan="6" class="text-center text-danger">Tidak ada produk</td>
              </tr>
            <?php } ?>
          </tbody>

        </table>

      </div>
    </div>

  </div>
</div>

</body>
</html>
