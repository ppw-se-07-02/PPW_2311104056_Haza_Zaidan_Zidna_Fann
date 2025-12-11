<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Toko Laptop Gaming</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-left:280px;">
    <div class="py-4">

        <!-- Judul -->
        <h2 class="fw-bold mb-3">Dashboard</h2>
        <p class="text-muted">Selamat datang di dashboard <strong>Toko Laptop Gaming</strong>.</p>

        <!-- Kartu Statistik -->
        <div class="row mt-4">

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Total Produk</h5>
                        <p class="card-text fs-3 fw-bold text-primary">
                            <?php
                                include "koneksi.php";
                                $p = mysqli_query($conn, "SELECT COUNT(*) AS total FROM products");
                                $data = mysqli_fetch_assoc($p);
                                echo $data['total'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Pesanan</h5>
                        <p class="card-text fs-3 fw-bold text-success">0</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">Pelanggan</h5>
                        <p class="card-text fs-3 fw-bold text-info">0</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Welcome Banner -->
        <div class="card mt-4 shadow-sm border-0">
            <div class="card-body">
                <h4 class="fw-bold">Selamat Datang Admin 👋</h4>
                <p class="text-muted">
                    Gunakan menu di sebelah kiri untuk mengelola produk, pesanan, atau pelanggan.
                </p>
            </div>
        </div>

    </div>
</div>

</body>
</html>
