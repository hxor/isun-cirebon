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
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html">Admin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    @include('layouts.backend.partials._navbar')
    </nav>
    <div class="content-wrapper">
        @yield('content')
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Your Website 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/backend/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('assets/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('assets/backend/js/sb-admin.min.js') }}"></script>
    </div>
</body>
</html>