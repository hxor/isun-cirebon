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
                            <label for="title">Tentang</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="disposition">Disposisi</label>
                            <input type="text" name="disposition" class="form-control" id="disposition">
                        </div>
                        <div class="form-group">
                            <label for="reference">Referensi</label>
                            <input type="text" name="reference" class="form-control" id="reference">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="location">Lokasi</label>
                            <input type="text" name="location" class="form-control" id="location">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" id="address"></textarea>
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
                            <label for="date">Dari</label>
                            <input type="date" name="date_start" class="form-control" id="date_start">
                        </div>
                        <div class="form-group">
                            <label for="date">Sampai</label>
                            <input type="date" name="date_end" class="form-control" id="date_end">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="0">Jadwal</option>
                                <option value="1">Selesai</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-transparent">
                    <button class="btn btn-primary pull-right">
                        Simpan
                    </button>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection