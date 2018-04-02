<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="hxor">
    <title>Agenda - Agenda Kepala Dinas Komunikasi Informatika Dan Statistik</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/frontend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('assets/frontend/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/frontend/css/freelancer.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Agenda</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Agenda</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/') }}#about">Tentang</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/') }}#contact">Kontak</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/schedule') }}">Jadwal</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <!-- Header -->
    {{--  <header class="masthead bg-primary text-white text-center">
        <div class="container">
            
        </div>
    </header>  --}}
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio" style="padding-top: 140px;">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Agenda</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                {{--  @foreach ($agendas as $agenda)  --}}
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Agenda</th>
                            <th scope="col">Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($agendas as $agenda)
                            <tr>
                            <th scope="row">{{ $no++ }}</th>
                                <td>
                                    {{ $agenda->start_date . ' ' . $agenda->clock_start }} 
                                    - 
                                    {{ $agenda->end_date . ' ' . $agenda->clock_end }}
                                </td>
                                <td>{{ $agenda->title }}</td>
                                <td>{{ $agenda->location }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{--  @endforeach  --}}
            </div>
        </div>
    </section>
    <!-- About Section -->
    {{--  <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Tentang</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="ml-auto">
                    <p class="lead">Dinas Komunikasi Informatika dan Statistik Kota Cirebon dibentuk atas dasar Peraturan Daerah Kota Cirebon
                        Nomor 7 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah dan Peraturan Walikota Cirebon
                        Nomor 59 Tahun 2016 tentang Kedudukan, Struktur Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas
                        Komunikasi Informatika dan Statistik Kota Cirebon.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Kontak Kami</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <p class="lead ">Anda bisa menghubungi kami melalui kontak dan alamat di bawah ini :</p>
                    <p class="lead"><b>Email</b> : dkis@cirebonkota.go.id</p>
                    <p class="lead ">Alamat : Jl.Dr.Sudarsono No.40 Kel. Kesambi Kec. Kesambi 45134</p>
                    <p class="lead ">No.Telp : (0231) 8804620 / 209324</p>
                </div>
            </div>
        </div>
    </section>  --}}
    <!-- Footer -->
    <footer class="footer text-center" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Lokasi</h4>
                    <p class="lead mb-0">
                        Jl.Dr.Sudarsono No.40 Kel. Kesambi Kec. Kesambi 45134
                    </p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Media Sosial Kami</h4>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-instagram"></i>
                </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">Tentang Lagenda</h4>
                    <p class="lead mb-0">Lagenda adalah buku agenda dari kegiatan kepala dinas komunikasi informatika dan statistik kota cirebon.</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Lagenda 2018</small>
        </div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('assets/frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/contact_me.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('assets/frontend/js/freelancer.min.js') }}"></script>
</body>
</html>