<?php
    include 'header.php';
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Laundry</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f4f7fb !important;
            font-family: "Poppins", Arial, sans-serif;
            color: #263238;
        }

        .dashboard {
            padding: 35px 45px;
        }

        /* HERO */
        .welcome {
            background: linear-gradient(135deg, #0d6efd, #00b4d8);
            border-radius: 22px;
            padding: 35px;
            color: white;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(13, 110, 253, 0.2);
        }

        .welcome:before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            right: -50px;
            top: -70px;
        }

        .welcome:after {
            content: "";
            position: absolute;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            right: 100px;
            bottom: -80px;
        }

        .welcome h1 {
            margin: 0 0 10px;
            font-size: 30px;
            font-weight: 700;
        }

        .welcome p {
            margin: 0;
            font-size: 15px;
            opacity: .9;
        }

        /* CARD */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 18px;
            padding: 25px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,.06);
            transition: .3s;
        }

        .stat-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(0,0,0,.10);
        }

        .stat-icon {
            width: 58px;
            height: 58px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            color: white;
            background: linear-gradient(135deg, #0d6efd, #00b4d8);
        }

        .stat-card h3 {
            margin: 0;
            font-size: 26px;
            font-weight: 700;
        }

        .stat-card span {
            font-size: 13px;
            color: #8a8f98;
        }

        /* CONTENT */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }

        .panel-custom {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0,0,0,.06);
        }

        .panel-custom h3 {
            margin-top: 0;
            font-weight: 700;
        }

        /* QUICK MENU */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .menu-item {
            text-decoration: none;
            color: #263238;
            padding: 22px;
            border-radius: 15px;
            background: #f7faff;
            border: 1px solid #edf2f7;
            transition: .3s;
            display: block;
        }

        .menu-item:hover {
            text-decoration: none;
            color: #0d6efd;
            background: #eef6ff;
            transform: translateY(-4px);
        }

        .menu-item .icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .menu-item strong {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .menu-item small {
            color: #8a8f98;
        }

        /* INFO */
        .info-box {
            padding: 18px;
            background: linear-gradient(135deg, #f0f8ff, #f8fcff);
            border-radius: 15px;
            margin-top: 18px;
            border-left: 4px solid #0d6efd;
        }

        .info-box strong {
            display: block;
            margin-bottom: 7px;
        }

        .info-box p {
            margin: 0;
            color: #777;
            font-size: 13px;
            line-height: 1.6;
        }

        /* NAVBAR */
        .navbar-inverse {
            background: #101828 !important;
            border: none !important;
            box-shadow: 0 5px 20px rgba(0,0,0,.12);
        }

        .navbar-inverse .navbar-brand {
            font-weight: 800;
            letter-spacing: 1px;
            color: #fff !important;
        }

        .navbar-inverse .navbar-nav > li > a {
            transition: .3s;
        }

        .navbar-inverse .navbar-nav > li > a:hover {
            background: #0d6efd !important;
        }
        /* RESPONSIVE */
        @media(max-width: 1000px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }
        @media(max-width: 600px) {
            .dashboard {
                padding: 20px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }

            .welcome h1 {
                font-size: 23px;
            }
        }
    </style>
</head>
<body>
<div class="dashboard">
    <!-- WELCOME -->
    <div class="welcome">
        <h1>Halo, <?php echo $_SESSION['username']; ?> 👋</h1>
        <p>
            Selamat datang di Dashboard Sistem Informasi Laundry.
            Kelola laundry dengan lebih mudah dan cepat.
        </p>
    </div>
    <!-- STATISTIK -->
    <div class="stats">
        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div>
                <h3>24</h3>
                <span>Total Pelanggan</span>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">🧺</div>
            <div>
                <h3>18</h3>
                <span>Transaksi Hari Ini</span>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">💰</div>
            <div>
                <h3>Rp 850K</h3>
                <span>Pendapatan</span>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">👕</div>
            <div>
                <h3>12</h3>
                <span>Laundry Diproses</span>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="content-grid">
        <!-- MENU -->
        <div class="panel-custom">
            <h3>⚡ Menu Cepat</h3>
            <p style="color:#888;">
                Akses fitur laundry dengan cepat.
            </p>
            <div class="menu-grid">
                <a href="pelanggan.php" class="menu-item">
                    <div class="icon">👥</div>
                    <strong>Data Pelanggan</strong>
                    <small>Kelola data pelanggan laundry</small>
                </a>
                <a href="transaksi.php" class="menu-item">
                    <div class="icon">🧺</div>
                    <strong>Transaksi</strong>
                    <small>Kelola transaksi laundry</small>
                </a>
                <a href="laporan.php" class="menu-item">
                    <div class="icon">📊</div>
                    <strong>Laporan</strong>
                    <small>Lihat laporan laundry</small>
                </a>
                <a href="harga.php" class="menu-item">
                    <div class="icon">💵</div>
                    <strong>Pengaturan Harga</strong>
                    <small>Atur harga layanan laundry</small>
                </a>
            </div>
        </div>
        <!-- INFORMASI -->
        <div class="panel-custom">
            <h3>💡 Informasi</h3>
            <div class="info-box">
                <strong>🧼 Laundry Bersih</strong>
                <p>
                    Pastikan setiap pakaian pelanggan
                    diproses dengan teliti dan bersih.
                </p>
            </div>
            <div class="info-box">
                <strong>⏱️ Tepat Waktu</strong>
                <p>
                    Perhatikan tanggal pengambilan
                    agar pelanggan mendapatkan pelayanan terbaik.
                </p>
            </div>
            <div class="info-box">
                <strong>⭐ Pelayanan</strong>
                <p>
                    Berikan pelayanan yang ramah,
                    cepat, dan profesional.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>