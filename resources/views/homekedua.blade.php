<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DATAIN - Digital Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f6f8ff;
            margin: 0;
            padding: 0;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 6%;
            position: sticky;
            top: 0;
            background: #fff;
            border-bottom: 1px solid #e8e8e8;
            z-index: 999;
        }
        .navbar .logo {
            font-size: 22px;
            font-weight: 700;
            color: #4b4aff;
        }
        .navbar a {
            margin-left: 22px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: .2s;
        }
        .navbar a:hover {
            color: #4b4aff;
        }

        /* HERO SLIDE */
        .hero {
            width: 100%;
            height: 350px;
            background: linear-gradient(135deg, #4b4aff, #e738ff);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            animation: fadebg 8s infinite alternate;
        }
        @keyframes fadebg {
            0% {background: linear-gradient(135deg, #4b4aff, #e738ff);}
            100% {background: linear-gradient(135deg, #0099ff, #ff7a7a);}
        }
        .hero h1 {
            font-size: 34px;
            font-weight: 700;
            max-width: 700px;
            margin: 0 auto;
        }
        .btn-cta {
            background: #fff;
            color: #4b4aff;
            padding: 13px 26px;
            font-weight: 600;
            border-radius: 8px;
            display: inline-block;
            margin-top: 18px;
            text-decoration: none;
            transition: .2s;
        }
        .btn-cta:hover {
            transform: scale(1.04);
        }

        /* ✅ INFO BOX – Versi Premium  */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
            padding: 60px 6%;
        }

        .info-box {
            background: #ffffff;
            padding: 30px 25px;
            min-height: 185px;
            border-radius: 22px;
            text-align: center;
            border: 4px solid transparent;
            background-image:
                linear-gradient(#ffffff, #ffffff),
                linear-gradient(135deg, #4b4aff, #e738ff, #ff9b00);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            box-shadow: 0 6px 18px rgba(0,0,0,.08);
            transition: .28s ease;
        }

        .info-box:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 28px rgba(0,0,0,.12);
        }

        .info-box .icon {
            font-size: 42px;
            margin-bottom: 10px;
            color: #4b4aff;
        }

        .info-box h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            color: #222;
        }

        .info-box p {
            font-size: 15px;
            color: #555;
            margin-top: 6px;
        }

        /* PRODUCT GRID */
        .section-title {
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            margin-top: 40px;
        }

        .product-grid {
            padding: 50px 6%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 26px;
        }

        .product-card {
            background: #fff;
            padding: 22px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 3px 12px rgba(0,0,0,.06);
            border: 3px solid transparent;
            background-image: linear-gradient(#fff, #fff),
            linear-gradient(45deg, #4b4aff, #ff67e4, #ff8b00);
            background-origin: border-box;
            background-clip: padding-box, border-box;
            transition: .25s;
        }
        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 18px rgba(0,0,0,.07);
        }
        .product-card h4 {
            margin: 12px 0 5px;
            font-size: 20px;
            color: #333;
        }
        .product-card p {
            color: #666;
            font-size: 14px;
        }
        .product-card .price {
            font-size: 22px;
            font-weight: 700;
            color: #4b4aff;
            margin: 8px 0;
        }
        .btn-buy {
            display: inline-block;
            background: #4b4aff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            transition: .2s;
        }
        .btn-buy:hover {
            background: #3030ff;
        }

        footer {
            margin-top: 50px;
            background: #fff;
            padding: 30px;
            text-align: center;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #e8e8e8;
        }

    </style>
</head>
<body>

<!-- NAV -->
<div class="navbar">
    <div class="logo"><img src="{{ asset('assets/logo.png') }}" width="20"> DATAIN</div>
    <div> 
        <a href="#">Beranda</a>
        <a href="#">Produk</a>
        <a href="#">Keuntungan</a>
        <a href="#">Bantuan</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div>
        <h1>Digital Product dengan Hak Jual Ulang Seumur Hidup. Bisa Dijual Lagi di Olshop / Sosmed!</h1>
        <a class="btn-cta" href="#">Lihat Produk</a>
    </div>
</div>

<!-- ✅ INFO BOX SUDAH DIGANTI -->
<div class="info-grid">

    <div class="info-box">
        <div class="icon">🔁</div>
        <h3>Hak Jual Ulang Seumur Hidup</h3>
        <p>Beli sekali, bebas dijual ulang kapan saja. Tanpa batas & tanpa izin tambahan.</p>
    </div>

    <div class="info-box">
        <div class="icon">🎯</div>
        <h3>Semua Umur Bisa Pakai</h3>
        <p>Worksheet anak, remaja, dewasa, edukasi & materi skill.</p>
    </div>

    <div class="info-box">
        <div class="icon">💸</div>
        <h3>Cocok Buat Dijual</h3>
        <p>Bisa dijual di Shopee, WA, IG, FB, marketplace atau private class.</p>
    </div>

    <div class="info-box">
        <div class="icon">⚡</div>
        <h3>File Siap Download</h3>
        <p>Setelah bayar langsung download. Tidak perlu menunggu admin.</p>
    </div>

</div>

<!-- PRODUK -->
<h2 class="section-title">Produk Terlaris</h2>
<div class="product-grid">
    <div class="product-card">
        <h4>Worksheet Anak PAUD</h4>
        <p>Belajar berhitung & menulis</p>
        <div class="price">Rp 15.000</div>
        <a class="btn-buy" href="#">Beli Sekarang</a>
    </div>
    <div class="product-card">
        <h4>Workbook Parenting</h4>
        <p>100 halaman edukasi orang tua</p>
        <div class="price">Rp 25.000</div>
        <a class="btn-buy" href="#">Beli Sekarang</a>
    </div>
    <div class="product-card">
        <h4>Template CV & Portofolio</h4>
        <p>File siap edit</p>
        <div class="price">Rp 20.000</div>
        <a class="btn-buy" href="#">Beli Sekarang</a>
    </div>
</div>

<footer>
    Copyright © DATAIN - Digital Product Indonesia
</footer>

</body>
</html>
