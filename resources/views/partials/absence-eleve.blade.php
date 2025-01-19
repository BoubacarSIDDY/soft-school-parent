<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0 py-3 pb-0">
                <h4 class="heading mb-0 fw-bold">{{__('Liste des absences')}}</h4>
                <div class="clearfix">
                    <label for=""><strong>Filtrer par année :</strong></label>
                    <select class="form-select form-select-sm normal-select" onchange="filtreAbsence(this.value)">
                        <option value="*">Toutes les années</option>
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
                            <th>Date d'absence</th>
                            <th>Motif</th>
                            <th>Période</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>AudioEngine HD3</td>
                            <td>#PXF-578</td>
                            <td>Nov 01, 2024</td>
                        </tr>
                        <tr>
                            <td>Google Pixel 6 Pro</td>
                            <td>#XGY-356</td>
                            <td>Sep 27, 2024</td>
                        </tr>
                        <tr>
                            <td>Dell 32 UltraSharp</td>
                            <td>#SRR-678</td>
                            <td>Jul 09, 2024</td>
                        </tr>
                        <tr>
                            <td>Google Pixel 6 Pro</td>
                            <td>#XGY-356</td>
                            <td>May 14, 2024</td>
                        </tr>
                        <tr>
                            <td>AudioEngine HD3</td>
                            <td>#XGY-356</td>
                            <td>Dec 30, 2024</td>
                        </tr>
                        <tr>
                            <td>Google Pixel 6 Pro</td>
                            <td>#SRR-678</td>
                            <td>Oct 25, 2024</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
