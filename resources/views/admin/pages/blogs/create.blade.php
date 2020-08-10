@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Create new Blog'])

{!! Form::open(['route' => 'admin.blogs.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.blogs.form')

{!! Form::close() !!}
@endcomponent

@endsection