@extends('admin.components.layout')

@vite('resources/js/admin/nasabah.js')
@vite('resources/css/admin/nasabah.css')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Nasabah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="nasabahTable" data-detail-route={{route('admin.details', '')}} data-route="{{ route('admin.nasabah')}}" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>No. HP</th>
                      <th>Lokasi Bank Sampah</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>No. HP</th>
                        <th>Lokasi Bank Sampah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
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
