<div class="row">
    {{-- info eleve --}}
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="card-title">Information élève</h6>
            </div>
            <div class="card-body">
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Matricule</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->MATR}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Nom</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{strtoupper($eleve->NOMM)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Prénom</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{strtoupper($eleve->PREN)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Sexe</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->SEXE}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Date de naissance</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{format_date($eleve->DNAI)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Lieu de naissance</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->LIEU}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Pays</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->PAYS}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Nationalité</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{strtoupper($eleve->NATI)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Numero téléphone</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->TELE}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- info academique --}}
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="card-title">Information academique</h6>
            </div>
            <div class="card-body">
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Classe</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{!empty($inscription->classe) ? $inscription->classe->CODC : ''}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Année academique</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$inscription->IANNE}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- info parents --}}
    <div class="col-xl-5">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="card-title">Information parents</h6>
            </div>
            <div class="card-body">
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">PERE</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{strtoupper($eleve->NOM1.' '.$eleve->PREN1)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">TELEPHONE PERE</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->TEL1}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Profession père</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->PRO1}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">MERE</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{strtoupper($eleve->NOM2.' '.$eleve->PREN2)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">TELEPHONE MERE</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->TEL2}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Profession mère</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->PRO2}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Tuteur</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{strtoupper($eleve->NOM3.' '.$eleve->PREN3)}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">TELEPHONE tuteur</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->TEL1}}</span>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-6">
                        <span class="fs-13">Profession tuteur</span>
                    </div>
                    <div class="col-6">
                        <span class="fs-13 fw-semibold">{{$eleve->PRO3}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
