@extends('admin.layouts.master',['breadcrumb'=>'create client'])


@section('content')

@component('admin.components.box', ['title'=>'Create new Client'])

{!! Form::open(['route' => 'admin.ourclients.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.ourclients.form')

{!! Form::close() !!}
@endcomponent

@endsection