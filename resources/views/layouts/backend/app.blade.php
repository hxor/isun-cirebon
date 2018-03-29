<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="hxor">
    <title>Lagenda - Agenda Kepala Dinas DKIS</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/backend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('assets/backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/backend/vendor/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    {{--  Dropzone  --}}
    <link href="{{ asset('assets/backend/vendor/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
    {{--  Toastr  --}}
    <link href="{{ asset('assets/backend/vendor/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- Datepicker --}}
    {{-- <link href="{{ asset('assets/backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/backend/vendor/datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    {{-- Clockpicker --}}
    <link href="{{ asset('assets/backend/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/backend/css/sb-admin.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="{{ url('/') }}">Admin</a>
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
        <!-- Page level plugin JavaScript-->
        <script src="{{ asset('assets/backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('assets/backend/vendor/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
        <!-- Dropzone Plugin JavaScript -->
        <script src="{{ asset('assets/backend/vendor/dropzone-master/dist/dropzone.js') }}"></script> 
        {{-- Toastr --}}
        <script src="{{ asset('assets/backend/vendor/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/backend/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('assets/backend/js/sb-admin.min.js') }}"></script>
        @yield('scripts')
        <script type="text/javascript">
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
                todayHighlight: true
            });
            $('.clockpicker').clockpicker({
                donetext: 'Done'
            });
        </script>
        <script>
            @if (Session::has('success'))
                toastr["success"]("{{ Session::get('success') }}")
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "1500",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
            @endif
        </script>
    </div>
</body>
</html>
