@extends('dashboard')

@section('content')
    <div class="card shadow-lg">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="">Modifier Étudiant</h3>
                <a href="{{route('etudiants.index')}}" class="btn btn-info">retourner</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form action="{{route('etudiants.update', $etudiant->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="matricule">Matricule</label>
                            <input type="text" class="@error('matricule') is-invalid @enderror form-control"
                                   name="matricule" id="matricule" placeholder="ID" value="{{$etudiant->matricule}}">
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <label for="prenon">Prenom</label>
                                <input type="text" class="@error('nom') is-invalid @enderror form-control" name="prenom"
                                       id="prenon" placeholder="Prenom" value="{{$etudiant->prenom}}">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="@error('prenom') is-invalid @enderror form-control" name="nom"
                                       id="nom" placeholder="Nom" value="{{$etudiant->nom}}">
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="date-nais">Date De Naissance</label>
                                    <input type="date" class="@error('date_nais') is-invalid @enderror form-control"
                                           name="date_nais" id="date-nais"
                                           placeholder="Date Naissance" value="{{ $etudiant->date_naiss}}">
                            </div>
                            <div class=" form-group col-12 col-md-6">
                                    <label for="filiere">Filiere</label>
                                    <select class="@error('filiere') is-invalid @enderror custom-select"
                                            name="filiere" id="filiere">
                                        @forelse($filieres as $filiere)
                                            <option
                                                @if($etudiant->filiere->id == $filiere->id) selected @endif
                                                value="{{$filiere->id}}">
                                                {{$filiere->nom}}
                                            </option>
                                        @empty
                                            <option value="" disabled>No Record</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection('content')


