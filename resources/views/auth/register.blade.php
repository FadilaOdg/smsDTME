@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dispatching</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/assets/login/images/icons/favicon.ico"/>

    <link rel="stylesheet" type="text/css" href="/assets/login/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/login/vendor/animate/animate.css">
    
    <link rel="stylesheet" type="text/css" href="/assets/login/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/login/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/login/css/main.css">

</head>

<body>
    
    <div class="limiter">
        <div class="container-login100">

            <br><br><br><br><br><br><br><br><br>
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/assets/login/images/img-01.png" alt="IMG">
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        SMS DTME
                    </span>

                    <!--<p>Après enrégistrement,vous devez vous loguer.</p><br>-->
<div class="container">
    <div class="row justify-content-center">
        
        <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fonction" class="col-md-4 col-form-label text-md-right">Fonction</label>

                            <div class="col-md-6">
                                <input id="fonction" type="text" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ old('fonction') }}" required autocomplete="fonction" autofocus>

                                @error('fonction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departement" class="col-md-4 col-form-label text-md-right">Département</label>

                            <div class="col-md-6">
                                <input id="departement" type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" value="{{ old('departement') }}" required autocomplete="departement" autofocus>

                                @error('departement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="service" class="col-md-4 col-form-label text-md-right">Service</label>

                            <div class="col-md-6">
                                <input id="service" type="text" class="form-control @error('service') is-invalid @enderror" name="service" value="{{ old('service') }}" required autocomplete="service" autofocus>

                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="division" class="col-md-4 col-form-label text-md-right">Division</label>

                            <div class="col-md-6">
                                <input id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ old('division') }}" required autocomplete="division">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                            <div class="col-md-6">
                                <input id="telephone" type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{route('login')}}">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div></div></div></div>
<script src="/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="/assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="/assets/login/vendor/select2/select2.min.js"></script>

    <script src="/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script src="/assets/login/js/main.js"></script>

</body>
</html>
@endsection
