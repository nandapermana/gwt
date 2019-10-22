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
            <div style="float: right" class="menu">Menu</div>
            <div style="float: left"><img src="images/logo.png"></div>
        </div>
    </div>
    <!--Mainmenu-area/-->
    <div class="icon-bar">
        <a href="{{route('go_index')}}" class="button white"><i class="fas fa-arrow-left"> </i> Back</a>
    </div>

    <section class="gray-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Menu</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="card bg-light mb-3" >
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="box">
                            <div class="box-icon">
                                <a href="{{route('go_about')}}"><img src="images/icons/house.png" href="about.html" alt=""></a>
                                <br><a href="{{route('go_about')}}">Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="box">
                            <div class="box-icon">
                                <a href="{{route('go_organisasi')}}"><img src="images/icons/organisasi.png" alt=""></a>
                                <br><a href="{{route('go_organisasi')}}">Struktur Organisasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="box">
                            <div class="box-icon">
                                <a href="{{route('go_audit')}}"><img src="images/icons/auditor.png" alt=""></a>
                                <br><a href="{{route('go_audit')}}">Auditor</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="box">
                            <div class="box-icon">
                                <a href="{{route('go_harga')}}"><img src="images/icons/harga.png" alt=""></a>
                                <br><a href="{{route('go_harga')}}">Harga</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="box">
                            <div class="box-icon">
                                <a href="{{route('go_client')}}"><img src="images/icons/partner.png" alt=""></a>
                                <br><a href="{{route('go_client')}}">Client</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="box">
                            <div class="box-icon">
                                <a href="{{route('go_contact')}}"><img src="images/icons/kontak.png" alt=""></a>
                                <br><a href="{{route('go_contact')}}">Kontak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Video</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="display-3">Video Youtube</h>
                    <p class="lead">Mengenai lembaga sertifikasi Simak Video berikut .</p>
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/d2_ttr_myus" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
<div style="background: #f2fefe">
    <center><font style="color: #d43a5e" size="1px"> Copyright(c)2019 Global Wahana Tira</font></center>
</div>
@endsection