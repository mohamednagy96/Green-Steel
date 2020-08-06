@extends('admin.layouts.master',['breadcrumb'=>'update slider','breadcrumbModel' => $slider])


@section('content')

@component('admin.components.box', ['title'=>'Edit '. __($slider->name) ])

{!! Form::model($slider, ['route' => ['admin.sliders.update', $slider->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

@include('admin.pages.sliders.form')

{!! Form::close() !!}
@endcomponent

@endsection
