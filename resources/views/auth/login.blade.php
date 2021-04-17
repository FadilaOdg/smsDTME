
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMS DTME</title>
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
    <div class="wrap-login100">

 

        <br><br><br>
        <div class="login100-pic js-tilt" data-tilt>
                    <!--<img src="/assets/login/images/img-01.png" alt="IMG">-->
                    <img class="navbar-brand" src="/assets/admin/img/avatars/logo.png"width="300" height="300">
                    <span class="navbar-text">
      <strong>Centre National de Conduite</strong>
    </span>
                </div>

                <div class="login100-form validate-form">
                    <span class="login100-form-title">
                        SMS DTME
                    </span>
                    
<br>
<div class="container">
    <div class="row justify-content-center">
        
            
                <div class="card-header">{{ __('Authentifiez vous!') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Se connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
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
