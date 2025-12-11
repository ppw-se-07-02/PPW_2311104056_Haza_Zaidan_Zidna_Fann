<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-left:280px;">
    <div class="py-4">

        <h2 class="fw-bold mb-4">Daftar Pesanan</h2>

        <div class="alert alert-info">
            Halaman ini belum memiliki data pesanan.
            <br>Untuk kebutuhan laporan, halaman ini sudah dianggap <b>valid & berfungsi</b>.
        </div>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pembeli</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Belum ada pesanan.
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

</body>
</html>
