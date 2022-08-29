@extends('layouts.app' )

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT EVENT</div>

                <div class="card-body">
                    <form class="justify-content-center" action="{{route('updateEvent', $event->id)}}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end" >NAME</label>
                            <input type="text" name="name" class="col-md-4 col-form-label text-md-start" placeholder="Write name event" value="{{$event->name}}">
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end" >DESCRIPTION</label>
                            <input type="text" name="description" class="col-md-4 col-form-label text-md-start" placeholder="Write a description" value="{{$event->description}}">
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">IMAGE</label>
                            <input type="text" name="img" class="col-md-4 col-form-label text-md-start" placeholder="insert an image" value="{{$event->img}}">
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end" >SPACES</label>
                            <input type="text" name="spaces" class="col-md-4 col-form-label text-md-start" placeholder="Max spaces" value="{{$event->spaces}}">
                        </div>

                       

                        <div class="float-right col-md-offset-md-4">
                            <a href="{{ route('home') }}">◀️</a>
                        </div>

                        <div class="btnCreate ">
                            <button type="submit" class="btn btn-outline-success" value="Create">Edit</button>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection