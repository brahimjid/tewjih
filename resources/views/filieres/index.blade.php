@extends('dashboard')

@section('content')

    @include('layouts._success')

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>List Filieres</h3>
                <a href="{{route('filieres.create')}}" class="btn btn-info">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <thead class="">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    {{--<th scope="col">Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @forelse($filieres as $filiere)
                    <tr>
                        <td>{{$filiere->id}}</td>
                        <td>{{$filiere->nom}}</td>
                        {{-- <td>
                             <a href="" class="btn btn-info">Edit</a>
                             <a href="" class="btn btn-danger">Delete</a>
                         </td>--}}
                    </tr>
                @empty
                    <tr>
                        <td>No Record Found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>


@stop
