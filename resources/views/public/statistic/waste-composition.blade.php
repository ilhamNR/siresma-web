@extends('public.components.layout')

@section('content');
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
                        <span class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2">Komposisi Sampah</span>
                    </div>
                    <div class="d-block">
                        <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-1 line-height-1 mb-0">Komposisi Sampah</h1>
                    </div>
                    <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
                        <li><a href="#">Home</a></li>
                        <li class="active">Komposisi Sampah</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="row">
        <div class="col-12 mx-auto">
            <!-- begin box FILTER-->
            <div class="card" style="margin: 0; padding-bottom: 0px;">
                <div class="card-header">
                <div class="row">
                    <div class="col-12 col-sm-3">
                        <label class="mb-0" for="filter_tahun">Tahun</label>
                        <select class="custom-select custom-select-sm select2" id="dd_tahun">
                            <option value="ALL">[SEMUA Tahun]</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="">2022</option>                        </select>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label class="mb-0" for="filter_id_propinsi">Provinsi</label>
                        <select class="custom-select custom-select-sm select2" id="filter_id_propinsi">
                            <option value="ALL">Nasional</option><option value="11">Aceh</option><option value="12">Sumatera Utara</option><option value="13">Sumatera Barat</option><option value="14">Riau</option><option value="15">Jambi</option><option value="16">Sumatera Selatan</option><option value="17">Bengkulu</option><option value="18">Lampung</option><option value="19">Kepulauan Bangka Belitung</option><option value="21">Kepulauan Riau</option><option value="31">DKI Jakarta</option><option value="32">Jawa Barat</option><option value="33">Jawa Tengah</option><option value="34">D.I. Yogyakarta</option><option value="35">Jawa Timur</option><option value="36">Banten</option><option value="51">Bali</option><option value="52">Nusa Tenggara Barat</option><option value="53">Nusa Tenggara Timur</option><option value="61">Kalimantan Barat</option><option value="62">Kalimantan Tengah</option><option value="63">Kalimantan Selatan</option><option value="64">Kalimantan Timur</option><option value="65">Kalimantan Utara</option><option value="71">Sulawesi Utara</option><option value="72">Sulawesi Tengah</option><option value="73">Sulawesi Selatan</option><option value="74">Sulawesi Tenggara</option><option value="75">Gorontalo</option><option value="76">Sulawesi Barat</option><option value="81">Maluku</option><option value="82">Maluku Utara</option><option value="91">Papua</option><option value="92">Papua Barat</option><option value="93">Papua Selatan</option><option value="94">Papua Tengah</option><option value="95">Papua Pegunungan</option><option value="96">Papua Barat Daya</option>                        </select>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label class="mb-0" for="filter_id_district">Kabupaten/Kota</label>
                        <select class="custom-select custom-select-sm select2" id="filter_id_district" disabled="">
                            <option value="">Pilih 1 Dati2</option>                        </select>
                    </div>
                </div>
                </div><!--box-header-->
            </div>
            <!-- end box FILTER -->
            <br>
            <div class="card"> <!-- begin box -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm" style="height: 40vh !important"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="chart" style="display: block; width: 1086px; height: 131px;" class="chartjs-render-monitor" width="1086" height="131"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card"> <!-- begin box -->
                <div class="card-body">
                    <div id="tabeldata_wrapper" class="dataTables_wrapper">
                        <div class="row">
                            <div class="col-8">
                                <div class="csel DTl">
                                <div class="dataTables_length" id="tabeldata_length"><label>Show: <select name="tabeldata_length" aria-controls="tabeldata" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">SEMUA</option></select></label></div></div><!-- end Show options -->
                            </div>
                            <div class="col-4 BTN">

                            <div class="dt-buttons btn-group flex-wrap" style="float: right;"><div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle" tabindex="0" aria-controls="tabeldata" type="button" aria-haspopup="true" aria-expanded="false"><span>Tools</span></button></div> </div></div> <!-- end Filter -->
                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-sm-12">
                                <div id="tabeldata_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px none; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1085px; padding-right: 0px;"><table name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata" style="margin-left: 0px; width: 1085px;" width="100%"><thead id="thead-search" class="thead_w_searchbox text-center">
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 74.65px;" aria-label="Tahun: activate to sort column ascending">Tahun</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 138px;" aria-label="Provinsi: activate to sort column ascending">Provinsi</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 190.583px;" aria-label="Kabupaten/Kota: activate to sort column ascending">Kabupaten/Kota</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 265.783px;" aria-label="Timbulan Sampah Harian(ton)">Timbulan Sampah Harian<br>(ton)</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 285.983px;" aria-label="Timbulan Sampah Tahunan(ton): activate to sort column ascending">Timbulan Sampah Tahunan<br>(ton)</th></tr>
                                        <tr id="tr-search" style="background-color: #ecf0f5;" role="row"><th id="fil_1" rowspan="1" colspan="1"></th><th id="fil_2" rowspan="1" colspan="1"></th><th id="fil_3" rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th></tr>
                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="tabeldata" name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata_info" width="100%"><thead id="thead-search" class="thead_w_searchbox text-center">
                                        <tr role="row" style="height: 0px;"><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 74.65px;" aria-label="Tahun: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Tahun</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 138px;" aria-label="Provinsi: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Provinsi</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 190.583px;" aria-label="Kabupaten/Kota: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Kabupaten/Kota</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 265.783px;" aria-label="Timbulan Sampah Harian(ton)"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Timbulan Sampah Harian<br>(ton)</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 285.983px;" aria-label="Timbulan Sampah Tahunan(ton): activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Timbulan Sampah Tahunan<br>(ton)</div></th></tr>
                                        <tr id="tr-search" style="background-color: rgb(236, 240, 245); height: 0px;" role="row"><th id="fil_1" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 74.65px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th id="fil_2" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 138px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th id="fil_3" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 190.583px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 265.783px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 285.983px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr>
                                    </thead><tfoot>
                                        <tr style="height: 0px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 89.85px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 153.2px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 205.783px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 280.983px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">67,972.98</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 301.183px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">24,810,136.56</div></th></tr>
                                    </tfoot>

                                    <tbody>

                                    <tr role="row" class="odd"><td>2022</td><td>Aceh</td><td>Kab. Aceh Tenggara</td><td>91.32</td><td>33,332.97</td></tr><tr role="row" class="even"><td>2022</td><td>Aceh</td><td>Kab. Aceh Singkil</td><td>52.77</td><td>19,261.34</td></tr><tr role="row" class="odd"><td>2022</td><td>Aceh</td><td>Kab. Gayo Lues</td><td>41.06</td><td>14,986.02</td></tr><tr role="row" class="even"><td>2022</td><td>Aceh</td><td>Kab. Aceh Jaya</td><td>47.21</td><td>17,231.29</td></tr><tr role="row" class="odd"><td>2022</td><td>Aceh</td><td>Kab. Nagan Raya</td><td>68.95</td><td>25,165.00</td></tr><tr role="row" class="even"><td>2022</td><td>Aceh</td><td>Kab. Aceh Tamiang</td><td>120.72</td><td>44,062.80</td></tr><tr role="row" class="odd"><td>2022</td><td>Aceh</td><td>Kab. Pidie Jaya</td><td>79.53</td><td>29,029.44</td></tr><tr role="row" class="even"><td>2022</td><td>Aceh</td><td>Kota Banda Aceh</td><td>252.21</td><td>92,055.88</td></tr><tr role="row" class="odd"><td>2022</td><td>Sumatera Utara</td><td>Kab. Tapanuli Tengah</td><td>184.65</td><td>67,397.25</td></tr><tr role="row" class="even"><td>2022</td><td>Sumatera Utara</td><td>Kab. Langkat</td><td>521.44</td><td>190,323.78</td></tr></tbody>

                                </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px none; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 1085px; padding-right: 0px;"><table name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata" style="margin-left: 0px; width: 1085px;" width="100%"><tfoot>
                                        <tr><th rowspan="1" colspan="1" style="width: 89.85px;"></th><th rowspan="1" colspan="1" style="width: 153.2px;"></th><th rowspan="1" colspan="1" style="width: 205.783px;"></th><th rowspan="1" colspan="1" style="width: 280.983px;">67,972.98</th><th rowspan="1" colspan="1" style="width: 301.183px;">24,810,136.56</th></tr>
                                    </tfoot></table></div></div></div><div id="tabeldata_processing" class="dataTables_processing card" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="tabeldata_info" role="status" aria-live="polite" style="font-size: 0.8em">Showing 1 to 10 of 203 entries <em>(Total 979)</em><br>Search took: 0.17 seconds.</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="tabeldata_paginate" style="font-size: 0.8em"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="tabeldata_previous"><a href="#" aria-controls="tabeldata" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="tabeldata" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="tabeldata_ellipsis"><a href="#" aria-controls="tabeldata" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="7" tabindex="0" class="page-link">21</a></li><li class="paginate_button page-item next" id="tabeldata_next"><a href="#" aria-controls="tabeldata" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div> <!-- end -->
                        </div><!-- end row -->

                    </div><!-- end datawrapper -->
                </div><!-- end box body -->
            </div><!-- end box -->
        </div>
    </div>

</div>
@stop
