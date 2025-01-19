@extends("layouts.app", ['title' => 'Tableau de bord'])
@section('content')
    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card box-hover">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-box icon-box-lg bg-success-light rounded-circle">
                            <i class="fa fa-users text-success"></i>
                        </div>
                        <div class="total-projects ms-3">
                            <h3 class="text-success count text-start">{{$eleves->count()}}</h3>
                            <span>{{__('Elève(s)')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card box-hover">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-box icon-box-lg bg-primary-light rounded-circle">
                            <i class="fa fa-male text-primary"></i>

                        </div>
                        <div class="total-projects ms-3">
                            <h3 class="text-primary count text-start">{{$garcon}}</h3>
                            <span>{{__('Garçon(s)')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card box-hover">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="icon-box icon-box-lg bg-purple-light rounded-circle">
                            <i class="fa fa-female text-purple"></i>
                        </div>
                        <div class="total-projects ms-3">
                            <h3 class="text-black count text-start">{{$fille}}</h3>
                            <span>{{__('Fille(s)')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive active-projects">
                        <div class="tbl-caption">
                            <h4 class="heading mb-0">{{__('LISTE DES ELEVES')}}</h4>
                        </div>
                        <table id="projects-tbl" class="table">
                            <thead>
                                <tr>
                                    <th>#Action</th>
                                    <th>MATRICULE</th>
                                    <th>NOM</th>
                                    <th>PRENOM</th>
                                    <th>SEXE</th>
                                    <th>DATE DE NAISSANCE</th>
                                    <th>LIEU DE NAISSANCE</th>
                                    <th>CLASSE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($eleves as $eleve)
                                    <tr>
                                        <td class="text-primary">
                                            <a href="{{route('details.eleve',['id'=>$eleve->id])}}" class="text-decoration-underline text-danger">voir details</a>
{{--                                            <a href="{{route('details.eleve',['id'=>$eleve->id])}}" title="Voir details" class="text-decoration-underline btn btn-primary light btn-sharp"><i class="fa fa-eye"></i></a>--}}
                                        </td>
                                        <td class="text-primary"><a href="{{route('details.eleve',['id'=>$eleve->id])}}" class="text-primary text-decoration-underline">{{$eleve->MATR}}</a></td>
                                        <td class="text-black">{{strtoupper($eleve->NOMM)}}</td>
                                        <td class="text-black">{{strtoupper($eleve->PREN)}}</td>
                                        <td class="text-black">{{$eleve->SEXE}}</td>
                                        <td class="text-black">{{format_date($eleve->DNAI)}}</td>
                                        <td class="text-black">{{$eleve->LIEU}}</td>
                                        <td class="text-black fw-bold">{{!empty($eleve->inscription->classe) ? $eleve->inscription->classe->CODC : ''}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datatables/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>
@endsection
