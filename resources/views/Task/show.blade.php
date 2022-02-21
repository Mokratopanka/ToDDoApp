<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @extends('template')
                            @section('title', '- Current Task')

                            @section('content', )

                            <div class="container p-5">

                                    <h4 class="box-heading text-info p-4">
                                    {{$task->title}}
                                    <span class="badge bg-dark text-secondary">{{$task->created_at->diffForHumans()}}</span>   
                                    </h4>

                                    <div class="card bg-info">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <p class="text-dark">
                                                    {{$task->description}}
                                                </p>
                                            </div>
                                            <small>Last Updated - {{$task->updated_at->diffForHumans()}} </small>
                                            <br>
                                            <small>- written by <a href="#">{{$task->user->email}}</a></small>
                                        </div>
                                    </div>
                                    <a href="{{route('tasks.index')}}">Back</a>

                            </div>



                            @endsection
                </div>
            </div>
        </div>
    </div>
</x-app-layout>