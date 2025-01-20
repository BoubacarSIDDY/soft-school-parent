@extends("layouts.app", ['title' => 'Détails'])
@section('content')
    <div class="card profile-overview">
        <div class="card-body d-flex">
            <div class="clearfix">
                <div class="d-inline-block position-relative me-sm-4 me-3 mb-3 mb-lg-0">
                    <img src="{{asset('assets/images/pic7.jpg')}}" alt="" class="rounded-4 profile-avatar">
                    <span class="fa fa-circle border border-3 border-white text-success position-absolute bottom-0 end-0 rounded-circle"></span>
                </div>
            </div>
            <div class="clearfix d-xl-flex flex-grow-1">
                <div class="clearfix pe-md-5">
                    <h3 class="fw-semibold mb-1">{{$eleve->NOMM.' '.$eleve->PREN}} <img src="{{asset('assets/images/blue-tick.png')}}" alt="Blue Tick"></h3>
                    <ul class="d-flex flex-wrap fs-6" style="padding-left:0">
                        <li class="me-3 d-inline-flex"><i class="las la-flag me-1 fs-18"></i>{{$eleve->NATI}}</li>
                        <li class="me-3 d-inline-flex"><i class="las la-map-marker me-1 fs-18"></i>{{strtoupper($eleve->ADRE)}}</li>
                    </ul>
                    <div class="d-md-flex d-none flex-wrap">
                        <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                            <div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 1V23" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="clearfix ms-2">
                                <h3 class="mb-0 fw-semibold lh-1">$1,250</h3>
                                <span class="fs-14">Total Earnings</span>
                            </div>
                        </div>
                        <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                            <div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="clearfix ms-2">
                                <h3 class="mb-0 fw-semibold lh-1">125</h3>
                                <span class="fs-14">New Referrals</span>
                            </div>
                        </div>
                        <div class="border outline-dashed rounded p-2 d-flex align-items-center me-3 mt-3">
                            <div class="avatar avatar-md style-1 bg-primary-light text-primary rounded d-flex align-items-center justify-content-center">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 21V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V21" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="clearfix ms-2">
                                <h3 class="mb-0 fw-semibold lh-1">25</h3>
                                <span class="fs-14">New Deals</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer py-0 d-flex flex-wrap justify-content-between align-items-center">
            <ul class="nav nav-underline nav-underline-primary nav-underline-text-dark nav-underline-gap-x-0" id="tabMyProfileBottom" role="tablist">
                <li class="nav-item ms-1" role="presentation">
                    <a href="#" class="nav-link py-3 border-3 text-black active liInformation">Information</a>
                </li>
                <li class="nav-item ms-1" role="presentation">
                    <a href="#" class="nav-link py-3 border-3 text-black liAbsence">Absences</a>
                </li>
                <li class="nav-item ms-1" role="presentation">
                    <a href="#" class="nav-link py-3 border-3 text-black liNote">Notes</a>
                </li>
            </ul>
        </div>

    </div>
    <div class="tab-content" id="tabContentMyProfileBottom">
        @include('partials.info-eleve',['eleve'=>$eleve,'inscription'=>$inscription])
    </div>
@endsection

@section('js')
    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>

    <script>
        function removeActive(){
            $('.nav-link').removeClass('active');
        }
        // onglet Information
        $('.liInformation').click(function (e){
           e.preventDefault();
            removeActive()
            $(this).addClass('active')
           var url = '/details-eleve/info-eleve/'+'{{$eleve->id}}';
           getData(url,{});
        });
        // Onglet Absence
        $('.liAbsence').click(function (e){
            e.preventDefault();
            removeActive()
            $(this).addClass('active')
            filtreAbsence();
        });
        // Onglet Note
        $('.liNote').click(function (e){
            e.preventDefault();
            removeActive()
            $(this).addClass('active');
            filtreNote();
        });
        // fonction qui filtre les notes
        function filtreNote(){
            var id = '{{$eleve->id}}';
            var url = '/details-eleve/note/'+id;
            var evaluationId = $('.composition').val();
            var annee_id = $('.annee').val();
            if(annee_id){ // si l'annee id est choisie
                url += '?annee_id='+annee_id;
            }else{ // sinon on prends l'année de la derniere inscription
                url += '?annee_id='+{{$inscription->annee_id}};
            }
            var data = {
                inscription_id:{{$inscription->id}},
                matricule : {{$eleve->MATR}},
                evaluation_id : evaluationId
            };
            getData(url,data);
        }
        // fonction qui filtre les absences
        function filtreAbsence(annee_id=null){
            var id = '{{$eleve->id}}';
            var url = '/details-eleve/absence/'+id;
            if(annee_id){ // si l'annee id est choisie dans "absence-eleve.blade.php"
                url += '?annee_id='+annee_id;
            }else{ // sinon on prends l'année de la derniere inscription
                url += '?annee_id='+{{$inscription->annee_id}};
            }
            var data = {
                inscription_id:{{$inscription->id}},
                matricule : {{$eleve->MATR}},
            };
            getData(url,data);
        }

        // récuperation des données
        function getData(url,data){
            $.ajax({
                type : 'POST',
                url : url,
                data : data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Protection CSRF
                },
                success : function (html){
                    $('.tab-content').html(html)
                },
                error : function (){

                }
            })
        }
    </script>
@endsection
