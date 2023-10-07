<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>LOGIN</title>
    <style>
        body {
            background-color: #3DD679;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #fff;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }

        .card-body {
            background-color: #fff;
            border-radius: 0 0 10px 10px;
        }

        .form-group.row {
            margin-bottom: 20px;
        }

        .form-check-label {
            font-weight: normal;
        }

        .btn-primary {
            background-color: #3DD679;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2fb862;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 offset-md-6">
            <img src="{{url('img/Logo Siresma_2-01.svg')}}" alt="{{url('img/icon_siresma1.png')}}" width="105" height="150" appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
            <img src="{{url('img/maskot_siresma1.png')}}" alt="{{url('img/icon_siresma1.png')}}" width="105" height="150" appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
            </div>
            <div class="appear-animation" data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="800">
                    <h1 class="font-weight-bold positive-ls-3 custom-big-text-2 line-height-1 mb-4" style="font-family: Poppins; color: white;">
                        Sistem Resik Mandiri
                    </h1>
            </div>                 
            <div class="col-md-8">
                <div class="card">
                    <BR></BR>
                    <div class="card-header">{{ __('MASUK SIRESMA') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group col ">
                                <div class="col-md-20 justify-content-center">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email Anda" style="border-radius: 82px;">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col">
                                <div class="col-md-20">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Password Anda" style="border-radius: 82px;">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-4">
                                    <div class="form-check">
                                         <h6>Belum Punya Akun? <a href="">Register</a></h6>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="btn btn-primary btn-lg font-weight-bold">{{ __('LOGIN') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
