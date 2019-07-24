@extends('layout.app')

@section('content')
<h1>Messages</h1>
<p>Listing the messages from database Blog.</p>
@if (count($messages) > 0)
@foreach ($messages as $message)
<ul class="list-group">
    <li class="list-group-item">Name : {{$message->name}}</li>
    <li class="list-group-item">Email : {{$message->email}}</li>
    <li class="list-group-item">Message : {{$message->message}}</li>
</ul>
@endforeach
@endif

@endsection

@section('sidebar')
<p>Home content</p>
@parent
@endsection
