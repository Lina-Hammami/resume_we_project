@extends('layouts.app')

@section('content')
    <div id="crt-nav-wrap" class="hidden-sm hidden-xs">
        <div id="crt-nav-inner">
            <div class="crt-nav-cont">
                <div id="crt-nav-scroll">
                    <nav id="crt-nav" class="crt-nav">
                        <ul class="clear-list">
                            <li>
                                <a href="/#apropos" data-tooltip="A propos"><span class="glyphicon glyphicon-user"></span></a>
                            </li>
                            <li>
                                <a href="/#experience" data-tooltip="Experience"><span class="glyphicon glyphicon-briefcase"></span></a>
                            </li>
                            <li>
                                <a href="/#education" data-tooltip="Education"><span class="glyphicon glyphicon-education"></span></a>
                            </li>
                            <li>
                                <a href="/#compétances" data-tooltip="Compétances"><span class="glyphicon glyphicon-star-empty"></span></a>
                            </li>
                            <li>
                                <a href="/portfolio" data-tooltip="Portfolio"><span class="glyphicon glyphicon-picture"></span></a>
                            </li>
                            <li>
                                <a href="/contactme" data-tooltip="Contact"><span class="glyphicon glyphicon-envelope"></span></a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div><!-- .crt-nav-wrap -->



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-6">
                    <iframe width="100%" height="420px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJHVh6LZct_RIRIjXaJi2nJxw&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
                </div>

                <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Contactez moi </div>
                    <div class="panel-body">
                        <!-- el formulaire lehne -->
                        <div class="col-sm-10 col-lg-offset-1">
                            <!-- <form action="/" class="contact-form" method="post"> -->
                                {{ Form::open(array('action' => 'MessageController@store')) }}
                                <div class="form-group">
                                    {{ Form::text('nom_exped', '', array('class' => 'form-control', 'placeholder' => 'Votre nom')) }}
                                </div>

                                <div class="form-group form_left">
                                    {{ Form::email('mail_exped', '', array('class' => 'form-control', 'placeholder' => 'Votre Email')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::text('objet', '', array('class' => 'form-control', 'placeholder' => 'Objet')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::textarea('contenu', '', array('class' => 'form-control  textarea-contact', 'placeholder' => 'Votre message ...')) }}
                                    <br>
                                    {{ Form::submit('Envoyer', array('class' => 'btn btn-default btn-send')) }}
                                </div>
                                {{ Form::close() }}
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
