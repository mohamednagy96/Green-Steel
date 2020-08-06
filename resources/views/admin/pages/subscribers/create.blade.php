@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Subscribers Contacts'])

{!! Form::open(['route' => 'admin.subscribers.store']) !!}

@include('admin.pages.subscribers.form')

{!! Form::close() !!}
@endcomponent

@endsection