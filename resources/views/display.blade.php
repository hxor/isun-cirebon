<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="hxor">
    <title>Isun Cirebon - Info Surat Undangan dan Kehadiran</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/frontend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <style>
    body { font-family: 'helvetica'; }
        #contain {
            height: 500px;
            overflow-y: scroll;
        }
        .top-bar {
            background-color: #24337C;
        }
        .table_scroll {
            width: 100%;
            margin-top: 100px;
            margin-bottom: 100px;
            border-collapse: collapse;
        }
        .table_scroll thead th {
            padding: 10px;
            background-color: #F1C032;
            color: #fff;
        }
        .table_scroll tbody td {
            padding: 10px;
            /* background-color: #ed3a86; */
            /* color: #fff; */
        }
        .table_header {
            background-color: #F1C032;
        }
    </style>
</head>

<body id="page-top">

    <div class="container-fluid">
        <div class="row top-bar">
            <div class="col-sm text-center">
                <img src="{{ asset('/images/dkis-logo.png') }}" alt="" height="150" width="150">
            </div>
            <div class="col-sm text-center text-white">
                <h1 style=" padding-top: 23px; ">ISUN CIREBON</h1>
                <p style="font-size: 20px; font-weight: normal;">Info Surat Undangan dan Kehadiran</p>
            </div>
            <div class="col-sm text-center">
                <img src="{{ asset('/images/logo_crb.svg') }}" alt="" height="150" width="150">
            </div>
        </div>


        <table class="table table-striped table_header" id="">
            <thead class="text-white">
                <tr>
                    <th style="width: 47px;">#</th>
                    <th style="width: 577px;">Hari/Tanggal</th>
                    <th style="width: 350px;">Kegiatan</th>
                    <th style="width: 253px;">Lokasi</th>
                    <th style="width: 100;">Alamat</th>
                    <th style="width: 200px;">Yang Menghadiri</th>
                </tr>
            </thead>
        </table>

        <div class="row" id="contain">
            <table class="table table-striped table_scroll" id="table_scroll">
                
                <tbody>
                    @php $no = 1; 
                    @endphp 
                    @foreach ($agendas as $agenda)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        @if ($agenda->date_start == $agenda->date_end)
                        <td>
                            {{ $agenda->start_date }} - {{ $agenda->clock_start }} s/d {{ $agenda->clock_end == '00:00' ? 'Selesai' : $agenda->clock_end }}
                        </td>
                        @else
                        <td> {{ $agenda->start_date . ' ' . $agenda->clock_start }} - {{ $agenda->end_date . ' ' . $agenda->clock_end }}
                        </td>
                        @endif
                        <td>{{ $agenda->title }}</td>
                        <td>{{ $agenda->location }}</td>
                        <td>{{ $agenda->address }}</td>
                        <td>{{ $agenda->disposition }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        var my_time;
        $(document).ready(function() {
            pageScroll();
            $("#contain").mouseover(function() {
                clearTimeout(my_time);
            }).mouseout(function() {
                pageScroll();
            });
        });

        function pageScroll() {  
            var objDiv = document.getElementById("contain");
            objDiv.scrollTop = objDiv.scrollTop + 1;  
            // $('p:nth-of-type(1)').html('scrollTop : '+ objDiv.scrollTop);
            // $('p:nth-of-type(2)').html('scrollHeight : ' + objDiv.scrollHeight);
            if (objDiv.scrollTop == 192) {
                objDiv.scrollTop = 0;
            }
            my_time = setTimeout('pageScroll()', 50);
        }
    </script>
</body>

</html>