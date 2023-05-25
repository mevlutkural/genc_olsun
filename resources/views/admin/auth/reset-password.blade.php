<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/iconsax.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/metismenu.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/simplebar.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/calendar.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jbox.all.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/editor.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/loaders.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/header.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/footer.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dark-mode.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">
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
                            <div class="col-sm-12 mb-3">
                                <label for="email">E-Posta</label>
                                <input id="email" type="email" name="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            {{-- <div class="col-sm-12 mb-3">
                                <label for="password">Şifre</label>
                                <input id="password" type="password" name="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-sm-12 mb-5">
                                <label for="password_confirmation">Şifre Doğrulama</label>
                                <input id="password_confirmation" type="password_confirmation"
                                    name="password_confirmation"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div> --}}
                            <div class="form-group mt-2">
                                <button type="submit" class="default-btn">Şifreyi Sıfırla</button>
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

            axios.post('/dashboard/login', formData).then((res) => {

                if (res.data == 'success') {
                    location.href = "{{ route('dashboard') }}";
                }

            }).catch((err) => {

                toastr.error('Hata', 'Girdiğiniz bilgileri kontrol ediniz.');

            })

        });
    </script>
</body>

</html>
