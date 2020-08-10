@extends('admin.layouts.master')
@section('content')

@component('admin.components.box', ['title'=>'service List', 'create' => route('admin.services.create'),'can' => 'services_create' ])

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th>{{ __('images') }}</th>
      <th>{{ __('Created At') }}</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
      @foreach($services as $service)
      <tr>
        <td>{{ $service->id }}</td>
      <td>{{ __($service->name) }}</td>
      <td>{{ __($service->description) }}</td>
      <td>
        <img src="{{ $service->image ? $service->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px">
      </td>
      <td>{{ $service->created_at->diffForhumans() }}</td>
      <td>
       @can('services_edit')

                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary btn-xs">
                    <span class="fa fa-pencil"></span>
                </a>
        @endcan
        @can('services_delete')
                <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn" data-url="{{ route('admin.services.destroy', $service->id) }}" >
                    <span class="fa fa-trash"></span>
                </a>
        @endcan
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $services->links() }}


@endcomponent
@include('admin.partials.delete-modal')
@endsection
