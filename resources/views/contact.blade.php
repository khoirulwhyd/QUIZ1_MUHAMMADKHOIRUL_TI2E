@extends('layouts.app')
@section('head')

        <!-- end header -->
        <!-- header image -->
        <div class="header-img-2">
        </div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">In Touch</h2>
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
                        <h2 class="section-title">Contact</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div> <!-- col-lg-12 -->
                </div> <!-- row -->
                <div class="row margin-bottom-30">
                    <div class="col-lg-6 col-md-6 contact-left">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b>Our</b> <span class="blue-text">Information</span></h3>
                        <p class="margin-bottom-30">Proin gravida arcu malesuada, venenatis nisl vitae, egestas sem. Vestibulum mauris magna, aliquam non commodo ac, porttitor a augue.</p>
                        <div class="contact-point">
                            <i class="fa fa-map-marker fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Address</b>
                                <p class="contact-point-detail">No. 1234, Rama IX Road, Bangkok 12345, Thailand.</p>
                            </div>
                        </div>
                        <div class="contact-point">
                            <i class="fa fa-envelope-o fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Email</b>
                                <p class="contact-point-detail">mail@company.com</p>
                            </div>
                        </div>
                        <div class="contact-point">
                            <i class="fa fa-phone fa-3x contact-point-icon blue-text"></i>
                            <div class="contact-point-detail-container">
                                <b class="text-uppercase contact-point-title blue-text font-weight-700">Phone</b>
                                <p class="contact-point-detail">+(123) 456 7890</p>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6 contact-right">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b>Leave</b> <span class="blue-text">a message</span></h3>
                        <form action="#" method="post" class="tm-contact-form">
                            <div class="tm-contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" class="form-control" rows="8" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="text-uppercase btn-blue-gradient btn-submit">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map-container">
                            <div id="google-map" class="google-map"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
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