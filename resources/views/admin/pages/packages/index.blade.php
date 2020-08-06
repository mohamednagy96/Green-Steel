@extends('admin.layouts.master')
@section('content')

@component('admin.components.box', ['title'=>'Packages List', 'create' => route('admin.packages.create'),'can'=>'packages_create'])

        <!-- /.box-header -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Description') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th>{{ __('Created At') }}</th>
                        <th>{{ __('Updated At') }}</th>
                        <th>{{ __('Visable') }}</th>
                        <th>{{ __('option') }}</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->name }}</td>
                            <td> {{ Illuminate\Support\Str::limit($package->description, 30) }}  </td>
                            <td>{{ $package->price }}</td>
                            <td>{{ $package->created_at->diffForhumans() }}</td>
                            <td>{{ $package->updated_at->diffForhumans() }} </td>
                            @if( $package->invisible  == 0 )
                        <td> invisible </td>
                            @else
                           <td> visible </td>
                           @endif




                            <td>

                                 @can('packages_edit')

                                        <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-primary btn-xs">
                                            <span class="fa fa-pencil"></span>
                                        </a>

                                 @endcan


                                 @can('packages_delete')

                                        <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn" data-url="{{ route('admin.packages.destroy', $package->id) }}" >
                                            <span class="fa fa-trash"></span>
                                            
                                        </a>
                                        

                                 @endcan
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="5">
                                <div class="alert alert-warning text-center" role="alert">
                                    <strong>{{ __('No records found') }}</strong>
                                </div>
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table >

            {{ $packages->links() }}

    @endcomponent
    @include('admin.partials.delete-modal')

@endsection
