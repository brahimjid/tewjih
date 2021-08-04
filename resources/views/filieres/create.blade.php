@extends('dashboard')

@section('content')
    <div class="card shadow-lg">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="">Ajouter Filiere</h3>
                <a href="{{route('filieres.index')}}" class="btn btn-info">Nouveau Filiere</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="{{route('filieres.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="@error('nom') is-invalid @enderror form-control" name="nom" id="nom" placeholder="Nome">
                        </div>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

