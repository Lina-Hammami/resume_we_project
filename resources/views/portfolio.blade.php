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


    <div class="row">
        <div class=" col-md-10 col-md-offset-1">
    <div class="crt-paper clearfix">
    <div class="crt-paper-cont paper-padd clear-mrg">

        <section class="section padd-box">
            <h2 class="title-lg text-upper padd-box">portfolio</h2>

            <div class="pf-wrap">
                <div class="pf-filter padd-box">
                    <button data-filter="*" class="active">all</button>
                    <button data-filter=".photography">photography</button>
                    <button data-filter=".design">design</button>
                </div><!-- .pf-filter -->

                <div class="pf-grid" style="position: relative; height: 1006.3px;">
                    <div class="pf-grid-sizer"></div><!-- used for sizing -->

                    <div class="pf-grid-item photography" style="position: absolute; left: 0%; top: 0px;">
                        <a class="pf-project" href="#pf-popup-1">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-01.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stu unger rise</h2>

                                        <div class="pf-text clear-mrg">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-1" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-01.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-01.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-01.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->

                    <div class="pf-grid-item design" style="position: absolute; left: 49.8759%; top: 0px;">
                        <a class="pf-project" href="#pf-popup-2">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-02.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stu unger rise</h2>

                                        <div class="pf-text clear-mrg">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-2" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-02.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->

                    <div class="pf-grid-item photography" style="position: absolute; left: 0%; top: 251px;">
                        <a class="pf-project" href="#pf-popup-3">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-03.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stu unger rise</h2>

                                        <div class="pf-text clear-mrg">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-3" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-03.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-03.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-03.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->

                    <div class="pf-grid-item design" style="position: absolute; left: 0%; top: 503px;">
                        <a class="pf-project" href="#pf-popup-4">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-04.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stunger rise</h2>

                                        <div class="pf-text">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-4" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-04.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-04.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-04.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->

                    <div class="pf-grid-item photography" style="position: absolute; left: 49.8759%; top: 503px;">
                        <a class="pf-project" href="#pf-popup-5">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-05.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stu unger rise</h2>

                                        <div class="pf-text">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-5" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-05.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-05.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-05.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->

                    <div class="pf-grid-item design" style="position: absolute; left: 0%; top: 754px;">
                        <a class="pf-project" href="#pf-popup-6">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-06.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stu unger rise</h2>

                                        <div class="pf-text clear-mrg">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-6" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-06.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-06.jpg" alt="">
                                    </div>

                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-06.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->

                    <div class="pf-grid-item photography" style="position: absolute; left: 49.8759%; top: 754px;">
                        <a class="pf-project" href="#pf-popup-7">
                            <figure class="pf-figure">
                                <img src="assets/images/uploads/portfolio/prj-01.jpg" alt="">
                            </figure>

                            <div class="pf-caption text-center">
                                <div class="valign-table">
                                    <div class="valign-cell">
                                        <h2 class="pf-title text-upper">stu unger rise</h2>

                                        <div class="pf-text clear-mrg">
                                            <p>Accessories Here you can find the best computer monitor, printer, scanner, speaker, projector. hardware and more</p>
                                        </div>

                                        <button class="pf-btn btn btn-primary">View More</button>
                                    </div>
                                </div>
                            </div>
                        </a><!-- .pf-project -->

                        <div id="pf-popup-7" class="pf-popup clearfix">
                            <div class="pf-popup-col1">
                                <div class="pf-popup-media cr-slider" data-init="none">
                                    <div class="pf-popup-embed">
                                        <img src="assets/images/uploads/portfolio/prj-01.jpg" alt="">
                                    </div>
                                </div>
                            </div><!-- .pf-popup-col1 -->

                            <div class="pf-popup-col2">
                                <div class="pf-popup-info">
                                    <h2 class="pf-popup-title text-upper">Rs Project</h2>

                                    <div class="text-muted"><strong>design / development</strong></div>

                                    <dl class="dl-horizontal">
                                        <dt>Date:</dt>
                                        <dd>11 Jan 2012</dd>

                                        <dt>Site link:</dt>
                                        <dd><a href="www.sitedomen.com">www.sitedomen.com</a></dd>

                                        <dt>Client:</dt>
                                        <dd>11 Jan 2012</dd>
                                    </dl>

                                    <p>About 64% of all on-line teens say that do things online that they wouldn’t want their
                                        parents to know about. 11% of all adult internet users visit dating websites and spend their
                                        time in chatrooms.</p>
                                </div><!-- .pf-popup-info -->

                                <div class="pf-popup-rel">
                                    <h2 class="text-upper">More Projects</h2>

                                    <div class="pf-rel-list cr-carousel" data-init="none">
                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>

                                        <div class="pf-rel-prj">
                                            <img src="assets/images/uploads/portfolio/prj-rel-01.jpg" alt="">
                                            <a class="pf-rel-cover" href="">
                                                <button class="btn btn-primary btn-sm">View</button>
                                            </a>
                                        </div>
                                    </div><!-- .pf-rel-projects -->
                                </div><!-- .pf-popup-rel -->
                            </div><!-- .pf-popup-col2 -->
                        </div><!-- .pf-popup -->
                    </div><!-- .pf-grid-item -->
                </div><!-- .pf-grid -->
            </div><!-- .pf-wrap -->
        </section>
        <!-- .section -->

    </div>
    <!-- .crt-paper-cont -->
</div>
        </div>
    </div>
@endsection
