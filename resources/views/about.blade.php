@extends('layouts.app')
@section('head')

        <!-- end header -->
        <!-- header image -->
        <div class="header-img-2"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">About Us</h2>
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
        <section class="templatemo-container section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Who We Are</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Lorem ip sums</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 tm-about-left">
                        <img src="img/7.jpg" alt="Image" class="img-responsive margin-bottom-30">
                        <h3 class="section-title-2 text-uppercase font-weight-300"><b>Morbi</b> <span class="blue-text">Accumsan</span></h3>
                        <p class="justify-text">Morbi dapibus rhoncus nulla ac tempus. Integer felis lorem, fermentum quis nisl accumsan, gravida gravida est. Cras ultrices rhoncus dui ut laoreet. Fusce tincidunt, urna a imperdiet tempor, orci dolor dictum elit, sit amet malesuada mauris magna eget dolor.</p>
                        <p class="justify-text margin-bottom-30">Phasellus lobortis nisl ut tortor placerat, vel auctor felis semper. Quisque ut auctor sapien. Proin gravida arcu malesuada, venenatis nisl vitae, egestas sem. Vestibulum mauris magna, aliquam non commodo ac, porttitor a augue.</p>
                        <a href="#" class="btn-blue-gradient">Prima Liuam</a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 tm-about-right">
                        <div class="tm-img-container margin-bottom-30">
                            <div class="tm-img-overlay">
                                <p class="img-description">Feufelisda</p>
                                <p class="img-title">Nullam Acurna</p>
                            </div>
                            <img src="img/8.jpg" alt="Image" class="img-responsive">
                        </div>
                        <div class="tm-img-container margin-bottom-30">
                            <div class="tm-img-overlay">
                                <p class="img-description">Feufelisda</p>
                                <p class="img-title">Nullam Acurna</p>
                            </div>
                            <img src="img/9.jpg" alt="Image" class="img-responsive">
                        </div>
                        <div class="tm-img-container margin-bottom-30">
                            <div class="tm-img-overlay">
                                <p class="img-description">Feufelisda</p>
                                <p class="img-title">Nullam Acurna</p>
                            </div>
                            <img src="img/10.jpg" alt="Image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="templatemo-container light-gray-bg section-shadow-bottom">
            <div class="container">
                <div class="row section-title-container">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Who we are</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div> <!-- row -->
                <div class="row">
                @foreach ($posts as $p)

                    <div class="col-lg-4 col-md-4 col-sm-4 text-center tm-about-container-2">
                        <img src="img/11.png" alt="Image">
                        <h3 class="text-uppercase about-h3">{{$p->title}}</h3>
                        <p class="about-description">{{$p->content}}</p>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Recent Posts</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Proin Gravidani</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-post-container">
                            <h3 class="text-uppercase recent-post-title margin-bottom-30"><span class="font-weight-700">Aenean</span> <span class="font-weight-300 blue-text">Sollicitum</span></h3>
                            <img src="img/14.jpg" alt="Image" class="img-responsive margin-bottom-30">
                            <p class="justify-text"><span class="red-text">Aenean sollicitudin</span>, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-post-container">
                            <h3 class="text-uppercase recent-post-title margin-bottom-30"><span class="font-weight-700">Lorem</span> <span class="font-weight-300 blue-text">Ipsums</span></h3>
                            <img src="img/15.jpg" alt="Image" class="img-responsive margin-bottom-30">
                            <p class="justify-text"><span class="red-text">Aenean sollicitudin</span>, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-post-container">
                            <h3 class="text-uppercase recent-post-title margin-bottom-30"><span class="font-weight-700">Duis</span> <span class="font-weight-300 blue-text">Sedoido</span></h3>
                            <img src="img/16.jpg" alt="Image" class="img-responsive margin-bottom-30">
                            <p class="justify-text"><span class="red-text">Aenean sollicitudin</span>, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="recent-post-container">
                            <h3 class="text-uppercase recent-post-title margin-bottom-30"><span class="font-weight-700">Amet</span> <span class="font-weight-300 blue-text">Nigh</span></h3>
                            <img src="img/17.jpg" alt="Image" class="img-responsive margin-bottom-30">
                            <p class="justify-text"><span class="red-text">Aenean sollicitudin</span>, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                        </div>
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