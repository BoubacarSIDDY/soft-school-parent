@extends("layouts.app", ['title' => 'Nouveau mot de passe'])
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Forms with icon</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="form-valide-with-icon needs-validation" novalidate>
                        <div class="mb-3 vertical-radius">
                            <label class="text-label form-label required" for="validationCustomUsername">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                <input type="text" class="form-control  br-style" id="validationCustomUsername" placeholder="Enter a username.." required>
                                <div class="invalid-feedback">
                                    Entrer votre
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 vertical-radius">
                            <label class="text-label form-label required" for="dz-password">Password</label>
                            <div class="input-group transparent-append">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                <input type="password" class="form-control" id="dz-password" placeholder="Choose a safe one.." required>
                                <span class="input-group-text show-pass  br-style">
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
                                <div class="invalid-feedback">
                                    Entrer votre mot de passe
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn me-2 btn-primary">{{__('Enregistrer')}}</button>
                        <button type="submit" class="btn btn-danger light">Annnuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
