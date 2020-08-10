@extends('admin.layouts.master',['breadcrumb'=>'update product','breadcrumbModel' => $product])


@section('content')

@component('admin.components.box', ['title'=>'Edit '. __($product->name) ])


    {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

    @include('admin.pages.products.form')

    {!! Form::close() !!}
@endcomponent

@include('admin.components.images_box', ['model' => $product])

@endsection
