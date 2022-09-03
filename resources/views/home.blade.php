@extends('layouts.app')

@section('content')
        <div class="grid md:grid-cols-3 justify-items-center m-2">
            @if (Auth::check() && Auth::user()->isAdmin)
                    <a href="{{ route('createEvent') }}">
                    <button class="bg-blue-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded d-flex justify-content-center align-items-center">
                        CREATE EVENT
                    </button>
            </a>
            @endif
       
            <x-currentEvents :events="$events"></x-currentEvents>
        </div>
@endsection
