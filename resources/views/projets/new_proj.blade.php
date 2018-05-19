@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                        <div class="panel-heading">Nouveau projet </div>
                        <div class="panel-body">
                            <!-- el formulaire lehne -->
                            <div class="col-sm-10 col-lg-offset-1">
                                    {{ Form::open(array('action' => 'PortfolioController@store')) }}
                                    <div class="form-group">
                                        {{ Form::text('titre', '', array('class' => 'form-control', 'placeholder' => 'Titre du projet')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::text('type', '', array('class' => 'form-control', 'placeholder' => 'Type du projet')) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::textarea('description', '', array('class' => 'form-control textarea-contact', 'placeholder' => 'Description du projet ...')) }}
                                        <br>
                                        {{ Form::submit('Ajouter', array('class' => 'btn btn-default btn-send')) }}
                                    </div>
                                {{ Form::close() }}
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
