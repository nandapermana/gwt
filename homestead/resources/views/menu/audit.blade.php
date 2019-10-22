@extends('menu.master')

@section('title')
        Menu
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
            <div style="float: right" class="menu">Auditor</div>
            <div style="float: left"><img src="images/logo.png"></div>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <div class="icon-bar">
        <a href="{{route('go_index')}}" class="button white"><i class="fas fa-arrow-left"> </i> Back</a>
    </div>

    <section class="section-padding gray-bg" id="blog-page">
        <div class="container">
             <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Audit </h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/small1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Penetapan audit</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
                            </ul>
                            <p>Penetapan audit berdasarkan tingkat kompleksitas</p>
                            <a  href ="images/infographic-04.png" class="button gradient">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/small2.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Kompetensi Auditor</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
                            </ul>
                            <p>Pengetahuan khusus sebagai Auditor usaha pariwisata harus dimiliki pemahaman yang mencakup hal-hal berikut... </p>
                            <a href="images/infographic-05.png" class="button gradient">Lihat selengkapnya</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="images/small3.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <h3><a href="#">Persyaratan Auditor</a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-user"></span> <a href="#">Admin</a></li>
                                <li><span class="ti-calendar"></span> <a href="#">Feb 01, 2017</a></li>
                            </ul>
                            <p>Persyaratan Auditor pada usaha pariwisata  yang memiliki jabatan terakhir sebagai manajer ...</p>
                             <a href="images/infographic-06.png" class="button gradient">Lihat selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div style="background: #f2fefe">
        <center><font size="1px"> Copyright(c)2019 Global Wahana Tira</font></center>
    </div>
@endsection