@extends('admin.layouts.master',['breadcrumb'=>'companies'])
@section('content')

@component('admin.components.box', ['title'=>'Companies List', 'create' =>
route('admin.companies.create'),'can'=>'companies_create'])

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Categories</th>
            <th>Image</th>
            <th>{{ __('Created At') }}</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        @forelse($companies as $company)
        
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ Str::limit($company->description, 30)  }}</td>
            @if($company->categories->count() > 0)
                <td>
                    @foreach ($company->categories as $category)
                        <span class="label label-primary">{{$category->name}}</span> <br>
                    @endforeach
                </td>
            @else
                <td>
                    <span class="label label-warning">Empty</span>
                </td>
            @endif
            <td><img src="{{ $company->image ? $company->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px"></td>
            <td>{{ $company->created_at->diffForhumans() }}</td>
            <td>
                @can('companies_edit')
                <a href="{{ route('admin.companies.edit', $company->id) }}" class="btn btn-primary btn-xs">
                    <span class="fa fa-pencil"></span>
                </a>
                @endcan
                @can('companies_delete')
                <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn"
                    data-url="{{ route('admin.companies.destroy', $company->id) }}">
                    <span class="fa fa-trash"></span>
                </a>
                @endcan
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">
                <div class="alert alert-warning text-center" role="alert">
                    <strong>{{ __('No records found') }}</strong>
                </div>
            </td>
        </tr>
    @endforelse
    </tbody>
</table>

{{ $companies->links() }}

@endcomponent

@include('admin.partials.delete-modal')

@endsection
