<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi Laundry</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #0077b6, #00b4d8) !important;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background lingkaran */

        body::before {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            top: -120px;
            left: -100px;
        }

        body::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            bottom: -180px;
            right: -100px;
        }

        /* Container Login */

        .login-wrapper {
            width: 100%;
            max-width: 430px;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        /* Card */

        .login-card {
            background: white;
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 20px 50px rgba(0,0,0,.18);
            animation: muncul 0.7s ease;
        }

        @keyframes muncul {

            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }

        /* Logo */

        .logo {
            width: 85px;
            height: 85px;
            margin: auto;

            border-radius: 23px;

            background: linear-gradient(
                135deg,
                #0077b6,
                #00b4d8
            );

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 40px;

            box-shadow:
                0 10px 25px rgba(0,119,182,.25);

            animation: mengambang 3s ease-in-out infinite;
        }

        @keyframes mengambang {

            0%,100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }

        }

        /* Judul */

        .login-title {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 25px;
        }

        .login-title h2 {
            font-weight: 800;
            margin-bottom: 8px;
            color: #172033;
            letter-spacing: 1px;
        }

        .login-title p {
            color: #8b93a1;
            font-size: 14px;
            margin: 0;
        }

        /* Alert */

        .alert {
            border-radius: 12px;
            font-size: 13px;
        }

        /* Label */

        .form-group label {
            color: #303846;
            font-weight: 600;
            margin-bottom: 8px;
        }

        /* Input */

        .form-control {
            height: 48px;
            border-radius: 12px;
            border: 1px solid #e1e6ee;
            box-shadow: none;
            padding: 10px 15px;
            transition: .3s;
        }

        .form-control:focus {
            border-color: #00a6d6;

            box-shadow:
                0 0 0 3px rgba(0,166,214,.1);
        }

        /* Tombol */

        .btn-login {
            width: 100%;
            height: 48px;

            border: none;
            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #0077b6,
                    #00b4d8
                );

            color: white;

            font-weight: 700;
            font-size: 15px;

            transition: .3s;

            cursor: pointer;
        }

        .btn-login:hover {

            transform: translateY(-2px);

            box-shadow:
                0 10px 20px rgba(0,119,182,.25);

        }

        .btn-login:active {

            transform: scale(.98);

        }

        /* Footer */

        .footer-login {
            text-align: center;
            color: #9aa1ad;
            font-size: 12px;
            margin-top: 25px;
        }

        /* Responsive */

        @media(max-width: 500px) {

            .login-wrapper {
                padding: 15px;
            }

            .login-card {
                padding: 25px;
                border-radius: 20px;
            }

        }

    </style>

</head>

<body>

    <div class="login-wrapper">

        <div class="login-card">

            <!-- LOGO -->

            <div class="logo">
                🧺
            </div>


            <!-- JUDUL -->

            <div class="login-title">

                <h2>
                    LAUNDRY
                </h2>

                <p>
                    Sistem Informasi Laundry
                </p>

            </div>


            <!-- PESAN LOGIN -->

            <?php

            if (isset($_GET['pesan'])) {

                if ($_GET['pesan'] == 'gagal') {

                    echo "
                    <div class='alert alert-danger'>
                        <strong>Login gagal!</strong><br>
                        Username atau Password salah.
                    </div>
                    ";

                }

                elseif ($_GET['pesan'] == 'logout') {

                    echo "
                    <div class='alert alert-info'>
                        Anda telah berhasil Logout!
                    </div>
                    ";

                }

                elseif ($_GET['pesan'] == 'belum_login') {

                    echo "
                    <div class='alert alert-danger'>
                        Anda harus login untuk mengakses halaman admin!
                    </div>
                    ";

                }

            }

            ?>


            <!-- FORM LOGIN -->

            <form action="login.php" method="post">

                <!-- USERNAME -->

                <div class="form-group">

                    <label>
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required>

                </div>


                <br>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required>

                </div>


                <br>


                <!-- BUTTON -->

                <button
                    type="submit"
                    class="btn-login">

                    🔐 Masuk ke Dashboard

                </button>

            </form>


            <!-- FOOTER -->

            <div class="footer-login">

                © 2026 Sistem Informasi Laundry

            </div>

        </div>

    </div>

</body>
</html>