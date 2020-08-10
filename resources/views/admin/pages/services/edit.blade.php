@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Edit '.$service->name])

{!! Form::model($service, ['route' => ['admin.services.update', $service->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

@include('admin.pages.services.form')

{!! Form::close() !!}
@endcomponent
@endsection