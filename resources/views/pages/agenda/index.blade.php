@extends('layouts.backend.app')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Agenda</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-list"></i> Agenda
                <a href="{{ route('admin.agenda.create') }}" class="btn btn-sm btn-outline-primary">Add New</a>
            </div>
            <div class="card-body table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tentang</th>
                                <th>Lokasi</th>
                                <th>Dari</th>
                                <th>Sampai</th>
                                <th>Upload</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tentang</th>
                                <th>Lokasi</th>
                                <th>Dari</th>
                                <th>Sampai</th>
                                <th>Upload</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
  <script type="text/javascript">
    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('table.agenda') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'location', name: 'location'},
            {data: 'date_start', name: 'date_start'},
            {data: 'date_end', name: 'date_end'},
            {data: 'images', name: 'images'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  </script>
@endsection
