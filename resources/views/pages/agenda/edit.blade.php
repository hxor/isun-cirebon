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
    {!! Form::model($agenda, ['route' => ['admin.agenda.update', $agenda->id], 'method' => 'PUT']) !!}
        @include('pages.agenda._form')
    {!! Form::close() !!}
</div>
@endsection
