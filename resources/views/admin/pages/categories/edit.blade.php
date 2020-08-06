@extends('admin.layouts.master',['breadcrumb'=>'update category','breadcrumbModel' => $category])

@section('content')

@box( ['title'=>'Edit '. __($category->name) ])

    {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

    @include('admin.pages.categories.form')

    {!! Form::close() !!}
@endbox


@endsection