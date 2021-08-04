@extends('dashboard')

@section('content')

    @include('layouts._success')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3>Matiers D'orientaion</h3>
                            <a href="{{route('matieres.orientation.create')}}" class="btn btn-info">Ajouter</a>
                        </div>

                    </div>


                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Code</th>
                                <th>Coefficient</th>
                                <th>Filiere</th>

                            </tr>
                            </thead>

                            <tbody>
{{--                            {{dd($matieres_orientations[0]->matiere)}}--}}
                            @forelse($matieres_orientations as $matiere_orientation)

                              <tr>
                                    <td>{{$matiere_orientation->matiere->nom}}</td>
                                    <td>{{$matiere_orientation->matiere->code}}</td>
                                    <td>{{$matiere_orientation->coef}}</td>
                                    <td>{{$matiere_orientation->filiere->nom}}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No record</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $matieres_orientations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


