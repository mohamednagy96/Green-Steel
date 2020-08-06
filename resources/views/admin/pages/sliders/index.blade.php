@extends('admin.layouts.master',['breadcrumb' => 'sliders'])
@section('content')

@component('admin.components.box', ['title'=>'Slider List', 'create' => route('admin.sliders.create'),'can'=>'sliders_create'])

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ 'Title' }}</th>
            <th>{{ 'Description' }}</th>
            <th>{{ 'Image' }}</th>
            <th>{{ 'Button' }}</th>
            <th>{{ 'Button Link' }}</th>
            <th>{{ 'Created At' }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($sliders as $slider)
            <tr>
                <td>{{ $slider->id }}</td>
                <td>{{ $slider->title }}</td>
                <td> {{ Illuminate\Support\Str::limit($slider->description, 30) }}  </td>
                <td> <img src="{{ $slider->image ? $slider->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px"></td>
                <td>{{ $slider->button }}</td>
                <td>{{ $slider->button_link }}</td>
                <td>{{ $slider->created_at ? $slider->created_at->diffForhumans() : null }}</td>
                <td>
         @can('sliders_edit') 
                <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-primary btn-xs">
                    <span class="fa fa-pencil"></span>
                </a>
         @endcan 

         @can('sliders_delete')
                <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn" data-url="{{ route('admin.sliders.destroy', $slider->id) }}" >
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
    {{ $sliders->links() }}
@endcomponent
@include('admin.partials.delete-modal')
@endsection