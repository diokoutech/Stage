@extends('layouts.encadreur')
@section('content')
<div class='container-fluid mx-2'>
    <div class="row justify-content-center">     
        <h4> <b>{{ $stages->count() }}</b> Stage(s) Enregistré(s) </h4>                  
            <hr class="featurette-divider">
        </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover ">
                        <thead class="table-dark">
                            <tr>
                                <th>id</th>
                                <th>Entreprise</th>
                                <th>Lieu</th>
                                <th>Tuteur stage</th>                          
                                <th>Etudiant</th>                          
                                <th>Email Etudiant</th>                          
                                <th>Debut stage</th>                          
                                <th>Fin stage</th>                          
                                <th>Fiche</th>                       
                                <th>Date de transmission</th>                                                             
                                <th>Actions</th>                          
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($stages as $stage)
                                <tr>
                                    <td>{{$stage->id}}</td>   
 
                                    <td>{{$stage->entreprise}}</td>   
                                    <!--<td>{{$stage->secteur_activite}}</td>   -->
                                    <td>{{$stage->lieu}}</td>  
                                    <!-- 
                                    <td>{{$stage->theme}}</td>   
                                    -->
                                    <td>{{$stage->tuteur_entreprise}}</td>   
                                    <td>{{$stage->tuteur_entreprise_tel}}</td>   
                                    <td>{{$stage->tuteur_entreprise_email}}</td>   
                                    <td>{{$stage->date_debut}}</td>   
                                    <td>{{$stage->date_fin}}</td>   
                                    <td><a target="_blank" href="../../../../Fiches_Stages/{{ $stage->fiche }}" class="text-dark">fiche de renseignement</a></td>    
                                    <td>{{$stage->created_at}}</td>  
                                     <td class='d-flex'>
                                        <a href="{{ route('encadreur-show', ['id'=>$stage->id])}}" class="btn btn-sm btn-info m-2 text-white"><i class="fas fa-eye"></i></a>
                                     </td>          
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $stages->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection