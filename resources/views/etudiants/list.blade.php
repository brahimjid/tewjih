@extends('dashboard')

@section('content')

    @include('layouts._success')

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>List Étudiants</h3>
                <a href="{{route('etudiants.create')}}" class="btn btn-info">Nouveau Étudiant</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th scope="col">Matricule</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Filière</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($etudiants as $etudiant)
                    <tr>
                        <td>{{$etudiant->matricule}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->date_naiss}}</td>
                        <td>{{$etudiant->filiere->nom}}</td>
                        <td>{{$etudiant->niveau->nom}}</td>
                        <td>
                            <a href="{{route('etudiants.edit' , $etudiant->id)}}" class="btn btn-info">Modifier</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
                                supprimer
                            </button>
                            <form action="{{route('etudiants.destroy' , $etudiant->id)}}" method="post" id="delete-fil"
                                  style="display: none">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No record found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>



@endsection


<!--Delete Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Supprimer etudiant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Vous etes sur?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button onclick="event.preventDefault(); document.getElementById('delete-fil').submit()" type="button"
                        class="btn btn-danger">Oui</button>
            </div>
        </div>
    </div>
</div>
