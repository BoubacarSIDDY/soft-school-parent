@extends("layouts.auth", ['title' => 'Mot de passe'])
@section('content')
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
            <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <h4 class="text-center"><strong>BIENVENUE</strong></h4>
                            <h4 class="text-center mb-4">VEUILLEZ MODIFIER VOTRE MOT DE PASSE</h4>
                            <form class="password-form">
                                @csrf
                                <div class="error-container text-danger text-center"></div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="dz-password">Nouveau mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" id="dz-password" name="password" class="form-control password">
                                    <span class="show-pass eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="confirm-password">Confirmation mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" id="confirm-password" name="confirmation_password" class="form-control confirmation_password">
                                    <span class="show-pass eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-block btnSave">{{__('Enregistrer')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function submitloading(idBtn = ".save"){
            $(idBtn).attr('disabled',true);
            $(idBtn).find('i').removeClass('fa-circle-check').addClass('fa-spinner fa-spin');
        }
        function removesubmitloading(idBtn = ".save", icon="fa-circle-check"){
            $(idBtn).attr('disabled', false);
            $(idBtn).find('i').removeClass('fa-spinner fa-spin').addClass(icon);
        }
        function valid(){
            $('.error-container').empty();
            var password = $.trim($('.password').val());
            var confirmation_password = $.trim($('.confirmation_password').val());
            if (password == '' || confirmation_password == ''){
                $('.error-container').html('Veuillez renseigner tous les champs');
                return false;
            }else if (password.length < 4){
                $('.error-container').html('Le mot de passe doit contenir au moins 4 caractères');
                return false;
            }else if (password != confirmation_password){
                $('.error-container').html('Les deux mots de passe ne correspondent pas');
                return false;
            }
            return true;
        }
        function showAlert(title='',text='',icon='success', reload = false){
            Swal.fire({
                title: title,
                text: text,
                icon: icon
            });
            if(reload){
                setTimeout(function() {
                    location.href='/dashboard';
                }, 1000);
            }
        }
        $('.btnSave').on('click',function(e){
            e.preventDefault();
            if (valid()) {
                submitloading();
                $.ajax({
                    url: "{{route('change-password.save')}}",
                    type: 'POST',
                    data: $('.password-form').serialize(),
                    success: function(data) {
                        removesubmitloading();
                        showAlert(data.title,data.message,data.status,true)
                    },
                    error: function (xhr) {
                        removesubmitloading();
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            let errorHtml = '';
                            $.each(errors, function (key, value) {
                                errorHtml += `<p>${value[0]}</p>`;
                            });
                            $('.error-container').html(errorHtml);
                        } else {
                            showAlert('Erreur', "Une erreur s'est produite", 'error');
                        }
                    },
                })
            }else{
                console.log("Formulaire non valide.");
            }
        });
    </script>
@endsection
