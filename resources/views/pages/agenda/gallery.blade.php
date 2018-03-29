@extends('layouts.backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Gallery</a>
            </li>
            <li class="breadcrumb-item active">Add New</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        Upload Foto Agenda
                    </div>
                    <div class="card-body">
                        {!! Form::open(['method' => 'POST', 'route' => ['admin.agenda.upload.store', $agenda->id], 'class' => 'dropzone']) !!}
                        {!! Form::close() !!}
                        <hr>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Path</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agenda->images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>
                                        <td><img src="{{ asset('/images/agenda/' . $image->path) }}" alt="" height="150" width="250"></td>
                                        <td>{{ '/images/agenda/' . $image->path }}</td>
                                        <td>
                                            {!! Form::model($image, ['route' => ['admin.agenda.upload.destroy', $image->id], 'method' => 'delete']) !!}
                                                <button type="submit" class="btn waves-effect waves-light btn-outline-danger btn-sm js-submit-confirm">Delete</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
