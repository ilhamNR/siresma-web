@extends('admin.components.layout')

@vite('resources/js/admin/iot.js')
@vite('resources/css/admin/nasabah.css')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Timbangan Sampah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="iotTable" data-route="{{ route('admin.timbanganSampah')}}" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Berat</th>
                      <th>Status</th>
                      <th>Tanggal Timbangan</th>
                    </tr>
                    </thead>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@stop
