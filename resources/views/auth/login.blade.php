<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Login to Applicant Exam</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<style>
    .main-container{
        position: relative;
    }
    .card{
        box-shadow:
        inset 0 -5em 5em rgba(0,0,0,0.1),
             0 0  0 3px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
    }
    .image{
      position: absolute;
      height: 100%;
      width: 100%;
    }
</style>

<body>
    <style>
        .login {
            max-width: 512px;
        }
    </style>
        <img class="image" src="assets/img/ox.jpg" alt="">
<div class="main-container">
    <header>
        <img src="assets/img/new core.png" width="100" height="100" alt="" style="display: block; margin: auto;">
    </header>
    <div class="container-fluid">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
            <h5 class="text-center">Login to Applicant Exam</h5>
        </div><br>
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Username</label>
                        <input id="usr" name="usr" type="text" value="{{ old('usr') }}" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" placeholder="Input Username :" required autofocus>
                    </div>
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="">Password</label>
                        <input id="password" name="password" type="password" class="form-control {{ $errors->has('usr') ? 'is-invalid' : '' }}" placeholder="Input Password :" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('usr') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <center><button type="submit" class="btn btn-primary btn-block col-3">Login</button></center>       
                    </div>
                    <p class="text-center text-muted">
                        Don't have an account?
                        <a href="/">Register here!</a>
                    </p>
                </form>
            </div>
        </div>
</div>
</body>
</html>