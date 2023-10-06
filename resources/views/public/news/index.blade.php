@extends('public.components.layout')

@section('content')

<div role="main" class="main">

    <section class="page-header page-header-modern bg-primary custom-page-header">

        <div class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 400" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" data-plugin-float-element-svg="true">
                <circle id="svg_2" r="7.5" cy="539.5" cx="209.5" fill="#FFF" opacity="0.2" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"/>
                <circle id="svg_3" r="12" cy="211" cx="268" fill="#FFF" opacity="0.2" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}"/>
                <circle id="svg_4" r="17" cy="144" cx="1864" fill="#FFF" opacity="0.2" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"/>
                <circle id="svg_6" r="28.5" cy="326.74992" cx="327.75073" stroke-miterlimit="10" stroke-width="3" stroke="6CD499" fill="none"/>
                <circle opacity="0.2" stroke="#ffffff" id="svg_8" r="21.5" cy="340.25" cx="90.74976" fill="none" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"/>
                <circle stroke="#ffffff" opacity="0.2" id="svg_9" r="14.625" cy="689.625" cx="128.87476" fill="none" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}"/>
            </svg>
        </div>

        <div class="container position-relative z-index-1 mt-4 h-100">
            <div class="row h-100">
                <div class="col align-self-end">
                    <div class="d-block">
                        <span class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2">Berita</span>
                    </div>
                    <div class="d-block">
                        <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-1 line-height-1 mb-0">Berita</h1>
                    </div>
                    <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
                        <li><a href="#">Home</a></li>
                        <li class="active">Berita</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="row">
            <!-- Konten Pertama -->
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-stretch">
                        <img src="{{url('img/24Sept.jpg')}}" alt="Gambar 1" class="card-img-top img-center">
                        <h3 class="card-title text-center mt-2">24 September 2023</h3>
                        <p class="card-text text-justify">Tim PPK Ormawa BEM FIK UDINUS melakukan Pelatihan untuk Memanfaatkan Minyak Jelantah dengan membuat Lilin Aromatherapy</p>
                        <a href="#" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
    
            <!-- Konten Kedua -->
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-stretch">
                        <img src="{{url('img/25Sept.jpg')}}" alt="Gambar 2" class="card-img-top img-center">
                        <h3 class="card-title text-center mt-2">26 September 2023</h3>
                        <p class="card-text text-justify">TIM PPK Ormawa BEM FIK UDINUS melakukan monitoring dan evaluasi yang diadakan oleh Universitas Dian Nuswantoro yang bertempat di Gedung H lantai 1 Meeting Room UDINUS.</p>
                        <a href="#" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
    
            <!-- Konten Ketiga -->
            <div class="col-md-4">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-stretch">
                        <img src="{{url('img/27Sept.jpg')}}" alt="Gambar 3" class="card-img-top img-center">
                        <h3 class="card-title text-center mt-2">27 September 2023</h3>
                        <p class="card-text text-justify">TIM PPK Ormawa BEM FIK UDINUS telah melakukan launching aplikasi SIRESMA yang merupakan aplikasi untuk mendukung kegiatan PPK Ormawa BEM FIK di Kelurahan Sambiroto pada tanggal 27 September 2023 kemarin</p>
                        <a href="#" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>

@stop
