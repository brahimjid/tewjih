@extends('dashboard')

@section('content')

    @include('layouts._success')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3>Matiers</h3>
                            <a href="{{route('matieres.create')}}" class="btn btn-info">Ajouter Matier</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Code</th>

                            </tr>
                            </thead>

                            <tbody>
                            @forelse($matieres as $matiere)
                                <tr>
                                    <td>{{$matiere->nom}}</td>
                                    <td>{{$matiere->code}}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No record</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{ $matieres->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
