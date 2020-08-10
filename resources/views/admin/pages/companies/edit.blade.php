@extends('admin.layouts.master',['breadcrumb'=>'update company','breadcrumbModel' => $company])

@section('content')

@component('admin.components.box', ['title'=>'Edit '. __($company->name) ])


    {!! Form::model($company, ['route' => ['admin.companies.update', $company->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

    @include('admin.pages.companies.form')

    {!! Form::close() !!}
@endcomponent


@endsection
