<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="hxor">
    <title>Lagenda - Agenda Kepala Dinas DKIS</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/backend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/backend/css/sb-admin.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" value="{{ old('email') }}" type="email" aria-describedby="emailHelp" required autofocus> 
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> 
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required> 
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span> 
                        @endif
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('register') }}">Register</a>
                    <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
</body>
</html>