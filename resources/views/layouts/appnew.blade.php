<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- START: Head-->
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('dist/images/favicon.ico') }}" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{ asset('dist/vendors/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}">        
        <link rel="stylesheet" href="{{ asset('dist/vendors/flags-icon/css/flag-icon.min.css') }}"> 

        <!-- END Template CSS-->     

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="{{ asset('dist/vendors/social-button/bootstrap-social.css') }}"/>   
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
        <!-- END: Custom CSS-->

    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">
        <!-- START: Main Content-->
        <div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">

                    <form method="POST" action="{{ route('login') }}" class="row row-eq-height lockscreen  mt-5 mb-5">
                        @csrf
                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            <div class="form-group mb-3">
                                <label for="emailaddress">{{ __('Adresse e-mail') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress" name="email" placeholder="  Tapez adresse e-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for="password">{{ __('Mot de passe') }}</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder=" Tapez votre mot de passe" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                    <label class="custom-control-label" for="checkbox-signin">Souviens-toi de moi</label>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit"> Se connecter </button>
                            </div>
                            <p class="my-2 text-muted">--- Ou connectez-vous avec ---</p>
                            <a class="btn btn-social btn-dropbox text-white mb-2">
                                <i class="icon-social-dropbox align-middle"></i>
                            </a>
                            <a class="btn btn-social btn-facebook text-white mb-2">
                                <i class="icon-social-facebook align-middle"></i>
                            </a>                                   
                            <a class="btn btn-social btn-github text-white mb-2">
                                <i class="icon-social-github align-middle"></i>
                            </a>
                            <a class="btn btn-social btn-google text-white mb-2">
                                <i class="icon-social-google align-middle"></i>
                            </a>
                            <div class="mt-2">Vous n'avez pas de compte ? <a href="/register">Créer un compte</a></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- END: Content-->

        <!-- START: Template JS-->
        <script src="{{ asset('dist/vendors/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('dist/vendors/moment/moment.js') }}"></script>
        <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>    
        <script src="{{ asset('dist/vendors/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- END: Template JS-->  
    </body>
    <!-- END: Body-->
</html>
