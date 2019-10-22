@extends('menu.master')

@section('title')
        Tentang Kami
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
            <div style="float: right" class="menu">Tentang Kami</div>
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
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active row">
                                <div class="v-center">
                                    <hr>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Lembaga Sertifikasi Usaha Pariwisata</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Lembaga Sertifikasi Usaha Pariwisata Global Wahana Tirta  yang selanjutnya disebut LSUP-GWT adalah lembaga independen berhak melakukan sertifikasi usaha di bidang pariwisata sesuai dengan ketetapan peraturan perundang-undangan. LSUP-GWT yang berbadan usaha dan berbadan hukum di wilayah Indonesia serta memiliki tenaga auditor yang telah memiliki lisensi dan perangkat kerja yang mengikuti tuntutan zaman.</p>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/lembaga.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Pelaksanaan Sertifikasi</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Pelaksanaan sertifikasi yang mencakup audit terhadap 3 (tiga) aspek standar usaha pariwisata yang meliputi aspek produk, pelayanan dan pengelolaan. Bentuk pengesahan kesesuaian terhadap standar usaha pariwisata adalah Sertifikat Usaha Pariwisata.</p>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/pelaksanaan.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Prinsip Sertifikasi</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p> Ada 5 Prinsip sertifikasi bagi kami , diantaranya adalah Integritas,Objektif, Kerahasiaan, Cepat Tanggap, Pendekatan berdasarkan bukti</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/prinsip.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>

                             <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Kebijakan Ketidakberpihakan</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p> LSUP Global Wahana Tirta tidak berpihak dan bebas dari keterikatan dan faktor lain yang mempengaruhi objektivitasnya, khususnya tidak terlibat dalam desain, kontruksi, pemasaran, pemasangan, jasa atau pasokan usaha pariwisata dalam ruang lingkup audit, penerapan atau pemeliharaan sistem manajemen yang diaudit.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/kerahasiaan.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>


                            <!--
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Integritas</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p><strong>LSUP-GWT</strong> harus memiliki prinsip integritas yang tinggi, melalui kualifikasi auditor yang profesional maka mampu memegang teguh kejujuran dalam melakukan audit.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/integritas.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>  

                             <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Objektif</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                             <p><strong>LSUP-GWT</strong>dalam melakukan audit harus objektif, tidak berpihak dengan kewajiban utama adalah melalui pelaporan secara benar dan akurat.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/keobjektifan.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>

                             <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Kerahasiaan</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                              <p><strong>LSUP-GWT</strong>dalam melakukan audit harus objektif tidak berpihak dengan kewajiban utama adalah melalui pelaporan secara benar dan akurat.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/kerahasiaan.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>

                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Cepat Tanggap</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                              <p><strong>LSUP-GWT</strong> harus cepat dan tanggap dari keluhan pelanggan sebagai sarana perlindungan yang efektif bagi <strong>LSUP-GWT</strong>, Sumber keluhan pelanggan atau pengguna sertifikasi usaha pariwisata sebagai alat control terhadap arahan, kelalaian atau perilaku yang tidak wajar oleh auditor.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/cepat.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>

                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Pendekatan berdasarkan bukti</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                             <p><strong>LSUP-GWT</strong>dalam memutuskan hasil audit yang terkendali, semua harus berdasarkan bukti-bukti hasil temuan observasi, bukan perkiraan dan sekedar informasi pelanggan.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo one" data-animation="animated fadeInRight">
                                            <img src="images/icons-2/bukti.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>-->
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Lembaga </strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>Pelaksanaan </strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Prinsip Sertifikasi </strong> Integritas, Objektif, Kerahasiaan, Cepat Tanggap, Pendekatan berdasarkan bukti
                            </li>
                            <li data-target="#caption_slide" data-slide-to="3">
                                <strong>Kebijakan Ketidakberpihakan </strong> 
                            </li>
                        </ol>
                        <hr>
                        <h3>Infografik</h3>
                        <a href="images/infographic-01.png" class="button white"> Prinsip Sertifikasi </a>
                        <a href="images/infographic-02.png" class="button white"> Sistem Pengelolaan LSUP GWT</a>
                        <hr>
                        <h3>File Download</h3>
                        <a href="formulir/PM 17 - PENGGUNAAN LOGO.pdf" class="button white"> Peraturan Penggunaan Logo </a>
                        <a href="#" class="button white">Tipe Sistem Management dan Skema Sertifikasi yang Dimiliki oleh LSUP </a>
                        <a href="#" class="button white">Proses Banding dan Keluhan </a>
                        <a href="#" class="button white">Komponen Struktur Biaya</a>
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