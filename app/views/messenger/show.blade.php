@extends('layouts.master')

@section('content')
    <div class="column">
        <h1>{{$thread->subject}}</h1>

        @foreach($thread->messages as $message)
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="//www.gravatar.com/avatar/{{$message->user->email}}?s=64" alt="{{$message->user->first_name}}" class="img-circle">
                </a>
                <div class="media-body">
                    <h5 class="media-heading">{{$message->user->first_name}} {{$message->user->last_name}}</h5>
                    <p>{{$message->body}}</p>
                    <div class="text-muted"><small>Posted {{$message->created_at->diffForHumans()}}</small></div>
                </div>
            </div>
        @endforeach

        <br />
        <div class="row">
          <div class="medium-6 column">
            <h3>Add a new message</h3>
            {{Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT'])}}
            <!-- Message Form Input -->
            <div class="form-group">
                {{ Form::textarea('message', null, ['class' => 'form-control']) }}
            </div>

            @if($users->count() > 0)
            <div class="checkbox">
                @foreach($users as $user)
                    <label title="{{$user->first_name}} {{$user->last_name}}"><input type="checkbox" name="recipients[]" value="{{$user->id}}">{{$user->first_name}}</label>
                @endforeach
            </div>
            @endif

            <!-- Submit Form Input -->
            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'button']) }}
            </div>
            {{Form::close()}}
          </div>
        </div>

    </div>
@stop
