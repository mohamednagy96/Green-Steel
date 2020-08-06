@extends('admin.layouts.master',['breadcrumb'=>'update client','breadcrumbModel' => $ourclient])


@section('content')

@component('admin.components.box', ['title'=>'Edit '. __($ourclient->name) ])

{!! Form::model($ourclient, ['route' => ['admin.ourclients.update', $ourclient->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

@include('admin.pages.ourclients.form')

{!! Form::close() !!}
@endcomponent

@endsection
