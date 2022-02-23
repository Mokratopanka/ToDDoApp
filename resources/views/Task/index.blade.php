                    @extends('template')
                        @section('title', '- My tasks')

                        @section('content')
                        @if(Auth::check() )
                        <div class="container p-5">
                                
                                </div>
                                <div class="clearfix"></div>
                                @foreach($task as $tasky)
                                <h4 class="box-heading text-info p-4">
                                    <a href="{{url('tasks', $tasky->id)}}">{{$tasky->title}}</a>
                                    <span class="badge bg-dark text-secondary">{{$tasky->created_at->diffForHumans()}}</span>
                                </h4>
                                     
                                                            
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p class="text-dark">
                                                {{$tasky->description}}
                                            </p>
                                        </div>
                                        <small>Last Updated - {{$tasky->updated_at->diffForHumans()}}</small>
                                        <small>- written by <a href="{{url('user', $tasky->user->id)}}">{{$tasky->user->email}}</a></small>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection