@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Edit '. $package->name])

{!! Form::model($package, ['route' => ['admin.packages.update', $package->id], 'method' => 'put']) !!}

@include('admin.pages.packages.form')

{!! Form::close() !!}
@endcomponent

@endsection
