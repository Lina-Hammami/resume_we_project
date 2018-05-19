@extends('layouts.app')

@section('content')

    <div class="row">
        <div class=" col-md-10 col-md-offset-1">
            <div class="row">
                <a href="/ajoutprojet" class="btn btn-plus btn-lg navbar-right">
                    <span class="glyphicon glyphicon-plus"></span> Ajouter un projet
                </a>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#_Id </th>
                            <th>Titre</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projets as $proj)
                            <tr>
                                <td>{{ $proj->id }}</td>
                                <td>{{ $proj->titre }}</td>
                                <td>{{ $proj->type }}</td>
                                <td>{{ $proj->description }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info">&nbsp;&nbsp;Afficher &nbsp;</a>
                                    <a href="" class="btn btn-sm btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection