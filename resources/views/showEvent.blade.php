@extends('layouts.app')

@section('content')
<div>
    <img class="img-thumbnail" src="{{ $event->img }}" alt="">
    <div>
        <h2>{{ $event->name }} / {{ $event->spaces }} spaces</h2>
        <h2>{{ $event->description}}</h2>
    </div>    

    <div class="float-left">
        <a class="btn btn-primary" href="{{ route('home') }}">◀️</a>  
    </div>
</div>
@endsection