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
                <span class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2">APLIKASI</span>
            </div>
            <div class="d-block">
                <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-1 line-height-1 mb-0">APLIKASI</h1>
            </div>
            <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
            </ul>
        </div>
    </div>
</div>

</section>
    <div class="container text-center py-5 my-4">
            <div class="col text-center">
                <h2 class="text-color-dark font-weight-bold text-9 mb-4 appear-animation"
                    data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Aplikasi SIRESMA</h2>
            </div>
                <div class="col text-center">
                    <h3 class="text-color-dark  text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus"
                        data-appear-animation-delay="600">Dengan fokus utama pada pengelolaan bank sampah dan penyederhanaan proses pilah sampah untuk masyarakat Kelurahan Sambiroto, 
                        Tembalang, Kota Semarang, kami hadirkan solusi terintegrasi yang memikat untuk membantu Anda mengelola sampah dan tabungan
                        sampah Anda dengan lebih efisien. Seta memantau data timbunan sampah yang ada pertiap periode</h3>
                </div>        
            </div>
            <div class="container py-1 my-2">
            <div class="row">
                <div class="col-md-5 mb-3">
                    <img src="{{url('img/Mockup_siresma.png')}}" width="500" height="420"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                </div>
                <div class="col-md-7 my-2">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{url('img/Googleplaylogo.png')}}" width="150" height="70"
                                data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                                <a href="https://play.google.com/store/apps/details?id=com.siresma&pcampaignid=web_share" target="_blank" class="btn btn-primary">DOWNLOAD SEKARANG</a>
                    </div>
                </div>
                <div class="col-md-15 my-2">
                    <img src="{{url('img/maskot_siresma2.png')}}" width="200" height="280"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                        <img src="{{url('img/maskot_siresma1.png')}}" width="300" height="400"
                         data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                </div>
                
                
            </div>
            
        </div>
        
        <br>

    </div>

@stop
