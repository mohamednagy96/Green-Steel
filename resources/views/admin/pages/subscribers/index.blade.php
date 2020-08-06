@extends('admin.layouts.master')

@section('content')

@component('admin.components.box', ['title'=>'Client List', 'create' => route('admin.subscribers.create')])

<div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">

            </h3>
            <div class="box-tools">
                {{-- @can('aboutus_create') --}}
                    <a href="{{ route('admin.subscribers.create') }}" class="btn btn-primary btn-sm">
                        {{ __('Create new') }}
                        <span class="fa fa-plus"></span>
                    </a>
                {{-- @endcan --}}
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Emails') }}</th>
             
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subscribers as $subscriber)
                        <tr>
                            <td>{{ $subscriber->id }}</td>
                            <td>{{ $subscriber->email }}</td>
               
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
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    {{ $subscribers->links() }}


@endsection