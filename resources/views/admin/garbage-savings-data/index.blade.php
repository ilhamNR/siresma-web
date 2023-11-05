@extends('admin.components.layout')

@vite('resources/js/admin/trashstore.js')
@vite('resources/css/admin/nasabah.css')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Setoran Sampah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="trashStoretable" data-route="{{ route('admin.setoranSampah')}}" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Tanggal Setoran</th>
                      <th>Nasabah</th>
                      <th>Bank Sampah</th>
                      <th>Kategori</th>
                      <th>Berat</th>
                      <th>Kode</th>
                      <th>Status</th>
                      <th>Pendapatan User</th>
                      <th>Pendapatan Admin</th>
                      <th>Aksi</th>
                      <th>Unit</th>
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
