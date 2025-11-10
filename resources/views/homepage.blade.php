<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATAIN - Digital Product & Lifetime Reseller</title>
    <style>
        /* Reset */
        * {margin:0; padding:0; box-sizing:border-box;}
        body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height:1.6; color:#333; background:#fefefe;}
        a {text-decoration:none; color:inherit;}

        /* Navbar */
        nav {background:#ffffff; box-shadow:0 2px 6px rgba(0,0,0,0.1);}
        nav .container {max-width:1200px; margin:auto; display:flex; justify-content:space-between; align-items:center; padding:1rem 2rem;}
        nav ul {display:flex; list-style:none; gap:2rem;}
        nav ul li a {font-weight:500; color:#333; transition:0.3s;}
        nav ul li a:hover {color:#ff7f50;}
        nav .logo {font-size:1.8rem; font-weight:bold; color:#ff7f50;}

        /* Hero */
        .hero {background:linear-gradient(135deg, #6ec1e4, #ff7f50); color:#fff; text-align:center; padding:6rem 2rem;}
        .hero h1 {font-size:2.5rem; margin-bottom:1rem;}
        .hero p {font-size:1.2rem; margin-bottom:2rem;}
        .hero a {background:#fff; color:#ff7f50; padding:0.8rem 2rem; font-weight:bold; border-radius:10px; transition:0.3s;}
        .hero a:hover {background:#ffe6d9;}

        /* Section Titles */
        section h2 {text-align:center; font-size:2rem; margin-bottom:2rem; color:#333;}

        /* Produk Grid */
        .produk-grid {display:grid; grid-template-columns:1fr; gap:2rem; max-width:1200px; margin:auto; padding:0 2rem;}
        @media(min-width:768px){.produk-grid {grid-template-columns:repeat(3,1fr);}}
        .card {background:#fff; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); overflow:hidden; display:flex; flex-direction:column; transition:0.3s;}
        .card:hover {transform:translateY(-5px);}
        .card img {width:100%; height:200px; object-fit:cover;}
        .card-content {padding:1rem; flex-grow:1; display:flex; flex-direction:column;}
        .card-content h3 {font-size:1.3rem; margin-bottom:0.5rem; color:#ff7f50;}
        .card-content p {flex-grow:1; color:#555; margin-bottom:1rem;}
        .card-content a {background:#ff7f50; color:#fff; text-align:center; padding:0.6rem; border-radius:8px; font-weight:bold; transition:0.3s;}
        .card-content a:hover {background:#e0653c;}

        /* Cara Jual */
        .cara-jual {background:#fdf6f0; padding:4rem 2rem;}
        .cara-grid {display:grid; grid-template-columns:1fr; gap:2rem; max-width:1000px; margin:auto;}
        @media(min-width:768px){.cara-grid {grid-template-columns:repeat(3,1fr);}}
        .cara-card {background:#fff; padding:2rem; border-radius:12px; text-align:center; box-shadow:0 4px 12px rgba(0,0,0,0.1);}
        .cara-card h3 {font-size:1.3rem; color:#ff7f50; margin-bottom:1rem;}
        .cara-card p {color:#555;}

        /* FAQ */
        .faq {padding:4rem 2rem;}
        .faq-container {max-width:800px; margin:auto; display:flex; flex-direction:column; gap:1.5rem;}
        .faq-item {background:#fff; padding:1.5rem; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1);}
        .faq-item h4 {color:#ff7f50; margin-bottom:0.5rem;}

        /* Footer */
        footer {background:#ff7f50; color:#fff; text-align:center; padding:1.5rem; margin-top:2rem;}
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav>
        <div class="container">
            <a href="#" class="logo">DATAIN</a>
            <ul>
                <li><a href="#produk">Produk</a></li>
                <li><a href="#cara-jual">Cara Jual</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </div>
    </nav>

    {{-- Hero --}}
    <section class="hero">
        <h1>Beli Digital Product & Dapat Hak Jual Ulang Lifetime</h1>
        <p>Worksheet, workbook, template edukasi siap pakai. Sekali beli, jual berkali-kali di olshop atau medsos.</p>
        <a href="#produk">Lihat Produk</a>
    </section>

    {{-- Produk --}}
    <section id="produk" class="py-10">
        <h2>Produk Terbaru</h2>
        <div class="produk-grid">
            {{-- Product 1 --}}
            <div class="card">
                <img src="https://via.placeholder.com/300x200.png?text=Digital+Product+1" alt="Digital Product 1">
                <div class="card-content">
                    <h3>Worksheet Serbaguna</h3>
                    <p>Latihan interaktif & template siap pakai. Cocok untuk semua usia & keperluan belajar.</p>
                    <a href="https://lynk.id/produk1" target="_blank">Beli & Dapat Reseller</a>
                </div>
            </div>

            {{-- Product 2 --}}
            <div class="card">
                <img src="https://via.placeholder.com/300x200.png?text=Digital+Product+2" alt="Digital Product 2">
                <div class="card-content">
                    <h3>Workbook Skill Digital</h3>
                    <p>Template & panduan belajar skill digital. Bisa dipakai pribadi atau dijual ulang.</p>
                    <a href="https://lynk.id/produk2" target="_blank">Beli & Dapat Reseller</a>
                </div>
            </div>

            {{-- Product 3 --}}
            <div class="card">
                <img src="https://via.placeholder.com/300x200.png?text=Digital+Product+3" alt="Digital Product 3">
                <div class="card-content">
                    <h3>Template Kreatif</h3>
                    <p>Template catatan, checklist, dan worksheet interaktif. Cocok untuk semua umur.</p>
                    <a href="https://lynk.id/produk3" target="_blank">Beli & Dapat Reseller</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Cara Jual --}}
    <section id="cara-jual" class="cara-jual">
        <h2>Cara Jual & Dapat Keuntungan</h2>
        <div class="cara-grid">
            <div class="cara-card">
                <h3>1. Pilih Produk</h3>
                <p>Pilih digital product yang ingin dijual ulang.</p>
            </div>
            <div class="cara-card">
                <h3>2. Dapatkan File & Panduan</h3>
                <p>Setelah beli, langsung dapat file + panduan jual ulang seumur hidup.</p>
            </div>
            <div class="cara-card">
                <h3>3. Mulai Jual</h3>
                <p>Promosikan di olshop, WA, atau medsos. Setiap penjualan jadi keuntungan sendiri.</p>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="faq">
        <h2>Pertanyaan Umum</h2>
        <div class="faq-container">
            <div class="faq-item">
                <h4>Apakah saya bisa jual kembali produk?</h4>
                <p>Ya, setiap produk dilengkapi hak lifetime reseller. Bisa dijual di olshop atau medsos tanpa batas.</p>
            </div>
            <div class="faq-item">
                <h4>Apakah produk langsung bisa dipakai?</h4>
                <p>Ya, semua digital product siap pakai. Cukup download dan gunakan.</p>
            </div>
            <div class="faq-item">
                <h4>Bagaimana cara mendapatkan file?</h4>
                <p>Setelah klik beli di Lynk.id dan bayar, link download akan tersedia otomatis.</p>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer>
        <p>&copy; {{ date('Y') }} DATAIN. Semua hak dilindungi.</p>
    </footer>

</body>
</html>
