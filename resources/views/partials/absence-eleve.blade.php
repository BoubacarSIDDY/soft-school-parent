<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0 py-3 pb-0">
                <h4 class="heading mb-0 fw-bold">
                    {{__('Liste des absences : ')}}
                    <span class="text-primary">{{$title}}</span>
                </h4>
                <div class="clearfix">
                    <label for=""><strong>Filtrer par année :</strong></label>
                    <select class="form-select form-select-sm normal-select" onchange="filtreAbsence(this.value)">
                        @foreach($annees as $key => $annee)
                            <option value="{{$key}}" {{$anneeChoisi == $key ? 'selected' : ''}}>{{$annee}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-1 table-striped-thead table-wide table-md table-border-last-0">
                        <thead>
                        <tr>
                            <th>Type</th>
                            <th>Date d'absence</th>
                            <th>Période</th>
                            <th>Classe</th>
                            <th>Nombre d'heures</th>
                            <th>Justificatif</th>
                            <th>Motif</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($absences as $absence)
                                <tr>
                                    <td>{{$absence->type}}</td>
                                    <td>{{format_date($absence->date_absence)}}</td>
                                    <td>{{$absence->classe->CODC}}</td>
                                    <td>{{$absence->composition->label}}</td>
                                    <td>{{$absence->Nb_heure}}</td>
                                    <td>{{$absence->justificatif}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
