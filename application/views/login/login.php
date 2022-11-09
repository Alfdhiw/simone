<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/login/icons/logoPN.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login/bootstrap/css/bootstrap.min.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/login/login-style.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url() ?>assets/img/login/udinus.jpg" alt="IMG">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
                        Selamat Datang<br>
                        Di Aplikasi Magang Online<br>
                        <b>PENGADILAN NEGERI SEMARANG</b>
                        <br>
                        <br>
                        <br>
                        <div class="wrap-input100">
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                            </span>
                            <input class="input100 shadow" style="background-color:white" type="text" name="username" id="username" placeholder="Username">
                            <span class="focus-input100">
                            </span>
                        </div>

                        <div class="wrap-input100">
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input class="input100 shadow" style="background-color:white" type="password" name="password" id="password" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <a type="button" class="login100-form-btn" href="<?= base_url('home/mahasiswa'); ?>">
                                Login
                            </a>
                        </div>
                        <div class="container-login100-form-btn">
                            <a class="login100-form-linked" href="<?= base_url('home'); ?>">
                                <i class="fa-solid fa-circle-arrow-left"></i> <u>Kembali Ke beranda</u>
                            </a>
                        </div>
                    </span>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/vendor/login/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url() ?>assets/vendor/login/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/vendor/login/bootstrap/js/bootstrap.min.js"></script> -->
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/vendor/login/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/vendor/login/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/js/login/main.js"></script>

</body>

</html>