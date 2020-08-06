@extends('admin.layouts.master')
@section('content')

@component('admin.components.box', ['title'=>'Procuts List', 'create' =>
route('admin.products.create'),'can'=>'products_create'])

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Invisible</th>
            <th>{{ __('Created At') }}</th>
            <th>
                Image
            </th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ Str::limit($product->description, 30)  }}</td>
            <td> {{ $product->invisible ? 'invisible' : 'visible'  }} </td>
            <td>{{ $product->created_at->diffForhumans() }}</td>
            <td>
                <img src="{{ $product->image ? $product->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px">
            </td>
            <td>
                @can('products_edit')
                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-xs">
                    <span class="fa fa-pencil"></span>
                </a>
                @endcan
                @can('products_delete')
                <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn"
                    data-url="{{ route('admin.products.destroy', $product->id) }}">
                    <span class="fa fa-trash"></span>
                </a>
                @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}

@endcomponent

@include('admin.partials.delete-modal')

@endsection
