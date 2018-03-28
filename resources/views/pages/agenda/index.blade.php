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
                <a href="{{ route('admin.agenda.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Lorem ipsum sit dolor amet</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-eye"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                          Edit
                          <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                        </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" style="padding-bottom: 0px; padding-top: 0px;">
                          Show
                          <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
                        </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
@endsection