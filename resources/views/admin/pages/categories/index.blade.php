@extends('admin.layouts.master',['breadcrumb'=>'categories'])
@section('content')

@component('admin.components.box', ['title'=>'Categories List', 'create' =>
route('admin.categories.create'),'can'=>'categories_create'])

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th>Image</th>
            <th>{{ __('Created At') }}</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
        {{-- {{dd($category->image->getUrl())}} --}}
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ Str::limit($category->description, 30)  }}</td>
            <td><img src="{{ $category->image ? $category->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px"></td>
            <td>{{ $category->created_at->diffForhumans() }}</td>
            <td>
                @can('categories_edit')
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary btn-xs">
                    <span class="fa fa-pencil"></span>
                </a>
                @endcan
                @can('categories_delete')
                <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn"
                    data-url="{{ route('admin.categories.destroy', $category->id) }}">
                    <span class="fa fa-trash"></span>
                </a>
                @endcan
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                <div class="alert alert-warning text-center" role="alert">
                    <strong>{{ __('No records found') }}</strong>
                </div>
            </td>
        </tr>
    @endforelse
    </tbody>
</table>

{{ $categories->links() }}

@endcomponent

@include('admin.partials.delete-modal')

@endsection
