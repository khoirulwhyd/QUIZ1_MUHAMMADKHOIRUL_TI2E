@extends('layouts.app')
@section('head')

        <!-- header image -->
        <div class="header-img-3"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Work</h2>
                            <img src="img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere lectus augue, non rhoncus erat accumsan eu. Sed dictum sem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('content')

        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Profile</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>
                <div class="row margin-bottom-30">
                    <div class="col-lg-12">
                        <ul id="filters" class="folio-filters">
                            <li class="current"><a href="#" data-filter="*">All</a></li>
                            <li class=""><a href="#" data-filter=".design">Design</a></li>
                            <li class=""><a href="#" data-filter=".web">Web</a></li>
                            <li class=""><a href="#" data-filter=".branding">Branding</a></li>
                            <li class=""><a href="#" data-filter=".print">Print</a></li>
                        </ul>
                    </div>
                </div>
                <div id="folio-container" class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/18.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/19.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/20.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item design">
                        <img src="img/21.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="img/22.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="img/23.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item web">
                        <img src="img/24.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="img/25.jpg" alt="Image" class="img-thumbnail">
                        </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="img/26.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item branding">
                        <img src="img/27.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print">
                        <img src="img/28.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 margin-bottom-30 folio-item print">
                        <img src="img/29.jpg" alt="Image" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </section>
    <div class="blue-divider effect1">
            <div class="dark-blue-bg"></div>
            <div class="blue-divider-bg-graphic"></div>
            <div class="blue-bg"></div>
        </div>
        <section class="templatemo-container blue-bg footer-nav effect1">
            <div class="container">
                <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Main menu</h3>
                    <nav class="text-uppercase templatemo-nav-2">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
                    <h3 class="text-uppercase">About us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce malesuada lacus vel tristique rhoncus. Vivamus vel molestie odio. Curabitur pulvinar, diam at pharetra euismod, augue felis pretium est, sit amet accumsan dui enim nec tortor. Cras lobortis feugiat enim. Aliquam rhoncus pharetra ligula accumsan sodales. Donec blandit sed justo quis sollicitudin. Nulla et leo id purus suscipit rhoncus ut at purus. Suspendisse molestie sodales porttitor.

                        Vivamus et vulputate augue. Etiam et eleifend purus, in sagittis nisi. Vivamus laoreet metus ut nisl euismod molestie. In non lacus placerat ipsum placerat dapibus eu vel arcu.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Resources</h3>
                    <ul>
                        <li><a href="#">Aenean leogula</a></li>
                        <li><a href="#">Porttitor euconsequat</a></li>
                        <li><a href="#">Vitae eleifend ac enim</a></li>
                        <li><a href="#">Aliquam lorante</a></li>
                        <li><a href="#">Phasellus viverra nulla</a></li>
                        <li><a href="#">Dmetus varius</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Features</h3>
                    <ul>
                        <li><a href="#">lorem quis bibendum</a></li>
                        <li><a href="#">Auctor nisi elit conser</a></li>
                        <li><a href="#">at ipsum, nec sagittis</a></li>
                        <li><a href="#">Duis sed odio sit amet</a></li>
                        <li><a href="#">Fnibh vulpu</a></li>
                        <li><a href="#">ftate cursus a sit amet</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end main content -->
        @endsection