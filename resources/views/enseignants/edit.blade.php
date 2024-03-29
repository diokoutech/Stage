
@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb border-0">
                      <li class="breadcrumb-item "><a href="{{ route('prof-index')}}">Enseignants</a></li>
                      <li class="breadcrumb-item" aria-current="page">Modification d'un enseignant</li>
                    </ol>
                </nav>   
            </div>
            </div>

            <div class="row bg-white pt-3 mt-2 ">
                <div class="col-sm-12">
                    <h5>Modifiez les infos de l'enseignant:</h5>
                    <br/>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <form action="{{ route('prof-update', ['id' => $enseignant->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row d-flex justify-content-around">
                            <div class="col-5">
                                <div class="form-group mt-2 mr-3">
                                    <label for="name">Matricule:</label>
                                    <input type="text" id="matricule" name="matricule" required class="form-control" 
                                        value ="{{$enseignant->matricule}}"
                                        placeholder="Matricule..."/>
                                </div>
                                <div class="form-group mt-2 mr-3">
                                    <label for="name">Prenom:</label>
                                    <input type="text" id="prenom" name="prenom" required class="form-control" 
                                        value ="{{$enseignant->prenom}}"
                                        placeholder="Prenoms..."/>
                                </div>
                                <div class="form-group mt-2 mr-3">
                                    <label for="name">Nom:</label>
                                    <input type="text" id="nom" name="nom" 
                                        value ="{{$enseignant->nom}}"
                                        required class="form-control" placeholder="Nom..."/>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group mt-2 mr-3">
                                    <label for="name">E-mail:</label>
                                    <input type="email" id="email" name="email" required class="form-control" 
                                        value ="{{$enseignant->email}}"
                                        placeholder="Adresse e-mail..."/>
                                </div>
                                <div class="form-group mt-2 mr-3">
                                    <label for="name">Numero portable:</label>
                                    <input type="text" id="portable" name="portable" required class="form-control" 
                                        value ="{{$enseignant->portable}}"
                                        placeholder="Numero de portable..."/>
                                </div>
                                <div class="form-group mt-2 mr-3">
                                    <label for="name">Adresse:</label>
                                    <input type="text" id="specialite" name="specialite"
                                        value ="{{$enseignant->specialite}}"
                                         required class="form-control" placeholder="specialite..."/>
                                </div>
                            </div>
                        </div>
                       
                        

                        <div class="form-group float-left mt-4 text-center">
                        <button type="submit" class="btn btn-md btn-primary" >Mettre à jour</button>
                        </div>

                    </form>
                </div>
            
            </div>

       
    </div><!--Fin de Container-->
@endsection