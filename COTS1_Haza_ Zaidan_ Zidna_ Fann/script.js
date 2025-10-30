$(document).ready(function () {
  // ===================================================
  // === FUNGSI UNTUK HALAMAN index.html (Beranda) ===
  // ===================================================

  // Implementasi Pencarian Produk dengan jQuery
  $("#searchForm").on("submit", function (e) {
    e.preventDefault();
    const searchTerm = $("#searchInput").val().toLowerCase();

    $(".product-card").each(function () {
      const productName = $(this).data("product-name").toLowerCase();
      if (productName.includes(searchTerm)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });

  // ===================================================
  // === DATA PRODUK UNTUK detail.html ===
  // ===================================================
  const products = {
    1: {
      name: "Galaxy S23 Ultra (12/256GB)",
      price: "Rp 12.999.000",
      desc:
        "Smartphone flagship dengan S Pen terintegrasi. Layar Dynamic AMOLED 2X 6.8 inci, Chipset Snapdragon 8 Gen 2, Kamera utama 200MP. Performa kelas atas untuk gaming dan multitasking.",
      images: [
        "https://image2url.com/images/1761794793348-c3cc2a75-d9c9-4786-a74a-91a0e62f97c7.jpg",
        "https://image2url.com/images/1761794793348-c3cc2a75-d9c9-4786-a74a-91a0e62f97c7.jpg",
      ],
    },
    2: {
      name: "Laptop Gaming ROG (i7/16GB)",
      price: "Rp 18.500.000",
      desc:
        "Laptop gaming bertenaga dengan Intel Core i7, RAM 16GB, dan NVIDIA RTX 4060. Desain stylish dan sistem pendingin canggih untuk sesi gaming yang panjang.",
      images: [
        "https://image2url.com/images/1761794983724-5ea28fc0-9b1a-4543-8736-3fb75326b45d.jfif",
        "https://image2url.com/images/1761794983724-5ea28fc0-9b1a-4543-8736-3fb75326b45d.jfif",
      ],
    },
    3: {
      name: "Smartwatch Pro (Edisi Titanium)",
      price: "Rp 3.200.000",
      desc:
        "Smartwatch premium dengan casing Titanium, fitur kesehatan lengkap (ECG, SpO2), dan daya tahan baterai hingga 5 hari. Tahan air dan cocok untuk segala aktivitas.",
      images: [
        "https://image2url.com/images/1761795064699-62aec818-6e57-48f9-889b-1ce557a094ba.webp",
        "https://image2url.com/images/1761795064699-62aec818-6e57-48f9-889b-1ce557a094ba.webp",
      ],
    },
    4: {
      name: "TWS Bass Boost (Noise Cancelling)",
      price: "Rp 899.000",
      desc:
        "True Wireless Stereo (TWS) dengan fitur Active Noise Cancelling (ANC). Suara bass yang kuat, koneksi Bluetooth 5.3 stabil, dan casing pengisian daya cepat.",
      images: [
        "https://image2url.com/images/1761795154127-d9552a4e-5736-4bed-96c9-c2444f0de751.webp",
        "https://image2url.com/images/1761795154127-d9552a4e-5736-4bed-96c9-c2444f0de751.webp",
      ],
    },
    5: {
      name: "iPhone 15 Pro Max (256GB)",
      price: "Rp 17.599.000",
      desc:
        "Flagship Apple dengan Chip A17 Bionic. Bodi Titanium, layar ProMotion Super Retina XDR 6.7 inci, dan sistem kamera Pro canggih. Kinerja super cepat dan efisien.",
      images: [
        "https://image2url.com/images/1761795235583-72033e3b-e0ec-49c2-aa44-833a12326ad8.jfif",
        "https://image2url.com/images/1761795235583-72033e3b-e0ec-49c2-aa44-833a12326ad8.jfif",
      ],
    },
  };

  // ===================================================
  // === LOGIKA UNTUK HALAMAN detail.html ===
  // ===================================================
  if (window.location.pathname.includes("detail.html")) {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get("id");
    const product = products[productId] || products[1];

    // Isi konten detail
    $("#productName").text(product.name);
    $("#productPrice").text(product.price);
    $("#productDescription").text(product.desc);

    // Buat carousel gambar dinamis
    const $carouselInner = $("#productImageSlider .carousel-inner");
    $carouselInner.empty();

    product.images.forEach((imgUrl, index) => {
      const activeClass = index === 0 ? " active" : "";
      const itemHTML = `
        <div class="carousel-item${activeClass}">
          <img src="${imgUrl}" class="d-block w-100 detail-img" alt="Gambar Produk ${index + 1}">
        </div>`;
      $carouselInner.append(itemHTML);
    });

    // Aktifkan carousel
    const carouselElement = document.getElementById("productImageSlider");
    if (carouselElement) {
      new bootstrap.Carousel(carouselElement);
    }

    // Tombol Kembali (opsional kalau mau arah balik khusus)
    $("#btnBack").on("click", function () {
      history.back();
    });
  }

  // ===================================================
  // === FUNGSI UNTUK TOMBOL "Tambah ke Keranjang" ===
  // ===================================================
  $("#addToCartBtn").on("click", function () {
    const alertBox = $("#cartAlert");
    alertBox.removeClass("d-none").addClass("show");

    setTimeout(function () {
      alertBox.removeClass("show").addClass("d-none");
    }, 3000);
  });
});
