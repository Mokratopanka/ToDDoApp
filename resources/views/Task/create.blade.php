@extends('template')
@section('title', $title)

@section('content')

<h4 class="box-heading text-info p-4">
    Add New Task
</h4>

<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <div class="form-group p-2">
        <label for="title">Title</label>
        <input class="form-control" id="title" name='title' type="text"></input>
    </div>

    <div class="form-group p-2">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name='description' ></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-md m-3 p-2">Add New Task</button>
</form> 

<a href="{{route('tasks.create')}}">click</a>

@endsection