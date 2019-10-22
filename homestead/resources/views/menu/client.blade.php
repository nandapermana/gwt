@extends('menu.master')

@section('title')
        Client
@endsection

@section('content')

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div style="float: right" class="menu">Client</div>
            <div style="float: left"><img src="images/logo.png"></div>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <div class="icon-bar">
        <a href="{{route('go_index')}}" class="button white"><i class="fas fa-arrow-left"> </i> Back</a>
    </div>

     <section class="testimonial-area section-padding gray-bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Client</h2>
                    <div class="row">
                            <a href="excel/Daftar_Klien_Tersertifikasi.xlsx" class="button white"> Daftar Klien tersertifikasi </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="testimonials">
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/tamansari.png">
                            </div>
                            <h3>Taman Sari Royal Heritage Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/bambu.png" alt="">
                            </div>
                            <h3>Bambu Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/martha.png" alt="">
                            </div>
                            <h3>Martha Tilaar Day Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/vivi.png" alt="">
                            </div>
                            <h3>Vivi Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/rumahspa.png" alt="">
                            </div>
                            <h3>Rumah Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/mizu.png" alt="">
                            </div>
                            <h3>Mizu Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/sangria.png" alt="">
                            </div>
                            <h3>San Gria Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/zen.png" alt="">
                            </div>
                            <h3>Zen Reflexology </h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/andaru.png" alt="">
                            </div>
                            <h3>Andaru Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/vimala.png" alt="">
                            </div>
                            <h3>Vimala Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/jayakarta.png" alt="">
                            </div>
                            <h3>Jayakarta Jogya Resort & Spa</h3>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-photo">
                                <img src="images/clients/ocean.png" alt="">
                            </div>
                            <h3>Ocean Spa</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <footer class="footer-area  sky-bg" style="padding-top: 0px;" >
        <div class="footer-bottom">
            <div >
                <div class="row">
                    <div class="col-xs-10 text-center">
                        <center><font size="1px" color="#ffffff"> Copyright(c)2019 Global Wahana Tira</font></center>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection