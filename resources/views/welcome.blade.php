@extends('layouts.app')

@section('content')
<div class="crt-wrapper">
    <header id="crt-header">
        <div class="crt-head-inner crt-container">
            <div class="crt-container-sm">
                <div class="crt-head-row">


                    <div id="crt-head-col2" class="crt-head-col text-right">
                        <div class="crt-nav-container crt-container hidden-sm hidden-xs">
                            <nav id="crt-main-nav">

                                <ul class="clear-list">
                                    <li><a href="#apropos">A propos</a></li>
                                    <li><a href="#experience">Experience</a></li>
                                    <li><a href="#education">Education</a></li>
                                    <li><a href="#competances">Compétances </a></li>
                                    <li><a href="/portfolio">Portfolio</a>
                                    <li><a href="/contactme">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div id="crt-head-col3" class="crt-head-col text-right">
                        &nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </div><!-- .crt-head-inner -->
        </div>


    </header><!-- #crt-header -->

    <div id="crt-container" class="crt-container">
        <div id="crt-side-box-wrap" class="crt-sticky">
            <div id="crt-side-box">

                <div class="crt-side-box-item">

                    <div class="crt-card bg-primary text-center">
                        <div class="crt-card-avatar">
                            <img class="avatar avatar-195" src="assets/images/uploads/avatar/avatar-195x195.png"
                                 srcset="assets/images/uploads/avatar/avatar-390x390-2x.png 2x" width="195" height="195" alt="">
                        </div>
                        <div class="crt-card-info">
                            <h2 class="text-upper">Lina Hammami</h2>

                            <p class="text-muted">FullStack Developer | Data Scientist </p>
                            <ul class="crt-social clear-list">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .crt-side-box-item -->

            </div><!-- #crt-side-box -->
        </div><!-- #crt-side-box-wrap -->
        <div id="crt-nav-wrap" class="hidden-sm hidden-xs">
            <div id="crt-nav-inner">
                <div class="crt-nav-cont">
                    <div id="crt-nav-scroll">
                        <nav id="crt-nav" class="crt-nav">
                            <ul class="clear-list">
                                <li>
                                    <a href="#apropos" data-tooltip="A propos"><span class="glyphicon glyphicon-user"></span></a>
                                </li>
                                <li>
                                    <a href="#experience" data-tooltip="Experience"><span class="glyphicon glyphicon-briefcase"></span></a>
                                </li>
                                <li>
                                    <a href="#education" data-tooltip="Education"><span class="glyphicon glyphicon-education"></span></a>
                                </li>
                                <li>
                                    <a href="#compétances" data-tooltip="Compétances"><span class="glyphicon glyphicon-star-empty"></span></a>
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

        <div class="crt-container-sm">
            <div id="apropos" class="crt-paper-layers crt-animate">
                <div class="crt-paper clearfix">
                    <div class="crt-paper-cont paper-padd clear-mrg">

                        <section class="section brd-btm padd-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="title-lg text-upper">A propos de moi</h2>

                                    <div class="text-box">
                                        <p><b>Lina Hammami </b><br>
                                            Ingenieur en systemes informatiques. Motivée par la satisfaction client et la mise en place de systemes d’information et leur developpement.
                                            Capable d’expliquer simplement la complexite de grands systemes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- .row -->

                        </section>
                        <!-- .section -->

                        <section class="section padd-box">
                            <div class="row">
                                <div class="col-sm-6 clear-mrg">
                                    <h2 class="title-thin text-muted">Informations personnelles</h2>

                                    <dl class="dl-horizontal clear-mrg">
                                        <dt class="text-upper">Nom complet</dt>
                                        <dd>Lina Hammami</dd>

                                        <dt class="text-upper">Date de naissance</dt>
                                        <dd>11 Avril 1995</dd>

                                        <dt class="text-upper">Addresse</dt>
                                        <dd>24 Rue Farhat Hached Tebourba,
                                            Manouba
                                        </dd>

                                        <dt class="text-upper">e-mail</dt>
                                        <dd><a href="mailto:hamemilina@gmail.com">lina.hammami@ensi-uma.com</a></dd>

                                        <dt class="text-upper">No. Téléphone</dt>
                                        <dd>+1 256 254 84 56</dd>

                                        <dt class="text-upper">Freelance</dt>
                                        <dd>Valable</dd>
                                    </dl>
                                </div>
                                <!-- .col-sm-6 -->

                                <div class="col-sm-6 clear-mrg">
                                    <h2 class="title-thin text-muted">Langues</h2>

                                    <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                         aria-valuemax="10">
                                        <strong class="progress-title">Arabe</strong>
                                        <span class="progress-bar">
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                        </span><br>
                                        <span class="progress-text text-muted">native</span>

                                    </div>

                                    <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="8" aria-valuemin="0"
                                         aria-valuemax="10">
                                        <strong class="progress-title">Anglais</strong>
                                        <span class="progress-bar">
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet"></span>
                                            <span class="bullet"></span>
                                        </span><br>
                                        <span class="progress-text text-muted">Bon</span>
                                    </div>

                                    <div class="progress-bullets crt-animate" role="progressbar" aria-valuenow="7" aria-valuemin="0"
                                         aria-valuemax="10">
                                        <strong class="progress-title">Français</strong>
                                        <span class="progress-bar">
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet fill"></span>
                                            <span class="bullet"></span>
                                            <span class="bullet"></span>
                                        </span><br>
                                        <span class="progress-text text-muted">Bon</span>
                                    </div>
                                </div>
                                <!-- .col-sm-6 -->
                            </div>
                            <!-- .row -->
                        </section>
                    </div>
                    <!-- .crt-paper-cont -->
                </div>
                <!-- .crt-paper -->
            </div>
            <!-- .crt-paper-layers -->

            <div id="experience" class="crt-paper-layers crt-animate">
                <div class="crt-paper clearfix">
                    <div class="crt-paper-cont paper-padd clear-mrg">

                        <section class="section padd-box">
                            <h2 class="title-lg text-upper">Expérience professionnelle </h2>
                            <div class="education">

                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                        <span>Jan <strong class="text-upper">2017</strong> - Mar <strong>2018</strong></span>
                                    </time>
                                    <h3>Full Stack Developer</h3>
                                    <div class="education-logo">
                                        <img src="assets/images/uploads/experience/logo-audio-jungle.png" alt="">
                                    </div>
                                    <span c ass="education-company">IBBA Group</span>
                                    <p>Your brand is the core of your marketing,
                                        the central theme around your products and services.
                                        Your brand is not your Logo or your Company Name
                                    </p>
                                </div>
                                <!-- .education-box -->

                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                        <span>Jan <strong class="text-upper">2016</strong> - Mar <strong>2017</strong></span>
                                    </time>
                                    <h3>Systems Analyst / Web Developer</h3>
                                    <div class="education-logo">
                                        <img src="assets/images/uploads/experience/logo-themeforest.png" alt="">
                                    </div>
                                    <span class="education-company">Loft Studio</span>
                                    <p>
                                        Your brand is the core of your marketing, the central theme around your products and services.
                                    </p>
                                </div>
                                <!-- .education-box -->

                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                        <span>Jan <strong class="text-upper">2014</strong> - Mar <strong>2016</strong></span>
                                    </time>
                                    <h3>Full Stack Developer</h3>
                                    <div class="education-logo">
                                        <img src="assets/images/uploads/experience/logo-envato.png" alt="">
                                    </div>
                                    <span class="education-company">Stu Unger Rise</span>
                                    <p>Your brand is the core of your marketing, the central theme around your products and services.</p>
                                </div>
                                <!-- .education-box -->

                            </div>
                            <!-- .education -->
                        </section>
                        <!-- .section -->

                    </div>
                    <!-- .crt-paper-cont -->
                </div>
                <!-- .crt-paper -->
            </div>

            <div id="education" class="crt-paper-layers crt-animate">
                <div class="crt-paper clearfix">
                    <div class="crt-paper-cont paper-padd clear-mrg">

                        <section class="section padd-box">
                            <h2 class="title-lg text-upper">Education</h2>
                            <div class="education">

                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                        <span>Sep <strong class="text-upper">2017</strong> - Jun <strong>2021</strong></span>
                                    </time>
                                    <h3>ENSI</h3>
                                    <span c ass="education-company">Data Analysis</span>
                                </div>

                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                        <span>Sep <strong class="text-upper">2010</strong> - Jun <strong>2014</strong></span>
                                    </time>
                                    <h3>ISET</h3>
                                    <span c ass="education-company">Développement des systèmes d'information</span>
                                </div>

                                <div class="education-box">
                                    <time class="education-date" datetime="2014-01T2016-03">
                                        <span>Sep <strong class="text-upper">2010</strong> - Jun <strong>2014</strong></span>
                                    </time>
                                    <h3>Lycée Hannibal Tebourba</h3>
                                    <span c ass="education-company">Mathématiques</span>
                                </div>

                            </div>
                            <!-- .education -->
                        </section>
                        <!-- .section -->

                    </div>
                    <!-- .crt-paper-cont -->
                </div>
                <!-- .crt-paper -->
            </div>



        </div>
        <!-- .crt-container-sm -->
    </div>
    <!-- .crt-container -->

    <footer id="crt-footer" class="crt-container-lg">
        <div class="crt-container">
            <div class="crt-container-sm clear-mrg text-center">
                <p>Curriculum Vitae @ Tous droit réservés - Lina Hammami -  2018</p>
            </div>
        </div>
        <!-- .crt-container -->
    </footer>
    <!-- #crt-footer -->
</div>
@endsection