@extends('layouts.app')


@section('content')
    <h1>{{$title}}</h1>
    <p>{{$service1}}</p>
    <p>{{$service2}}</p>
    <h2>SECONDARY</h2>
    @if ($secondary_services > 0)
        <ul class="list-group">
        @foreach ($secondary_services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
        </ul>
    @endif
@endsection
