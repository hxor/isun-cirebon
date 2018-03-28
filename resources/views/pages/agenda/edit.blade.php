@extends('layouts.backend.app') 
@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Agenda</a>
        </li>
        <li class="breadcrumb-item active">Add New</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Add New Agenda
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" id="content"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Publish
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" class="form-control" id="date">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" class="form-control" id="date">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                    <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                </select>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-transparent">
                    <button class="btn btn-primary pull-right">
                    Publish
                  </button>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Category
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="status" class="form-control">
                        <option value="0">Draft</option>
                        <option value="1">Publish</option>
                      </select>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Featured Image
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="file" name="image">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection