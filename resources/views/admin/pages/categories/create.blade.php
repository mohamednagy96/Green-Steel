@extends('admin.layouts.master',['breadcrumb'=>'create category'])


@section('content')

@component('admin.components.box', ['title'=>'Create new Category'])

{!! Form::open(['route' => 'admin.categories.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.categories.form')

{!! Form::close() !!}

@endcomponent

@endsection
