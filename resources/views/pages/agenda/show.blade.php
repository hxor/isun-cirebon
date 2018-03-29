@extends('layouts.backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Agenda</a>
            </li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Detail Agenda
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <td>{{ $agenda->id }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{ $agenda->date_start . ' ' . $agenda->clock_start . ' - ' . $agenda->date_end . ' ' . $agenda->clock_end }}</td>
                            </tr>
                            <tr>
                                <th>Perihal</th>
                                <td>{{ $agenda->title }}</td>
                            </tr>
                            <tr>
                                <th>Uraian</th>
                                <td>{{ $agenda->description }}</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>{{ $agenda->location }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $agenda->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
