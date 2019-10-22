@extends('menu.master')

@section('title')
        Harga
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
            <div style="float: right" class="menu">Harga</div>
            <div style="float: left"><img src="images/logo.png"></div>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <div class="icon-bar">
        <a href="{{route('go_index')}}" class="button white"><i class="fas fa-arrow-left"> </i> Back</a>
    </div>

     <section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Harga</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Tirta 1</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">Rp. </strong><span class="big">9.800.000</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="button gradient">Daftar</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table active">
                        <span class="price-info"><span class="ti-crown"></span></span>
                        <h3 class="text-uppercase price-title">Tirta 2</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">Rp. </strong><span class="big">12.500.000</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="button gradient">Daftar</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Tirta 3</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong class="amount">Rp. </strong> <span class="big">15.000.000</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="button gradient">Daftar</a>
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