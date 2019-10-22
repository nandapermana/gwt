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
        <hr>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Download Audit Formulir </h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <a href="{{asset('formulir/1. Penilaian Mandiri Usaha Hotel.xlsx')}}" class="button gradient btn-lg btn-block">Penilaian Mandiri Usaha Hotel <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/2. Daftar Periksa Pemenuhan Standar BPW.xlsx')}}" class="button gradient btn-lg btn-block">Daftar Periksa Pemenuhan Standar BP <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/3. Daftar Periksa Penilaian Standar Hotel.xlsx')}}" class="button gradient btn-lg btn-block">Daftar Periksa Penilaian Standar Hotel <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/4. DAFTAR PERIKSA PENILAIAN STANDAR USAHA RESTORAN BINTANG.doc')}}" class="button gradient btn-lg btn-block">Daftar Periksa Penilaian Standar Usaha Restoran Bintang <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/5. PETUNJUK TEKNIS- Restoran - Sertifikasi 1.doc')}}" class="button gradient btn-lg btn-block">PETUNJUK TEKNIS- Restoran - Sertifikasi 1 <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/6. PETUNJUK TEKNIS- Restoran - Sertifikasi 2.doc')}}" class="button gradient btn-lg btn-block">PETUNJUK TEKNIS- Restoran - Sertifikasi 2 <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/7. DAFTAR PERIKSA PENILAIAN STANDAR USAHA ANGKUTAN JALAN WISATA.doc')}}" class="button gradient btn-lg btn-block">Daftar Periksa Penilaian standar usaha angkutan jalan wisata <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('8. Daftar Periksa Penilaian Standar Usaha Biro Perjalanan Wisata.xlsx')}}" class="button gradient btn-lg btn-block">Daftar Periksa Penilaian Standar Usaha Biro Perjalanan Wisata <i class="fa fa-download" aria-hidden="true"></i></a>
                <a href="{{asset('formulir/9. PENERAPAN STANDAR KAWASAN PARIWISATA.doc')}}" class="button gradient btn-lg btn-block">Penerapan Standar Kawasan Pariwisata <i class="fa fa-download" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <div style="background: #f2fefe">
        <center><font size="1px"> Copyright(c)2019 Global Wahana Tira</font></center>
    </div>
@endsection
