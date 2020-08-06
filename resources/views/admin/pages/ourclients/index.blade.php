@extends('admin.layouts.master',['breadcrumb'=>'clients'])


@section('content')

@component('admin.components.box', ['title'=>'Client List', 'create' => route('admin.ourclients.create'),'can'=>'clients_create'])

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Description') }}</th>
            <th>{{ __('Images') }}</th>
            <th>{{ __('Created At') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($ourClients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td> {{ Illuminate\Support\Str::limit($client->description, 30) }}  </td>
                <td> <img src="{{ $client->image ? $client->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px"></td>
                <td>{{ $client->created_at ? $client->created_at->diffForhumans() : null }}</td>
                <td>
         @can('clients_edit') 
                <a href="{{ route('admin.ourclients.edit', $client->id) }}" class="btn btn-primary btn-xs">
                    <span class="fa fa-pencil"></span>
                </a>
         @endcan 

         @can('clients_delete')
                <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn" data-url="{{ route('admin.ourclients.destroy', $client->id) }}" >
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
    {{ $ourClients->links() }}
@endcomponent
@include('admin.partials.delete-modal')
@endsection