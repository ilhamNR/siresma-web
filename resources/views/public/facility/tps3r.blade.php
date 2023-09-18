@extends('public.components.layout')

@section('content')
<div role="main" class="main">
    <section
      class="page-header page-header-modern bg-primary custom-page-header"
    >
      <div
        class="custom-svg-style-1 svg-fill-color-primary position-absolute top-0 left-50pct transform3dx-n50 h-100 z-index-0"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="0 0 1920 400"
          xml:space="preserve"
          preserveAspectRatio="none"
          width="100%"
          height="100%"
          data-plugin-float-element-svg="true"
        >
          <circle
            id="svg_2"
            r="7.5"
            cy="539.5"
            cx="209.5"
            fill="#FFF"
            opacity="0.2"
            data-plugin-float-element
            data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"
          />
          <circle
            id="svg_3"
            r="12"
            cy="211"
            cx="268"
            fill="#FFF"
            opacity="0.2"
            data-plugin-float-element
            data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}"
          />
          <circle
            id="svg_4"
            r="17"
            cy="144"
            cx="1864"
            fill="#FFF"
            opacity="0.2"
            data-plugin-float-element
            data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"
          />
          <circle
            id="svg_6"
            r="28.5"
            cy="326.74992"
            cx="327.75073"
            stroke-miterlimit="10"
            stroke-width="3"
            stroke="6CD499"
            fill="none"
          />
          <circle
            opacity="0.2"
            stroke="#ffffff"
            id="svg_8"
            r="21.5"
            cy="340.25"
            cx="90.74976"
            fill="none"
            data-plugin-float-element
            data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"
          />
          <circle
            stroke="#ffffff"
            opacity="0.2"
            id="svg_9"
            r="14.625"
            cy="689.625"
            cx="128.87476"
            fill="none"
            data-plugin-float-element
            data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}"
          />
        </svg>
      </div>

      <div class="container position-relative z-index-1 mt-4 h-100">
        <div class="row h-100">
          <div class="col align-self-end">
            <div class="d-block">
              <span
                class="d-block custom-stroke-text-effect-1 custom-big-text-2 font-weight-bold opacity-2"
                >TPS3R</span
              >
            </div>
            <div class="d-block">
              <h1
                class="text-color-light font-weight-bold positive-ls-3 custom-big-text-1 line-height-1 mb-0"
              >
                TPS3R
              </h1>
            </div>
            <ul class="breadcrumb breadcrumb-light d-block py-3 mb-5">
              <li><a href="#">Home</a></li>
              <li class="active">TPS3R</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="row">
      <div class="col-12 mx-auto">
        <!-- begin box FILTER-->
        <div class="card" style="margin: 0; padding-bottom: 0px">
          <div class="card-header">
            <div class="row">
              <div class="col-12 col-sm-3">
                <label class="mb-0" for="filter_tahun">Tahun</label>
                <select
                  class="custom-select custom-select-sm select2"
                  id="dd_tahun"
                >
                  <option value="ALL">[SEMUA Tahun]</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
              </div>

              <div class="col-12 col-sm-4">
                <label class="mb-0" for="filter_id_propinsi"
                  >Provinsi</label
                >
                <select
                  class="custom-select custom-select-sm select2"
                  id="filter_id_propinsi"
                >
                  <option value="ALL">Nasional</option>
                  <option value="11">Aceh</option>
                  <option value="12">Sumatera Utara</option>
                  <option value="13">Sumatera Barat</option>
                  <option value="14">Riau</option>
                  <option value="15">Jambi</option>
                  <option value="16">Sumatera Selatan</option>
                  <option value="17">Bengkulu</option>
                  <option value="18">Lampung</option>
                  <option value="19">Kepulauan Bangka Belitung</option>
                  <option value="21">Kepulauan Riau</option>
                  <option value="31">DKI Jakarta</option>
                  <option value="32">Jawa Barat</option>
                  <option value="33">Jawa Tengah</option>
                  <option value="34">D.I. Yogyakarta</option>
                  <option value="35">Jawa Timur</option>
                  <option value="36">Banten</option>
                  <option value="51">Bali</option>
                  <option value="52">Nusa Tenggara Barat</option>
                  <option value="53">Nusa Tenggara Timur</option>
                  <option value="61">Kalimantan Barat</option>
                  <option value="62">Kalimantan Tengah</option>
                  <option value="63">Kalimantan Selatan</option>
                  <option value="64">Kalimantan Timur</option>
                  <option value="65">Kalimantan Utara</option>
                  <option value="71">Sulawesi Utara</option>
                  <option value="72">Sulawesi Tengah</option>
                  <option value="73">Sulawesi Selatan</option>
                  <option value="74">Sulawesi Tenggara</option>
                  <option value="75">Gorontalo</option>
                  <option value="76">Sulawesi Barat</option>
                  <option value="81">Maluku</option>
                  <option value="82">Maluku Utara</option>
                  <option value="91">Papua</option>
                  <option value="92">Papua Barat</option>
                  <option value="93">Papua Selatan</option>
                  <option value="94">Papua Tengah</option>
                  <option value="95">Papua Pegunungan</option>
                  <option value="96">Papua Barat Daya</option>
                </select>
              </div>

              <div class="col-12 col-sm-4">
                <label class="mb-0" for="filter_id_district"
                  >Kabupaten/Kota</label
                >
                <select
                  class="custom-select custom-select-sm select2"
                  id="filter_id_district"
                  disabled=""
                >
                  <option value="">Pilih 1 Dati2</option>
                </select>
              </div>
            </div>
          </div>
          <!--box-header-->
        </div>
        <!-- end box FILTER -->

        <div class="card">
          <!-- begin box -->
          <div class="card-body">
            <div id="tabeldata_wrapper" class="dataTables_wrapper">
              <div class="row">
                <div class="col-8">
                  <div class="csel DTl">
                    <div class="dataTables_length" id="tabeldata_length">
                      <label
                        >Show:
                        <select
                          name="tabeldata_length"
                          aria-controls="tabeldata"
                          class="custom-select custom-select-sm form-control form-control-sm"
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="-1">SEMUA</option>
                        </select></label
                      >
                    </div>
                  </div>
                  <!-- end Show options -->
                </div>
                <div class="col-4 BTN">
                  <div
                    class="dt-buttons btn-group flex-wrap"
                    style="float: right"
                  >
                    <div class="btn-group">
                      <button
                        class="btn btn-secondary buttons-collection dropdown-toggle"
                        tabindex="0"
                        aria-controls="tabeldata"
                        type="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <span>Tools</span>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end Filter -->
              </div>
              <!-- end row-->

              <div class="row">
                <div class="col-sm-12">
                  <div
                    id="tabeldata_wrapper"
                    class="dataTables_wrapper dt-bootstrap4 no-footer"
                  >
                    <div class="row">
                      <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="dataTables_scroll">
                          <div
                            class="dataTables_scrollHead"
                            style="
                              overflow: hidden;
                              position: relative;
                              border: 0px none;
                              width: 100%;
                            "
                          >
                            <div
                              class="dataTables_scrollHeadInner"
                              style="
                                box-sizing: content-box;
                                width: 1085px;
                                padding-right: 0px;
                              "
                            >
                              <table
                                name="tabeldata"
                                class="table table-sm table-bordered table-striped dataTable text-sm no-footer"
                                role="grid"
                                aria-describedby="tabeldata"
                                style="margin-left: 0px; width: 1085px"
                                width="100%"
                              >
                                <thead
                                  id="thead-search"
                                  class="thead_w_searchbox text-center"
                                >
                                  <tr role="row">
                                    <th
                                      class="details-control text-center sorting_disabled"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 15px"
                                      aria-label=""
                                    ></th>
                                    <th
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="tabeldata"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 44.15px"
                                      aria-label="Tahun: activate to sort column ascending"
                                    >
                                      Tahun
                                    </th>
                                    <th
                                      class="sorting_disabled"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 8.78333px"
                                      aria-label="P"
                                    >
                                      P
                                    </th>
                                    <th
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="tabeldata"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 56.4667px"
                                      aria-label="Provinsi: activate to sort column ascending"
                                    >
                                      Provinsi
                                    </th>
                                    <th
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="tabeldata"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 114.967px"
                                      aria-label="Kabupaten/Kota: activate to sort column ascending"
                                    >
                                      Kabupaten/Kota
                                    </th>
                                    <th
                                      class="sorting"
                                      tabindex="0"
                                      aria-controls="tabeldata"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 177.483px"
                                      aria-label="Nama Fasilitas: activate to sort column ascending"
                                    >
                                      Nama Fasilitas
                                    </th>
                                    <th
                                      class="sorting_disabled"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 161px"
                                      aria-label="Jenis"
                                    >
                                      Jenis
                                    </th>
                                    <th
                                      class="sorting_disabled"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 44.5px"
                                      aria-label="Status"
                                    >
                                      Status
                                    </th>
                                    <th
                                      class="text-center sorting"
                                      tabindex="0"
                                      aria-controls="tabeldata"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 96.5667px"
                                      aria-label="Sampahmasuk (ton/thn): activate to sort column ascending"
                                    >
                                      Sampah<br />masuk (ton/thn)
                                    </th>
                                    <th
                                      class="text-center sorting"
                                      tabindex="0"
                                      aria-controls="tabeldata"
                                      rowspan="1"
                                      colspan="1"
                                      style="width: 107.083px"
                                      aria-label="Sampahterkelola (ton/thn): activate to sort column ascending"
                                    >
                                      Sampah<br />terkelola (ton/thn)
                                    </th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          </div>
                          <div
                            class="dataTables_scrollBody"
                            style="
                              position: relative;
                              overflow: auto;
                              width: 100%;
                            "
                          >
                            <table
                              id="tabeldata"
                              name="tabeldata"
                              class="table table-sm table-bordered table-striped dataTable text-sm no-footer"
                              role="grid"
                              aria-describedby="tabeldata_info"
                              width="100%"
                            >
                              <thead
                                id="thead-search"
                                class="thead_w_searchbox text-center"
                              >
                                <tr role="row" style="height: 0px">
                                  <th
                                    class="details-control text-center sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      width: 15px;
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                    "
                                    aria-label=""
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    ></div>
                                  </th>
                                  <th
                                    class="sorting"
                                    aria-controls="tabeldata"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 44.15px;
                                    "
                                    aria-label="Tahun: activate to sort column ascending"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Tahun
                                    </div>
                                  </th>
                                  <th
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 8.78333px;
                                    "
                                    aria-label="P"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      P
                                    </div>
                                  </th>
                                  <th
                                    class="sorting"
                                    aria-controls="tabeldata"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 56.4667px;
                                    "
                                    aria-label="Provinsi: activate to sort column ascending"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Provinsi
                                    </div>
                                  </th>
                                  <th
                                    class="sorting"
                                    aria-controls="tabeldata"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 114.967px;
                                    "
                                    aria-label="Kabupaten/Kota: activate to sort column ascending"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Kabupaten/Kota
                                    </div>
                                  </th>
                                  <th
                                    class="sorting"
                                    aria-controls="tabeldata"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 177.483px;
                                    "
                                    aria-label="Nama Fasilitas: activate to sort column ascending"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Nama Fasilitas
                                    </div>
                                  </th>
                                  <th
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 161px;
                                    "
                                    aria-label="Jenis"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Jenis
                                    </div>
                                  </th>
                                  <th
                                    class="sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 44.5px;
                                    "
                                    aria-label="Status"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Status
                                    </div>
                                  </th>
                                  <th
                                    class="text-center sorting"
                                    aria-controls="tabeldata"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 96.5667px;
                                    "
                                    aria-label="Sampahmasuk (ton/thn): activate to sort column ascending"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Sampah<br />masuk (ton/thn)
                                    </div>
                                  </th>
                                  <th
                                    class="text-center sorting"
                                    aria-controls="tabeldata"
                                    rowspan="1"
                                    colspan="1"
                                    style="
                                      padding-top: 0px;
                                      padding-bottom: 0px;
                                      border-top-width: 0px;
                                      border-bottom-width: 0px;
                                      height: 0px;
                                      width: 107.083px;
                                    "
                                    aria-label="Sampahterkelola (ton/thn): activate to sort column ascending"
                                  >
                                    <div
                                      class="dataTables_sizing"
                                      style="height: 0px; overflow: hidden"
                                    >
                                      Sampah<br />terkelola (ton/thn)
                                    </div>
                                  </th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr role="row" class="odd">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting SD Negeri 54</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">1.58</td>
                                  <td class="text-center">0.85</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting Kebun Gampong</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">10.28</td>
                                  <td class="text-center">8.16</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>komposting Perumahan Seutui</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">26.64</td>
                                  <td class="text-center">24.81</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting Kantor Bappeda</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">0.18</td>
                                  <td class="text-center">0.15</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting SMP 17</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">20.37</td>
                                  <td class="text-center">6.32</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting Perumahan Bandar Baru</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">22.47</td>
                                  <td class="text-center">20.44</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting SD Negeri 27</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">0.92</td>
                                  <td class="text-center">0.89</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>
                                    Komposting Kantor Camat Ulee Kareng
                                  </td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">0.49</td>
                                  <td class="text-center">0.41</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>2</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting Perumahan Panteriek</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">29.85</td>
                                  <td class="text-center">24.44</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td class="details-control text-center">
                                    <i
                                      class="fa fa-plus-square"
                                      aria-hidden="true"
                                    ></i>
                                  </td>
                                  <td>2022</td>
                                  <td>1</td>
                                  <td>Aceh</td>
                                  <td>Kota Banda Aceh</td>
                                  <td>Komposting MIN 1 Banda Aceh</td>
                                  <td>Komposting Skala Kecil atau RT/RW</td>
                                  <td>A</td>
                                  <td class="text-center">0.70</td>
                                  <td class="text-center">0.37</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div
                          id="tabeldata_processing"
                          class="dataTables_processing card"
                          style="display: none"
                        >
                          Processing...
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-5">
                        <div
                          class="dataTables_info"
                          id="tabeldata_info"
                          role="status"
                          aria-live="polite"
                          style="font-size: 0.8em"
                        >
                          Showing 1 to 10 of 10418 entries
                          <em>(Total 10,966)</em><br />Search took: 1.28
                          seconds.
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7">
                        <div
                          class="dataTables_paginate paging_simple_numbers"
                          id="tabeldata_paginate"
                          style="font-size: 0.8em"
                        >
                          <ul class="pagination">
                            <li
                              class="paginate_button page-item previous disabled"
                              id="tabeldata_previous"
                            >
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="0"
                                tabindex="0"
                                class="page-link"
                                >Previous</a
                              >
                            </li>
                            <li class="paginate_button page-item active">
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="1"
                                tabindex="0"
                                class="page-link"
                                >1</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="2"
                                tabindex="0"
                                class="page-link"
                                >2</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="3"
                                tabindex="0"
                                class="page-link"
                                >3</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="4"
                                tabindex="0"
                                class="page-link"
                                >4</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="5"
                                tabindex="0"
                                class="page-link"
                                >5</a
                              >
                            </li>
                            <li
                              class="paginate_button page-item disabled"
                              id="tabeldata_ellipsis"
                            >
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="6"
                                tabindex="0"
                                class="page-link"
                                >…</a
                              >
                            </li>
                            <li class="paginate_button page-item">
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="7"
                                tabindex="0"
                                class="page-link"
                                >1042</a
                              >
                            </li>
                            <li
                              class="paginate_button page-item next"
                              id="tabeldata_next"
                            >
                              <a
                                href="#"
                                aria-controls="tabeldata"
                                data-dt-idx="8"
                                tabindex="0"
                                class="page-link"
                                >Next</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end -->
              </div>
              <!-- end row -->
            </div>
            <!-- end datawrapper -->
          </div>
          <!-- end box body -->
        </div>
        <!-- end box -->
      </div>
    </div>
  </div>
@stop
