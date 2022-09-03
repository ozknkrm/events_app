<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            @foreach ($events as $event)
            <img class="object-cover w-full h-96  md:h-auto md:w-48 md:rounded-none " src= {{ $event->img }} alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold  text-gray-900 dark:text-white">{{ $event->name }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$event->description}}</p>
                <p class="dark:text-gray-400">Spaces {{$event->spaces}}</p>

                @if (Auth::check() && Auth::user()->isAdmin)
                <form action="{{ route('delete',['id' =>$event->id] )}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="bg-blue-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded float-right" type="submit" onclick="return confirm('Are you sure you want to delete this event? {{$event->name}}')">
                    Delete
                    </button>
                    <a href="{{ route('editEvent', ['id' => $event->id])}}">
                        <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2 mr-1 dark:bg-green-800 dark:hover:bg-blue-700 dark:focus:ring-green-800">✏️
                        </button>
                    </a>

                @endif
                    <a href="{{ route('showEvent', $event->id) }}">
                    👀
                    </a>
                    
                </form>

                <button><a class="text-warning" href="{{ route('inscribe', $event->id) }}">Inscribe</a></button>
                <button><a class="text-warning" href="{{ route('cancelInscribe', $event->id) }}">cancelInscribe</a></button>
            </div>
            @endforeach
        </div>