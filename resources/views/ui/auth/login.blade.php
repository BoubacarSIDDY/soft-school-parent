@extends("layouts.auth", ['title' => 'Se connecter'])
@section('content')
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
                                    <input type="password" id="dz-password" name="password" class="form-control">
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
@endsection
