@extends('admin.layouts.master')
@section('content')
@component('admin.components.box', ['title'=>'Blogs', 'create' => route('admin.blogs.create'),'can'=>'blogs_create'])

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('Title') }}</th>
            <th>{{ __('Content') }}</th>
            <th>{{ __('Images') }}</th>
            <th>{{ __('Created At') }}</th>
        </tr>
    </thead>
    <tbody>
         @forelse ($blogs as $blog)
             <tr>
                 <td>{{ $blog->id }}</td>
                 <td>{{ $blog->title }}</td>
                 <td> {{ Str::limit($blog->content, 30) }}  </td>
                 <td> <img src="{{ $blog->image ? $blog->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px"></td>
              <td>{{ $blog->created_at->diffForhumans() }}</td>
                 <td>
                    @can('blogs_edit')
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-xs">
                            <span class="fa fa-pencil"></span>
                        </a>
                    @endcan
                    @can('blogs_delete')
                        <a href="javascript:;" class="btn btn-danger btn-xs delete-modal-btn" data-url="{{ route('admin.blogs.destroy', $blog->id) }}" >
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
            </table>
    @endcomponent
    @include('admin.partials.delete-modal')
@endsection
