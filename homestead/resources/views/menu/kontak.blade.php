@extends('menu.master')

@section('title')
        Kontak
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
            <div style="float: right" class="menu">Kontak</div>
            <div style="float: left"><img src="images/logo.png"></div>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <div class="icon-bar">
        <a href="{{route('go_index')}}" class="button white"><i class="fas fa-arrow-left"> </i> Back</a>
    </div>
    <section class=" sky-bg section-padding">
        <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-6 col-md-4">
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/location-arrow.png" alt="">
                            </div>
                            <p><strong>Alamat: </strong> 
                                <p>
                                Green Lake City Ruko Wallstreet B-8, Petir, Kec. Cipondoh, Kota Tangerang, Banten 15147
                                </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/phone-arrow.png" alt="">
                            </div>
                            <p><strong>Telpon: </strong>
                                <a href="callto:021-8305754">021-8305754</a><br />
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="side-icon-box">
                            <div class="side-icon">
                                <img src="images/mail-arrow.png" alt="">
                            </div>
                            <p><strong>E-mail: </strong>
                                <a href="mailto:globalwahanatirta.lsu@gmail.com">globalwahanatirta.lsu@gmail.com</a> <br />
                        </div>
                    </div>
                  </div>
            </div>
    </section>


    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <center><font size="1px" color="#ffffff"> Copyright(c)2019 Global Wahana Tira</font></center>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection