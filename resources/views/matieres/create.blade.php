@extends('dashboard')

@section('content')
    <div class="container">

        <div class="card">
            <form action="{{route('matieres.store')}}" method="post">
                @csrf
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>Ajouter une Matière</h3>
                        <a href="{{route('matieres.index')}}" class="btn btn-info">retourner</a>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                       name="nom" id="nom">
                                @error('nom')
                                <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <label for="coefficient">Coefficiant</label>--}}
{{--                                <input type="number" class="form-control @error('coefficient') is-invalid @enderror"--}}
{{--                                       name="coefficient" id="coefficient" placeholder="Coefficiant....">--}}
{{--                                @error('coefficient')--}}
{{--                                <small class="invalid-feedback">{{$message}}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

                            <div class="form-group">
                                <label for="code">Code</label>
                                <input name="code" class="form-control @error('code') is-invalid @enderror" type="text" id="code"/>
                                @error('code')
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

@stop
