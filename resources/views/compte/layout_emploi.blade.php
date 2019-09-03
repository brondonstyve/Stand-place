@if (sizeOf($resultat)==0)
<h1 class="centre">
    @if($utilisateur->type=='superadmin' || $utilisateur->type=='admin')
     Cette salle ne possède pas encore d'emploi de temps
    @else
    Vous n'êtes pas encore programmé
    @endif

</h1>
@else


<div class="card-body">
        <a href="#" class="register col-lg-12 modal-content fileupload bouton b1 btn-rounded waves-effect carousel-inner"
        style="font-size: 15px;color: #002b46">
        <span style="float: left;"> Emploi de temps delivré le {{ $resultat[0]->created_at }}
    </a>
    <br>
    <div class="table-responsive " style="margin-top: -20px;">
        <table class="table table-striped m-b-10 centre btn btn-sm" style="font-size: 15px;color: black;text-align: left; ">
            <thead class="btn-info">
                <th>HORAIRES</th>
                <th>7h30-9h30 </th>
                <th>9h30-11h30</th>
                <th>11h30-12h45</th>
                <th>12h45-14h45</th>
            </thead>
            @php
            $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
            @endphp


            <tbody>
                    @for ($j =0 ; $j <sizeOf($jour) ; $j++)
                    <tr>
                            <td>{{ $jour[$j] }}</td>
                            <td>
                                @for ($i =0 ; $i <sizeOf($resultat) ; $i++)

                                      @if ($resultat[$i]->tranche==1 && $resultat[$i]->jour==$jour[$j])
                                            {{ $resultat[$i]->matiere }} <br> <p class="register btn btn-sm btn-reverse">M. {{ $resultat[$i]->nom }}</p>
                                      @endif

                                @endfor
                            </td>

                            <td>
                                @for ($i =0 ; $i <sizeOf($resultat) ; $i++)

                                      @if ($resultat[$i]->tranche==2 && $resultat[$i]->jour==$jour[$j])
                                            {{ $resultat[$i]->matiere }}
                                            <br>
                                            <p class="register btn btn-sm btn-reverse" >M. {{ $resultat[$i]->nom }}</p>
                                      @endif

                                @endfor
                            </td>

                                <td style="background-color: gray"> PAUSE</td>

                            <td>
                                @for ($i =0 ; $i <sizeOf($resultat) ; $i++)

                                      @if ($resultat[$i]->tranche==3 && $resultat[$i]->jour==$jour[$j])
                                            {{ $resultat[$i]->matiere }} <br> <p class="register btn btn-sm btn-reverse">M. {{ $resultat[$i]->nom }}</p>
                                      @endif

                                @endfor
                            </td>


                      </tr>
                    @endfor
            </tbody>




        </table>
    </div>
</div>
@endif
