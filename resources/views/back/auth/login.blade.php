<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SC.Shop - Admin </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/car2.png')}}">
    <style type="text/css">
        .body{
            background: url("/img/f.jpg");
        }
    </style>
</head>
<body class="body">
<div class="container">
    <br>
    <br>
    <br>
        <div class="col-md-4 col-md-offset-4">

        <main>
           	<div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>Login Admin</h3></div>
                                <div class="card-body">
                                    <br>

                                    <form method="POST" action="{{ route('admin.login') }}" novalidate>
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <label for="inputEmailAddress">Email address</label>
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" placeholder="Isi email" name="email" value="{{old('email')}}" />
                                            @error('email')
                                                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <label for="inputPassword">Password</label>
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputPassword" type="password" placeholder="Isi password" name="password" />
                                            @error('password')
                                                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-danger">{{__('login')}}</button>
                                        </div>
                                    </form>
                                </div>
                            <div class="card-footer text-center py-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>