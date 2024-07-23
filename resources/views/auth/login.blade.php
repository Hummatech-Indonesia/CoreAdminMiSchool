<!DOCTYPE html>
<html lang="id">
<head>
    <title>Mischool Admin | Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo/logo-M.png') }}">
    <link rel="stylesheet" href="https://school.mischool.id/assets/dist/css/app.css">
    <link id="themeColors" rel="stylesheet" href="https://school.mischool.id/assets/dist/css/style.min.css">
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-xl-7 col-xxl-8">
                        <a href="javascript:void(0)" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                            <img src="{{ asset('assets/images/logo/logo-M.png') }}" width="8%" alt="">
                        </a>
                        <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(89vh - 80px);">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-4">
                        <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">
                                <h2 class="mb-3 fs-7 fw-bolder">Selamat Datang di Mischool</h2>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" id="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div id="failed-login" class="text-center error-text mb-3"></div>

                                    <div class="mb-3">
                                        <input type="checkbox" id="show">
                                        <label for="show" class="">Tampilkan Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Masuk</button>
                                </form>
                                {{-- <form method="POST" id="save-token" class="hidden" action="https://school.mischool.id/login">
                                    <input type="hidden" name="_token" value="lUfDHDTYzWukOghImBrnfOh2IC7hpLUUXwIdWCOz" autocomplete="off"> <input id="token" type="hidden" name="bearer">
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('admin_assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#show').click(function() {
                var passwordInput = $('#password');
                var passwordConfirmationInput = $('#password_confirmation');
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    passwordConfirmationInput.attr('type', 'text');
                } else {
                    passwordInput.attr('type', 'password');
                    passwordConfirmationInput.attr('type', 'password');
                }
            });
        });
    </script>
</body>
</html>
