@extends('menu.master')

@section('title')
        Index
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2 class="gwt-logo">GWT</h2>
                </a>
            </div>
            <!--Logo/-->
        </div>
    </div>
    <!--Mainmenu-area/-->

    <!--Header-area-->
    <header class="header-area  full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2><font style="color:white">Global Wahana Tirta </font></h2>
                    <p><font style="color:white">Lembaga Sertifikasi Usaha Pariwisata Global Wahana Tirta (LSUP-GWT)
                        adalah lembaga independen, yang melakukan sertifikasi usaha di bidang pariwisata. 
                        Memiliki tenaga auditor terlisensi dan perangkat kerja yang modern. </font></p>
                    <a href="{{route('go_menu')}}" class="button white"> Lihat Selengkapnya <i class="fas fa-arrow-right"></i> </a>
                    <div class="icons-orang">
                        <img src="{{asset('images/icons-3/gabung.png')}}" >
                    </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="item icons-gwt">
                        <img src="images/big_logo.png" alt="">
                    </div>
                </div>
              
            </div>
        </div>
    </header>
    <div  style="background-color: white";>
        <font style="color:#d43a5e;"  size= "1px";><center> &nbsp; Copyright(c)2019 Global Wahana Tirta </center> </font>
    </div>

@endsection