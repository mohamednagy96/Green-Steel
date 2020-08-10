@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Edit '. __($blog->title) ])
{{-- {{dd($blog)}} --}}
{!! Form::model($blog, ['route' => ['admin.blogs.update', $blog->id], 'method' => 'put','enctype'=>'multipart/form-data']) !!}

@include('admin.pages.blogs.form')

{!! Form::close() !!}
@endcomponent

@endsection
