@extends('layouts.app')

@section('content')
        @foreach ($events as $event)
        <div class="card" style="width: 18rem;">
        <img src= {{ $event->img }} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $event->name }} </h5>
                <p class="card-text">{{$event->description}}</p>
                <p class="card-text">{{$event->spaces}}</p>
            </div>
        </div>   
       
            <form action="{{ route('delete',['id' =>$event->id] )}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" onclick="return confirm('Are you sure you want to delete this event? {{$event->name}}')">
            🗑️ 
            </button>
            </form>
        
        @endforeach

@endsection
