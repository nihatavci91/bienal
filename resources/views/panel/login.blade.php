<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Milli Piyango">
    <meta name="keywords" content="Milli Piyango">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Milli Piyango</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('panel-assets/images/favicon.ico') }}">
    <!-- Start css -->
    <link href="{{ asset('panel-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="horizontal-layout">
<!-- Start Containerbar -->
<div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
        <div class="auth-box login-box">
            <!-- Start row -->
            <div class="row no-gutters align-items-center justify-content-center">
                <!-- Start col -->
                <div class="col-md-12 col-lg-12">
                    <!-- Start Auth Box -->
                    <div class="auth-box-right">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('panel.login.post') }}" method="POST">
                                    @csrf

                                    @if($errors->any())
                                        <div class="alert alert-danger text-center">
                                            Mail adresinizi yada şifrenizi kontrol ediniz
                                        </div>
                                    @endif

                                    <h4 class="text-primary mb-4">Giriş Yap !</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ old('email') }}" id="email"
                                               name="email" placeholder="Mail Adresinizi Girin" required>
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group">
                                        <input type="password" class="form-control" value="{{ old('password') }}"
                                               id="password" name="password" placeholder="Şifrenizi Girin" required>
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger text-center">{{ $message }}</div>
                                    @enderror
                                    <div class="form-row mb-3">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="remember"
                                                       name="remember" value="true">
                                                <label class="custom-control-label font-14" for="remember">Beni
                                                    Hatırla</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg btn-block font-18">Giriş Yap
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Auth Box -->
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    <!-- End Container -->
</div>
<!-- End Containerbar -->
<!-- Start js -->
<script src="{{ asset('panel-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/popper.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/detect.js') }}"></script>
<script src="{{ asset('panel-assets/js/jquery.slimscroll.js') }}"></script>
<!-- End js -->
</body>
</html>
