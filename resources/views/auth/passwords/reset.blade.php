<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project Manager - update password</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="{{asset('template/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/remixicon/fonts/remixicon.css')}}">
</head>
<body class=" ">

    @include('partials.loader')

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-6 bg-primary content-left">
                                        <div class="p-3">
                                            <h2 class="mb-2 text-white">Reset Password</h2>

                                            <p></p>

                                            <form method="POST" action="{{ route('password.update') }}">

                                                @csrf

                                                <input type="hidden" name="token" value="{{ $token }}">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="email" value="{{ old('email') }}" type="email" placeholder=" ">
                                                            <label>Email</label>

                                                            @error('email')
                                                                <div class="invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                                            <label>Password</label>
                                                            @error('email')
                                                                <div class="invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="password_confirmation" type="password" placeholder=" ">
                                                            <label>Password confirmation</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-white">Reset</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <img src="{{asset('template/images/login/01.png')}}" class="img-fluid image-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{asset('template/js/backend-bundle.min.js')}}"></script>
    <script src="{{asset('template/js/table-treeview.js')}}"></script>
    <script src="{{asset('template/js/customizer.js')}}"></script>
    <script async src="{{asset('template/js/chart-custom.js')}}"></script>
    <script async src="{{asset('template/js/slider.js')}}"></script>
    <script src="{{asset('template/js/app.js')}}"></script>
    <script src="{{asset('template/vendor/moment.min.js')}}"></script>
</body>
</html>