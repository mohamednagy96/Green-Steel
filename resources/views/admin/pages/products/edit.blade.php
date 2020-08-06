@extends('admin.layouts.master')


@section('content')

@box( ['title'=>'Edit '. __($product->name) ])

    {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

    @include('admin.pages.products.form')

    {!! Form::close() !!}
@endbox

@include('admin.components.images_box', ['model' => $product])

@endsection
