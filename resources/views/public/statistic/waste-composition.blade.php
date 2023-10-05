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
            <div class="card" style="margin: 0; padding-bottom: 0px; padding: left 20px; padding-right: 20px;"> <!-- begin box -->
                <div class="card-body">
                    <div id="tabeldata_wrapper" class="dataTables_wrapper">
                        <div class="row">
                            <div class="col-8">
                                <div class="csel DTl">
                                <div class="dataTables_length" id="tabeldata_length"><label>Show: <select name="tabeldata_length" aria-controls="tabeldata" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">SEMUA</option></select></label></div></div><!-- end Show options -->
                            </div>
                            <div class="col-4 BTN">

                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-sm-12">
                                <div id="tabeldata_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px none; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1085px; padding-right: 0px;">
                                    <table name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata" style="margin-left: 0px; width: 1085px;" width="100%">
                                        <thead id="thead-search" class="thead_w_searchbox text-center">
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 74.65px;" aria-label="Tahun: activate to sort column ascending">Bulan</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 138px;" aria-label="Provinsi: activate to sort column ascending">Bank sampah</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 190.583px;" aria-label="Kabupaten/Kota: activate to sort column ascending">Komposisi</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 265.783px;" aria-label="Timbulan Sampah Harian(ton)">Timbunan Sampah<br>(ton)</th>
                                            <tr id="tr-search" style="background-color: #ecf0f5;" role="row">
                                            <th id="fil_1" rowspan="1" colspan="1"></th>
                                            <th id="fil_2" rowspan="1" colspan="1"></th>
                                            <th id="fil_3" rowspan="1" colspan="1"></th>
                                            <th rowspan="1" colspan="1"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                            <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                <table id="tabeldata" name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata_info" width="100%">
                                    <thead id="thead-search" class="thead_w_searchbox text-center">
                                        <tr role="row" style="height: 0px;">
                                            <th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 159.85px;" aria-label="Tahun: activate to sort column ascending">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Bulan</div>
                                            </th>
                                            <th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 153.2px;" aria-label="Provinsi: activate to sort column ascending">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Bank Sampah</div>
                                            </th>
                                            <th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 175.783px;" aria-label="Kabupaten/Kota: activate to sort column ascending">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Komposisi</div>
                                            </th>
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 240.983;" aria-label="Timbulan Sampah Harian(ton)">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Timbunan Sampah<br>(ton)</div>
                                            </th>
                                        </tr>
                                        <tr id="tr-search" style="background-color: rgb(236, 240, 245); height: 0px;" role="row">
                                            <th id="fil_1" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 159.85px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                            <th id="fil_2" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 153.2px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                            <th id="fil_3" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 175.783px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                            <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 240.983px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr style="height: 0px;">
                                            <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 159.85px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                            <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 153.2px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                            <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 175.783px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div>
                                            </th>
                                            <th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 240.983px;">
                                                <div class="dataTables_sizing" style="height: 0px; overflow: hidden;">67,972.98</div>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <tr role="row" class="odd"><td>Januari</td><td>Mentari</td><td>Plastik</td><td>91</td></tr>
                                        <tr role="row" class="even"><td>Februari</td><td>Srikandi</td><td>Kardus</td><td>152</td></tr>
                                        <tr role="row" class="odd"><td>Maret</td><td>Ngudi Berkah</td><td>Plastik</td><td>41</td></tr>
                                        <tr role="row" class="even"><td>Maret</td><td>Mentari</td><td>Kardus</td><td>147</td></tr>
                                    </tbody>

                                </table>
                            </div>
                            
                            <div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px none; width: 100%;">
                                <div class="dataTables_scrollFootInner" style="width: 1085px; padding-right: 0px;">
                                    <table name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata" style="margin-left: 0px; width: 1085px;" width="100%">
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1" style="width: 89.85px;"></th>
                                                <th rowspan="1" colspan="1" style="width: 153.2px;"></th>
                                                <th rowspan="1" colspan="1" style="width: 205.783px;"></th>
                                                <th rowspan="1" colspan="1" style="width: 280.983px;"></th>
                                                <th rowspan="1" colspan="1" style="width: 301.183px;"></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tabeldata_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                    </div>
                </div>
                <div class="row"><div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="tabeldata_info" role="status" aria-live="polite" style="font-size: 0.8em">Showing 1 to 10 of 203 entries <em>(Total 979)</em><br>Search took: 0.17 seconds.</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="tabeldata_paginate" style="font-size: 0.8em"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="tabeldata_previous"><a href="#" aria-controls="tabeldata" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="tabeldata" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item disabled" id="tabeldata_ellipsis"><a href="#" aria-controls="tabeldata" data-dt-idx="6" tabindex="0" class="page-link">…</a></li><li class="paginate_button page-item "><a href="#" aria-controls="tabeldata" data-dt-idx="7" tabindex="0" class="page-link">21</a></li><li class="paginate_button page-item next" id="tabeldata_next"><a href="#" aria-controls="tabeldata" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div> <!-- end -->
                        </div><!-- end row -->

                    </div><!-- end datawrapper -->
                </div><!-- end box body -->
            </div><!-- end box -->
        </div>
    </div>

</div>
@stop
