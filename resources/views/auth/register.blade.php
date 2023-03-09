<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project Manager - register</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />

    <link rel="stylesheet" href="{{asset('template/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/backend.css?v=1.0.0')}}">
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
                                            <h2 class="mb-2 text-white">Sign Up</h2>
                                            <p>Create your account.</p>
                                            <form action="{{route('register')}}" method="post">

                                                @csrf

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="name" value="{{ old('name') }}" type="text" placeholder=" ">
                                                            <label>User Name</label>
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="email" value="{{ old('email') }}" type="text" placeholder=" ">
                                                            <label>Email</label>
                                                            @error('email')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="password" value="{{ old('password') }}" type="password" placeholder=" ">
                                                            <label>Password</label>
                                                            @error('password')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" name="password_confirmation" value="{{ old('password') }}" type="password" placeholder=" ">
                                                            <label>Confirm Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-white">Sign Up</button>
                                                <p class="mt-3">
                                                    Already have an Account <a href="{{route('login')}}" class="text-white text-underline">Sign In</a>
                                                </p>
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
    <script src="{{asset('template/js/customizer.js')}}"></script>
    <script src="{{asset('template/js/app.js')}}"></script>
</body>
</html>
