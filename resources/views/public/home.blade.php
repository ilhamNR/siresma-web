@extends('public.components.layout')

@section('content')

    <div role="main" class="main">

        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center custom-dots-style-1 dots-light show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg show-nav-hover custom-slider-container mb-0"
            data-plugin-options="{'autoplay': false, 'autoplayTimeout': 7000}"
            data-dynamic-height="['780px','780px','780px','780px','510px']"
            style="height: 780px; background-color: #3DD679 !important;">
            <div class="owl-stage-outer">


                <div class="container position-relative h-100 z-index-1 mt-4">
                    <div class="row align-items-center h-100">
                        <div class="col-md-6 mb-5-5 mb-sm-0">
                            <div class="appear-animation" data-appear-animation="fadeInDownShorterPlus"
                                data-appear-animation-delay="800">
                                <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-2 line-height-1 mb-0"
                                    style="font-family: Poppins;">
                                    SIRESMA
                                </h1>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInDownShorterPlus"
                                data-appear-animation-delay="600">
                                <span class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold"
                                    style="font-family: 'Poppins', sans-serif;">SIRESMA</span>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInDownShorterPlus"
                                data-appear-animation-delay="800">
                                <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-2 line-height-1 mb-0"
                                    style="font-family: Poppins;">
                                    SIRESMA
                                </h1>
                            </div>
                            <p class="text-color-dark font-weight-bold text-6 text-sm-9 ms-2 mb-3 appear-animation"
                                data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="1000">
                                Sistem Resik Mandiri</p>
                            <p class="text-color-dark font-weight-bold text-6 text-sm-9 ms-2 mb-3 appear-animation"
                                data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="1000">
                                Kelurahan Sambiroto</p>
                            <div class="d-flex ">
                                <p class="text-color-dark font-weight-bold text-6 text-sm-9 ms-2 mb-3 appear-animation"
                                    data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="1000">
                                    Kecamatan Tembalang</p>
                                <img src="{{ url('img/maskot_siresma1.png') }}" alt="{{ url('img/icon_siresma1.png') }}"
                                    width="105" height="150" appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                            </div>

                        </div>

                        <!-- Add Carousel on the right side -->
                        <div class="col-md-6">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Slides -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ url('img/slider1.jpg') }}" alt="Slider 1"
                                            style="max-width: 100%; height: 100%; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5); border-radius: 20%;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('img/25Sept.jpg') }}" alt="Slider 2"
                                            style="max-width: 100%; height: 100%; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);border-radius: 20%;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ url('img/slider3.jpg') }}" alt="Slider 3"
                                            style="max-width: 100%; height: 100%; box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.5);border-radius: 20%;">
                                    </div>
                                </div>

                                <!-- Controls -->

                                <a class="carousel-control-prev" href="#myCarrousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center py-5 my-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="input-group justify-content-md-center">
                        <img src="{{ url('img/maskot_siresma3.png') }}" width="54" height="53" class="img-fluid"
                            alt="Logo maskot" style="margin-right: 15px">
                        <h2 class="text-color-dark font-weight-bold text-9 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">E-COMMERCE SIRESMA
                        </h2>
                        <img src="{{ url('img/maskot_siresma2.png') }}" width="51" height="53" class="img-fluid"
                            alt="Logo maskot" style="margin-left: 15px">
                    </div>
                </div>
            </div>
            <br>
            <div class="row
                            justify-content-md-center">
                <div class="col-md-5">
                    <div class="input-group">
                        <div class="input-group-prepend" style="margin-right: 5px;">
                            <a class="btn btn-outline-secondary" type="button">
                                <i style="color: #3DD679" class="fas fa-history"></i>
                            </a>
                        </div>
                        <input style="border-radius: 5px; border-color: rgba(0, 0, 0, 0.500)" type="text"
                            class="form-control" placeholder="Cari di SIRESMA">
                        <div class="input-group-append" style="margin-left: 5px;">
                            <a class="btn btn-outline-secondary" type="button">
                                <i style="color: #3DD679" class="fas fa-search"></i>
                            </a>
                            <a href="chart" class="btn btn-outline-secondary" type="button">
                                <i style="color: #3DD679" class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12 mb-1">
                <div class="card" style="box-shadow: -2px 4px 10px 7px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-start">
                                <h3 class="align-content-start">Kategori</h3>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar0.jpg') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong>Tas Daur Ulang</strong>
                                            </h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    35.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar2.png') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong>Topi dan Tas KREASI Daur Ulang</strong></h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    65.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar3.png') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong>LILIN KREASI MINYAK
                                                    JELANTAH</strong></h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    55.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar2.png') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong>TOPI KREASI DAN
                                                    DOMPET</strong>
                                            </h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    55.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar4.png') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong>Baby MAGGOT<br> (per
                                                    Kg)</strong></h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    2.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar4.png') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong> MAGGOT <br>(per
                                                    Kg)</strong>
                                            </h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    5.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ url('img/gambar4.png') }}" alt="Gambar 3"
                                            class="card-img-top img-center">
                                        <div class="card-body">
                                            <h3 class="card-title text-center mt-3"><strong> MAGGOT <br>(per
                                                    Kg)</strong>
                                            </h3>
                                            <p class="card-text text-center" style="color: #3DD679"><strong>Rp
                                                    5.000</strong> </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('public.loginIndex') }}" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Repeat for more cards -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container py-5 my-4">

    </div>
    </div>
    <section class="section section-height-3 border-0 m-0" style="background-color: #3DD679;">
        <div class="container py-1">
            <div class="col">
                <h2 class="text-color-light font-weight-bold text-9 mb-5-5 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Berita</h2>
                <div class="custom-half-carousel-style-1 carousel-half-full-width-wrapper carousel-half-full-width-right">
                    <div class="owl-carousel owl-theme carousel-half-full-width-right dots-align-left dots-light custom-dots-style-1 mb-0"
                        data-plugin-options="{'responsive': {'0': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'loop': false, 'nav': false, 'dots': true, 'margin': 20}">
                        <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                            data-appear-animation-delay="400">
                            <div
                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                                <div class="thumb-info-wrapper rounded-0">
                                    <img src="{{ url('img/24Sept.jpg') }}" class="img-fluid rounded-0" alt="" />
                                    <div class="thumb-info-action">
                                        <a href="{{ url('img/24Sept.jpg') }}">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                    class="fas fa-plus text-dark"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1">
                                24 September 2023 </h2>
                            <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                                <a href="{{ url('img/24Sept.jpg') }}"
                                    class="text-decoration-none text-color-light opacity-hover-8">
                                    Tim PPK Ormawa BEM FIK UDINUS </a>
                                <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1">
                                    melakukan Pelatihan untuk Memanfaatkan Minyak Jelantah dengan membuat Lilin Aromatherapy
                                </h2>
                            </h3>

                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                            data-appear-animation-delay="600">
                            <div
                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                                <div class="thumb-info-wrapper rounded-0">
                                    <img src="{{ url('img/25Sept.jpg') }}" class="img-fluid rounded-0" alt="" />
                                    <div class="thumb-info-action">
                                        <a href="{{ url('img/25Sept.jpg') }}">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                    class="fas fa-plus text-dark"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1">
                                24 September 2023 </h2>
                            <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                                <a href="{{ url('img/25Sept.jpg') }}"
                                    class="text-decoration-none text-color-light opacity-hover-8">
                                    Tim PPK Ormawa BEM FIK UDINUS </a>
                                <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1">
                                    melakukan monitoring dan evaluasi yang diadakan oleh Universitas Dian Nuswantoro yang
                                    bertempat di Gedung H lantai 1 Meeting Room UDINUS.</h2>
                            </h3>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                            data-appear-animation-delay="600">
                            <div
                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons rounded-0 mb-3">
                                <div class="thumb-info-wrapper rounded-0">
                                    <img src="{{ url('img/27Sept.jpg') }}" class="img-fluid rounded-0" alt="" />
                                    <div class="thumb-info-action">
                                        <a href="{{ url('img/27Sept.jpg') }}">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i
                                                    class="fas fa-plus text-dark"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1">
                                27 September 2023</h2>
                            <h3 class="text-transform-none font-weight-bold text-5-5 mb-0 pb-2">
                                <a href="{{ url('img/27Sept.jpg') }}"
                                    class="text-decoration-none text-color-light opacity-hover-8">
                                    Tim PPK Ormawa BEM FIK UDINUS </a>
                                <h2 class="text-color-light font-weight-semibold text-3 opacity-7 line-height-1 mb-1">telah
                                    melakukan launching aplikasi SIRESMA yang merupakan aplikasi untuk mendukung kegiatan
                                    PPK Ormawa BEM FIK di Kelurahan Sambiroto pada tanggal 27 September 2023 kemarin</h2>
                            </h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
