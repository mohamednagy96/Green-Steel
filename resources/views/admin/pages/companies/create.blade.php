@extends('admin.layouts.master',['breadcrumb'=>'create company'])


@section('content')

@component('admin.components.box', ['title'=>'Create new Comapny'])

{!! Form::open(['route' => 'admin.companies.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.companies.form')

{!! Form::close() !!}

@endcomponent

@endsection
