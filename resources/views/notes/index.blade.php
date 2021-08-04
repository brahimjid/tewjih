@extends('dashboard')
@section('content')
@include('layouts._success')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3>List Notes</h3>
            <a href="{{route('notes.create')}}" class="btn btn-info">Nouveau Note</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table text-center">
            <thead class="bg-light">
            <tr>
                <th scope="col">Matiere</th>
                <th scope="col">Étudiant</th>
                <th scope="col">Note Moyenne</th>
            </tr>
            </thead>
            <tbody>
            @forelse($notes as $note)
                <tr>
                    <td>{{$note->matiere->nom}}</td>
                    <td>{{$note->etudiant->nom}} {{$note->etudiant->prenom}}
                        <strong>( {{$note->etudiant->matricule}} )</strong>
                    </td>
                    <td>{{$note->notemoyenne}}</td>
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
