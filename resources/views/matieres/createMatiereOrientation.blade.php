@extends('dashboard')

@section('content')

    <div class="container">

        <div class="card">
            <form action="{{route('matieres.store')}}" method="post">
                @csrf
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>Ajouter une Matière Orientation</h3>
                        <a href="{{route('matieres.orientation.index')}}" class="btn btn-info">retourner</a>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="matiere_id">Matiere</label>
                                <select class="form-control selectpicker  @error('coefficient') is-invalid @enderror" id="matiere_id" name="matiere_id">
                                    <option disabled selected>Choisir</option>
                                    @foreach($matieres as $mat)
                                        <option value="{{$mat->id}}">{{$mat->nom}}</option>
                                    @endforeach
                                </select>
                                @error('matiere_id')
                                <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="filiere_id">Filiere</label>
                                <select class="form-control selectpicker  @error('coefficient') is-invalid @enderror" id="filiere_id" name="filiere_id">
                                    <option disabled selected>Choisir</option>
                                    @foreach($filieres as $fil)
                                        <option value="{{$fil->id}}">{{$fil->nom}}</option>
                                    @endforeach
                                </select>
                                @error('nom')
                                <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="coefficient">Coefficient</label>
                                <input type="number" class="form-control @error('coefficient') is-invalid @enderror"
                                       name="coefficient" id="coefficient" placeholder="Coefficiant....">
                                @error('coefficient')
                                <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Ajouter" class="btn btn-primary">
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>

@endsection


