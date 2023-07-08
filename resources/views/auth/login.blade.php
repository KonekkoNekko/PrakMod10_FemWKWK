<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/sass/app.scss')
</head>

<body class="bg-primary" style="height: 100%">
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <div class="p-5 bg-white rounded-3 col-lg-3 border">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-5 text-center">
                    <i class="bi-hexagon-fill fs-1 text-primary"></i>
                    <h4><b>Employee Data Master</b></h4>
                </div>
                <hr>
                <div class="row">
                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="b-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            placeholder="Enter Your Password" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-lg mt-2">
                        <i class="bi bi-box-arrow-right"></i> {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
