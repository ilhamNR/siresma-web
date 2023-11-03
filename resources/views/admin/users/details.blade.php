@extends('admin.components.layout')
@vite('resources/js/admin/userdetails.js')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ $user->profile_picture }}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $user->full_name }}</h3>

                            <p class="text-muted text-center">{{ $user->username }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Total Saldo</b> <a class="float-right">{{$user->balance}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Total Transaksi</b> <a class="float-right">{{ $user->total_transaction }}</a>
                                </li>
                                {{-- <li class="list-group-item">
                      <b>Friends</b> <a class="float-right">13,287</a>
                    </li> --}}
                            </ul>

                            {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> No. KK</strong>
                            <p class="text-muted">
                                {{ $user->no_kk }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> No. HP</strong>
                            <p class="text-muted">{{ $user->phone }}</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Alamat</strong>
                            <p class="text-muted">{{ $user->address }}</p>
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> Bank Sampah</strong>
                            <p class="text-muted">{{ $user->TrashBank()->value('name') }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" id="setoran-tab" href="#setoran"
                                        data-toggle="tab">Setoran Sampah</a></li>
                                <li class="nav-item"><a class="nav-link" id="transaksi-tab" href="#transaksi"
                                        data-toggle="tab">Transaksi</a></li>
                                <li class="nav-item"><a class="nav-link" id="settings-tab" href="#settings"
                                        data-toggle="tab">Update Profile</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="setoran">
                                    <!-- Main content -->
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">


                                                    <div class="card">
                                                        <!-- /.card-header -->
                                                        <table id="setoran_table"
                                                            class="table table-bordered table-striped" data-route={{route('admin.setoranData', $user->id)}}>
                                                            <thead>
                                                                <tr>
                                                                    <th>Tanggal Setoran</th>
                                                                    <th>Kategori</th>
                                                                    <th>Berat</th>
                                                                    <th>Kode</th>
                                                                    <th>Pendapatan User</th>
                                                                    <th>Pendapatan Admin</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            {{-- <tbody>

                                                            </tbody> --}}
                                                        </table>

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
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="transaksi">
                                    <!-- Main content -->
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12">


                                                    <div class="card">
                                                        <!-- /.card-header -->
                                                        <table id="transaksi_table"
                                                            class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nomor Transaksi</th>
                                                                    <th>Tipe</th>
                                                                    <th>Nominal</th>
                                                                    <th>Status</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            {{-- <tbody>

                                                                                                </tbody> --}}
                                                        </table>

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
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName"
                                                    placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">No. HP</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="No. HP">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">No. KK</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                    placeholder="No. KK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Bank Sampah</label>
                                            <div class="form-group col-sm-10">
                                                <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                                  <option>Value 1</option>
                                                  <option>Value 2</option>
                                                  <option>Value 3</option>
                                                </select>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@stop
