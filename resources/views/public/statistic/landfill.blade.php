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
                        <span class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2">Timbunan Sampah</span>
                    </div>
                    <div class="d-block">
                        <h1 class="text-color-light font-weight-bold positive-ls-3 custom-big-text-1 line-height-1 mb-0">Timbunan Sampah</h1>
                    </div>
                    <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
                        <li><a href="#">Home</a></li>
                        <li class="active">Timbunan Sampah</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="row">
        <div class="col-12 mx-auto">
            <!-- end box FILTER -->
            <div class="card"> <!-- begin box -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm" style="height: 40vh !important"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="chart" style="display: block; width: 1086px; height: 131px;" class="chartjs-render-monitor" width="1086" height="131"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <br>

              <!-- begin box FILTER-->
              <div class="card" style="margin: 0; padding-bottom: 0px;">
                <div class="card-header">
                <div class="row">
                    <div class="col-12 col-sm-3">
                        <label class="mb-0" for="filter_tahun"><strong>Tahun</strong></label>
                        <select class="custom-select custom-select-sm select2" id="dd_tahun">
                            <option value="ALL">[SEMUA Tahun]</option><option value="2022">2022</option><option value="2023">2023</option><option value="2025">2025</option>                        
                        </select>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label class="mb-0" for="filter_id_propinsi"><strong>RW</strong></label>
                        <select class="custom-select custom-select-sm select2" id="filter_id_propinsi">
                            <option value="ALL">Pilih</option><option value="02">02</option><option value="04">04</option><option value="05">05</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-4">
                        <label class="mb-0" for="filter_id_propinsi"><strong>RT</strong></label>
                        <select class="custom-select custom-select-sm select2" id="filter_id_propinsi">
                            <option value="ALL">Pilih</option><option value="08">08</option><option value="05">05</option><option value="06">06</option>
                        </select>
                    </div>
                </div>
                </div><!--box-header-->
            </div>

            <div class="card"> <!-- begin box -->
                <div class="card-body">
                    <div id="tabeldata_wrapper" class="dataTables_wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="tabeldata_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px none; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 100%; padding-right: 0px;"><table name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata" style="margin-left: 0px; width: 100%;" width="100%"><thead id="thead-search" class="thead_w_searchbox text-center">
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 120px;" aria-label="Tahun: activate to sort column ascending">Tahun</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 200px;" aria-label="Bulan: activate to sort column ascending">Bulan</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 250px;" aria-label="Bank Sampah: activate to sort column ascending">Bank Sampah</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 300px;" aria-label="RT">RT</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 300px;" aria-label="RW: activate to sort column ascending">RW</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 265.783px;" aria-label="Timbulan Sampah Harian(kg)">Timbulan Sampah Harian<br>(Kg)</th><th class="sorting" tabindex="0" aria-controls="tabeldata" rowspan="1" colspan="1" style="width: 285.983px;" aria-label="Timbulan Sampah Bulanan(kg): activate to sort column ascending">Timbulan Sampah Bulanan<br>(Kg)</th></tr>
                                        <tr id="tr-search" style="background-color: #ecf0f5;" role="row"><th id="fil_1" rowspan="1" colspan="1"></th><th id="fil_2" rowspan="1" colspan="1"></th><th id="fil_3" rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1"></th></tr>
                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="tabeldata" name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata_info" width="100%"><thead id="thead-search" class="thead_w_searchbox text-center">
                                        <tr role="row" style="height: 0px;"><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 120px;" aria-label="Tahun: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Tahun</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 200px;" aria-label="Bulan: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Bulan</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 250px;" aria-label="Bank Sampah: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Bank Sampah</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 100px;" aria-label="RT: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">RT</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 100px;"aria-label="RW: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">RW</div></th><th class="sorting_disabled" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 285.983px;"Timbulan Sampah Harian(kg)"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Timbulan Sampah Harian<br>(Kg)</div></th><th class="sorting" aria-controls="tabeldata" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 285.983px;" aria-label="Timbulan Sampah Bulanan(kg): activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Timbulan Sampah Bulanan<br>(Kg)</div></th></tr>
                                        <tr id="tr-search" style="background-color: rgb(236, 240, 245); height: 0px;" role="row"><th id="fil_1" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 70px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th id="fil_2" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 70px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th id="fil_3" rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 70px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 70px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 70px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th></tr>
                                    </thead><tfoot>
                                        <tr style="height: 0px;"><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 89.85px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 153.2px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 205.783px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;"></div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 280.983px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">67,972.98</div></th><th rowspan="1" colspan="1" style="padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px; width: 301.183px;"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">24,810,136.56</div></th></tr>
                                    </tfoot>

                                    <tbody>
                                        <tr role="row" class="odd"><td>2022</td><td>Januari</td><td>Mentari</td><td>08</td><td>02</td><td>100</td><td>3000</td></tr>
                                        <tr role="row" class="even"><td>2022</td><td>Februari</td><td>Ngudi Berkah</td><td>05</td><td>05</td><td>57</td><td>1710</td></tr>
                                        <tr role="row" class="odd"><td>2022</td><td>Maret</td><td>Srikandi</td><td>06</td><td>05</td><td>35</td><td>1085</td></tr>
                                    </tbody>

                                </table></div><div class="dataTables_scrollFoot" style="overflow: hidden; border: 0px none; width: 100%;"><div class="dataTables_scrollFootInner" style="width: 100%; padding-right: 0px;"><table name="tabeldata" class="table table-sm table-bordered table-striped dataTable text-sm" role="grid" aria-describedby="tabeldata" style="margin-left: 0px; width: 100%;" width="100%"><tfoot>
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
