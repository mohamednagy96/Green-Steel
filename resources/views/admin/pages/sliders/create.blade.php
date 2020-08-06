@extends('admin.layouts.master',['breadcrumb'=>'create slider'])


@section('content')

@component('admin.components.box', ['title'=>'Create new Header Slider'])

{!! Form::open(['route' => 'admin.sliders.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

@include('admin.pages.sliders.form')

{!! Form::close() !!}
@endcomponent

@endsection