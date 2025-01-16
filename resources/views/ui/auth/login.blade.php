<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <!--Title-->
        <title>{{env('APP_NAME')}} | Se connecter</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="DexignZone">
        <meta name="robots" content="index, follow">

        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body style="background-image:url('assets/images/bg.png'); background-position:center;">
        <div class="authincation fix-wrapper">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <div class="text-center mb-3">
                                            <img src="{{asset('assets/logo/logo.png')}}" alt="">
                                        </div>
                                        <h4 class="text-center mb-4"><strong>ESPACE PARENT</strong></h4>
                                        <!-- Affichage des messages d'erreur -->
                                        @if ($errors->any())
                                            <div class="text-center" style="color: red;">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{route('login')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="mb-1 form-label">Numéro téléphone</label>
                                                <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Entrer votre numéro de téléphone">
                                            </div>

                                            <div class="mb-3 position-relative">
                                                <label class="form-label" for="dz-password">Mot de passe</label>
                                                <input type="password" id="dz-password" class="form-control">
                                                <span class="show-pass eye">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
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

        <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.min.js')}}"></script>
        <script src="{{asset('assets/js/deznav-init.js')}}"></script>
    </body>
</html>
