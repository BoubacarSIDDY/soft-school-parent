<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="row py-3 pb-0 px-4">
                <div class="col-8 py-4">
                    <h4 class="heading mb-0 fw-bold">
                        {{__('Liste des notes : ')}}
                        <span class="text-primary">{{$title}}</span>
                    </h4>
                </div>
                <div class="col-2 col-md-2">
                    <label for=""><strong>Filtrer par année :</strong></label>
                    <select class="form-select form-select-sm annee" onchange="filtreNote()">
                        @foreach($annees as $key => $annee)
                            <option value="{{$key}}" {{$anneeChoisi == $key ? 'selected' : ''}}>{{$annee}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2 col-md-2">
                    <label for=""><strong>Filtrer par composition :</strong></label>
                    <select class="form-select form-select-sm normal-select composition" onchange="filtreNote()">
                        @foreach($evaluations as $evaluation)
                            <option value="{{$evaluation->id}}" {{$evaluationChoisi == $evaluation->id ? 'selected' : ''}}>{{$evaluation->label.' - '.$evaluation->composition->label}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-header border-0 py-3 pb-0">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-1 table-striped-thead table-wide table-md table-border-last-0">
                        <thead>
                        <tr>
                            <th>Matières</th>
                            <th>Notes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($matieres_classe as $matiere_class)
                            <tr>
                                <td>{{$matiere_class->matiere->name}}</td>
                                <td>
                                    {{isset($notesEleve[$matiere_class->id]) ? $notesEleve[$matiere_class->id] : ''}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
