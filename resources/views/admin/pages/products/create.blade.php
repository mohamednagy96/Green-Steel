@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Create new product'])

{!! Form::open(['route' => 'admin.products.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.products.form')

{!! Form::close() !!}

@endcomponent

@endsection
