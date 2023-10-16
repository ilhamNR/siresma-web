@extends('public.components.layout')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-primary custom-page-header">
            <div
                class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 1920 400" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%"
                    data-plugin-float-element-svg="true">
                    <circle id="svg_2" r="7.5" cy="539.5" cx="209.5" fill="#FFF" opacity="0.2"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" />
                    <circle id="svg_3" r="12" cy="211" cx="268" fill="#FFF" opacity="0.2"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}" />
                    <circle id="svg_4" r="17" cy="144" cx="1864" fill="#FFF" opacity="0.2"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" />
                    <circle id="svg_6" r="28.5" cy="326.74992" cx="327.75073" stroke-miterlimit="10"
                        stroke-width="3" stroke="6CD499" fill="none" />
                    <circle opacity="0.2" stroke="#ffffff" id="svg_8" r="21.5" cy="340.25" cx="90.74976"
                        fill="none" data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" />
                    <circle stroke="#ffffff" opacity="0.2" id="svg_9" r="14.625" cy="689.625" cx="128.87476"
                        fill="none" data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}" />
                </svg>
            </div>

            <div class="container position-relative z-index-1 mt-4 h-100">
                <div class="row h-100">
                    <div class="col align-self-end">
                        <div class="d-block">
                            <span
                                class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2">KERANJANG</span>
                        </div>
                        <div class="d-block">
                            <h1
                                class="text-color-light font-weight-bold positive-ls-3 custom-big-text-1 line-height-1 mb-0">
                                KERANJANG</h1>
                        </div>
                        <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container text-center py-5 my-4">
            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <div class="input-group">

                        <input style="border-radius: 5px; border-color: rgba(0, 0, 0, 0.500)" type="text" class="form-control"
                            placeholder="Cari di SIRESMA">
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
            <div class="col-md-12 mb-4">
                <div class="card" style="box-shadow: -2px 4px 10px 7px rgba(0, 0, 0, 0.2);">
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="row justify-content-between">
                                            <div class="row">
                                                <img src="{{ url('img/gambar0.jpg') }}" height="60" width="70" alt="Gambar 0">
                                            </div>
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
    @stop
