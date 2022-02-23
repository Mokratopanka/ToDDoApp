@extends('template')

@section ('content')

    
<div class="card card-body bg-primary p-3">
        <form action="{{route('tasks.update', $task->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$task->title}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5">{{$task->description}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-danger">Save</button>
        </form>
        </div> 

@endsection