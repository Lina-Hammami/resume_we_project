@extends('layouts.app')

@section('content')

    <div class="row">
        <div class=" col-md-10 col-md-offset-1">
            <div class="row">
                <span class="btn-lg navbar-right">&nbsp;&nbsp;
                </span>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#_Id </th>
                            <th>From</th>
                            <th>Content</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $msg)
                            <tr>
                                <td>{{ $msg->id }}</td>
                                <td>{{ $msg->nom_exped }}<br>({{ $msg->mail_exped }})</td>
                                <td>{{ $msg->contenu }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info">Afficher</a>
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