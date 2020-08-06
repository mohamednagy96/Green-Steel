@extends('admin.layouts.master')


@section('content')

@component('admin.components.box', ['title'=>'Create new package'])

{!! Form::open(['route' => 'admin.packages.store']) !!}

@include('admin.pages.packages.form')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('07ae158646bd85bde360', {
            cluster: 'eu',
            encrypted: true,
            forceTLS: true
        });
        var channel = pusher.subscribe('notification');

 
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
      channel.bind('App\\Events\\MyEvent', function(data) {
      alert(JSON.stringify(data));
             });
    
        channel.bind('pusher:notification', function(data) {
            alert(JSON.stringify(data));
        });
    channel.bind('pusher:subscription_succeeded', function() {  
    alert('successfully subscribed!');

});
    </script>


{!! Form::close() !!}
@endcomponent

@endsection