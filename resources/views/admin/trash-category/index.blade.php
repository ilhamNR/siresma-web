@extends('admin.components.layout')

@vite('resources/js/admin/trashcategory.js')
@vite('resources/css/admin/nasabah.css')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Kategori Sampah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="trashCategorytable" data-route="{{ route('admin.kategoriSampah')}}" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama Kategori</th>
                      <th>Satuan</th>
                      <th>Harga</th>
                      <th>Aksi</th>
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
