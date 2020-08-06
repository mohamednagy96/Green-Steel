@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Create new service'])

{!! Form::open(['route' => 'admin.services.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.services.form')

{!! Form::close() !!}
@endcomponent

@endsection