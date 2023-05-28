<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/iconsax.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/metismenu.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/simplebar.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/calendar.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/jbox.all.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/editor.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/loaders.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/header.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/footer.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/dark-mode.css">
    <link rel="stylesheet" href="{{ asset('dashboard_template/assets') }}/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/favicon.svg">
    <!-- Title -->
    <title>Giriş Yap</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <img src="{{ asset('assets') }}/images/logo.png" alt="main-logo">
    </div>
    <!-- End Preloader Area -->

    <!-- Start Account Area -->
    <div class="account-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="account-content">
                        <div class="account-header">
                            <a href="index.html">
                                <img src="{{ asset('assets') }}/images/logo.png" alt="main-logo"
                                    style="max-width:100px;">
                            </a>
                            <h3>Giriş Yap</h3>
                        </div>
                        <form id="loginForm" class="account-wrap">
                            <div class="form-group mb-24 icon">
                                <input type="email" name="email" class="form-control" placeholder="E-Posta">
                                <img src="{{ asset('assets') }}/images/icon/sms.svg">
                            </div>
                            <div class="form-group mb-24 icon">
                                <input type="password" name="password" class="form-control" placeholder="Şifre">
                                <img src="{{ asset('assets') }}/images/icon/key.svg">
                            </div>
                            <div class="form-group mb-24">
                                <a href="{{ route('reset-password-form') }}" class="forgot">Şifremi unuttum</a>
                            </div>
                            <div class="form-group mb-24">
                                <button type="submit" class="default-btn">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/metismenu.min.js"></script>
    <script src="{{ asset('assets') }}/js/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/js/geticons.js"></script>
    <script src="{{ asset('assets') }}/js/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets') }}/js/jbox.all.min.js"></script>
    <script src="{{ asset('assets') }}/js/editor.js"></script>
    <script src="{{ asset('assets') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('assets') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('assets') }}/js/ajaxchimp.min.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <script>
        const form = document.getElementById('loginForm');

        form.addEventListener('submit', function(e) {

            e.preventDefault();

            const formData = new FormData(this);

            axios.post('/login', formData).then((res) => {

                if (res.data == 'success') {
                    location.href = "{{ route('dashboard') }}";
                }

            }).catch((err) => {

                toastr.error('Hata', 'Girdiğiniz bilgileri kontrol ediniz.');

            });

        });
    </script>
</body>

</html>
