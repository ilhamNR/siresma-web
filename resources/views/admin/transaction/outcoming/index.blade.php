@extends('admin.components.layout')

@vite('resources/js/admin/outcomingtransaction.js')
@vite('resources/css/admin/nasabah.css')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Transaksi Masuk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="outcomingTransactiontable" data-route="{{ route('admin.transaksiKeluar')}}" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tanggal Transaksi</th>
                        <th>Kode Transaksi</th>
                        <th>Nasabah</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total</th>
                            <th>Rp{{ number_format($outcome_total, 2, ',', '.') }}</th>
                            <th colspan="2"></th>

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
