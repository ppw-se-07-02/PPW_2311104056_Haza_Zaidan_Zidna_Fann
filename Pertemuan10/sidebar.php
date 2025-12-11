<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
/* SIDEBAR RESPONSIVE */
.sidebar {
  width: 260px;
  height: 100vh;
  position: fixed;
}

@media (max-width: 768px) {
  .sidebar {
    width: 100% !important;
    position: relative !important;
    height: auto !important;
  }
}
</style>

<div class="sidebar d-flex flex-column p-3 text-bg-dark">

    <h4 class="text-center mb-4">Menu</h4>

    <ul class="nav nav-pills flex-column mb-auto">

        <li>
            <a href="index.php" 
               class="nav-link <?= ($current_page == 'index.php') ? 'active bg-primary text-white' : 'text-white' ?>">
               Dashboard
            </a>
        </li>

        <li>
            <a href="kelola_produk.php" 
               class="nav-link <?= ($current_page == 'kelola_produk.php') ? 'active bg-primary text-white' : 'text-white' ?>">
               Kelola Produk
            </a>
        </li>

        <li>
            <a href="pesanan.php" class="nav-link text-white">
               Pesanan
            </a>
        </li>

        <li>
            <a href="pelanggan.php" class="nav-link text-white">
               Pelanggan
            </a>
        </li>

    </ul>
</div>
