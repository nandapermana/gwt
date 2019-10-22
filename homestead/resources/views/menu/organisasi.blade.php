@extends('menu.master')

@section('title')
        Struktur Organisasi
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
            <div style="float: right" class="menu">Struktur Organisasi</div>
            <div style="float: left"><img src="images/logo.png"></div>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <div class="icon-bar">
        <a href="{{route('go_index')}}" class="button white"><i class="fas fa-arrow-left"> </i> Back</a>
    </div>

    <section class="section-padding gray-bg" id="team-page">
        <!--<center><a href="images/Infographic-03.png" class="button big">Infografik</a></center>-->
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Komisaris</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>DR.BRA. Mooryati Sudibyo</h4>
                        <h6>Komisaris</h6>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>Putri Kuswisnu Wardani</h4>
                        <h6>Komisaris</h6>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/foto/1. KOMISARIS/KUSUMADEWI.jpg" ">
                        </div>
                        <h4>Dr. Kusumadewi Sutanto, M.pd</h4>
                        <h6>Komisaris</h6>
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/foto/1. KOMISARIS/DR.LIANYWATI.jpg" alt="">
                        </div>
                        <h4>Dr.Lianywati Batihalim, Ms, Sp.OK</h4>
                        <h6>Komisaris</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>Erwina Soewarna</h4>
                        <h6>Komisaris</h6>
                    </div>
                </div>
            </div>
        </div>
        <hr>
         <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Direksi dan Sekretaris</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\2. DIREKTUR UTAMA\M Asyhadi.jpg" alt="">
                        </div>
                        <h4>Mohammad Asyhadi , M.pd</h4>
                        <h6>Direktur Utama</h6>
                        <!--
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>Susiana Hendro ,SE, MM </h4>
                        <h6>Direktur Eksekutif</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\5. SEKRETARIS\NANING F.jpeg" alt="">
                        </div>
                        <h4>Naning Fatmandiri</h4>
                        <h6>Sekretaris</h6>
                    </div>
                </div>
            </div>
        </div>
        <hr>
         <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Manajerial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\3. MANAJER KEUANGAN\WIENA.jpg" alt="">
                        </div>
                        <h4>Wiena Latifah Sari</h4>
                        <h6>Manajer Keuangan & Administrasi</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>Sri Andani W </h4>
                        <h6>Manajer Sertifikasi</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>Teguh Susanto</h4>
                        <h6>Manajer Mutu</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\6 .MANAJER PEMASARAN & PENJUALAN\LISY.jpg" alt="">
                        </div>
                        <h4>Maya Soviasari Lisy Sulistyani</h4>
                        <h6>Manajer pemasaran & penjualan</h6>
                    </div>
                </div>
            </div>

         <hr>
         <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\4. STAFF KEUANGAN\YUNITA.jpg" alt="">
                        </div>
                        <h4>Yunita Ika Sari</h4>
                        <h6>Staf Keuangan</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images/team-section-11.png" alt="">
                        </div>
                        <h4>Shenny Mahniati </h4>
                        <h6>Staf Sertifikasi Restoran</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\7. STAF SERTIFIKASI HOTEL\DESI.jpeg" alt="">
                        </div>
                        <h4>Desi Indarini</h4>
                        <h6>Staf Sertifikasi Hotel</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="images\foto\8. BIDANG SPA\DEWI PURNOMO.jpg" alt="">
                        </div>
                        <h4>Dewi Puwnomowati</h4>
                        <h6>Bidang Spa</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div style="background: #f2fefe">
        <center><font size="1px"> Copyright(c)2019 Global Wahana Tira</font></center>
    </div>
@endsection