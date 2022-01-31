<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SC.Shop</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/car2.png')}}">
    <style type="text/css">
        .body{
            background: url("/img/f.jpg");
        }
    </style>
</head>
<body class="body">
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><img src="{{ URL::asset('img/car2.png'); }}" width="100" height="60" alt="" /><b style="color:black" >SC.Shop</b></h2>
             <h3 style="color:black" align="center">Selamat Datang Ditoko Kami</h3>
            <hr style="color:black">
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label style="color:black">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label style="color:black">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button style="color:black" type="submit" class="btn btn-danger btn-block"><h4>Masuk</h4></button>
                <h4><p class="text-center"><font color="black">Belum punya akun? <a style="color:blue" href="{{ route('register-user') }}">Register</a> sekarang!</font></p></h4>
            </form>
        </div>
    </div>
</body>
</html>