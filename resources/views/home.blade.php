@extends('layouts.app')

@section('content')
        <div>
        <a href="{{ route('createEvent') }}">
            <button class="bg-blue-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                CREATE EVENT
            </button>
        </a>
        </div>
        @foreach ($events as $event)
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src= {{ $event->img }} alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->name }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->description}}</p>
                <p class="dark:text-gray-400">Spaces {{$event->spaces}}</p>
                <form action="{{ route('delete',['id' =>$event->id] )}}" method="post">
                @method('delete')
                @csrf
                <button class="bg-blue-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded float-right" type="submit" onclick="return confirm('Are you sure you want to delete this event? {{$event->name}}')">
                Delete
                </button>
                </form>
            </div>
        @endforeach
@endsection
