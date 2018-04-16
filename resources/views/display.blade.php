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

        .top-bar {
            background-color: #24337C;
        }
        
        .scroll {
            /* width: 100%; Optional */
            /* border-collapse: collapse; */
            width: 100%;
            /* margin-top: 100px; */
            /* margin-bottom: 100px; */
        }

        .table_header { background-color: #F1C032; }

        .scroll tbody, .scroll thead { display: block; }

        thead tr th { 
            text-align: center;
        }

        #table_body {
            height: 400px;
            width:100%;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .logo-padding {
            padding-top: 11px;
            padding-right: 11px;
            padding-bottom: 11px;
            padding-left: 11px;
        }


        tbody td, thead th {
            /* width: 21.1%; Optional */
        }
    </style>
</head>

<body id="page-top">

    <div class="container-fluid">
        <div class="row top-bar">
            <div class="col-sm text-center">
                <img class="logo-padding" src="{{ asset('/images/dkis-logo.png') }}" alt="" height="150" width="150">
            </div>
            <div class="col-sm text-center text-white">
                <h1 style=" padding-top: 23px; ">ISUN CIREBON</h1>
                <p style="font-size: 20px; font-weight: normal;">Info Surat Undangan dan Kehadiran</p>
            </div>
            <div class="col-sm text-center">
                <img class="logo-padding" src="{{ asset('/images/logo_crb.svg') }}" alt="" height="150" width="150">
            </div>
        </div>

        {{-- <div class="row" id=""> --}}
            <table class="table table-striped scroll" id="">
                <thead class="table_header text-white">
                    <tr>
                        <th>#</th>
                        <th>Hari/Tanggal</th>
                        <th>Kegiatan</th>
                        <th>Lokasi</th>
                        <th>Alamat</th>
                        <th>Yang Menghadiri</th>
                    </tr>
                </thead>
                <tbody id="table_body">
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
        {{-- </div> --}}
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        var my_time;
        pageScroll();
        $("#table_body").mouseover(function() {
            clearTimeout(my_time);
        }).mouseout(function() {
            pageScroll();
        });

        var $table = $('.scroll'),
            $bodyCells = $table.find('tbody tr:first').children(),
            colWidth;

        function pageScroll() {  
            var objDiv = document.getElementById("table_body");
            objDiv.scrollTop = objDiv.scrollTop + 1;  
            if (objDiv.scrollTop == (objDiv.scrollHeight - 400)) {

                objDiv.scrollTop = 0;
            }
            my_time = setTimeout('pageScroll()', 80);
        }

        // Adjust the width of thead cells when window resizes
        $(window).resize(function() {
            // Get the tbody columns width array
            colWidth = $bodyCells.map(function() {
                return $(this).width();
            }).get();
            
            // Set the width of thead columns
            $table.find('thead tr').children().each(function(i, v) {
                $(v).width(colWidth[i]);
            });    
        }).resize(); // Trigger resize handler
    </script>
</body>

</html>