@extends('dashboard')

@section('content')

    @include('layouts._success')

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="py-4">Ajouter une Note</h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('notes.store')}}" method="post">
                @csrf
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="form-group">

                            <label for="matiere"> Matière</label>
                            <select id="matiere" name="matiere" class="selectpicker form-control">
                                <option></option>
                                @forelse($matieres as $matiere)
                                    <option value="{{$matiere->id}}">{{$matiere->nom}}</option>
                                @empty
                                    <option value="" disabled>No record here</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="etudiant"> Étudiants</label>
                            <select id="etudiant" name="etudiant" class="selectpicker form-control">
                                <option></option>
                                @forelse($etudiants as $etudiant)
                                    <option value="{{$etudiant->id}}">{{$etudiant->matricule}}</option>
                                @empty
                                    <option value="" disabled>No record here</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Note Moyenne</label>
                            <input type="number"
                                   name="notemoyenne"
                                   class="form-control @error('notemoyenne') is-invalid @enderror" placeholder="">
                            @error('notemoyenne')
                            <small class="invalid-feedback">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary mt-1 btn-block">
                                Ajouter
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection
