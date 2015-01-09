@extends('layouts.master')

@section('content')
<div class="medium-6 column">
  <h1>Create a new message</h1>
  {{Form::open(['route' => 'messages.store'])}}
    <!-- Subject Form Input -->
    <div>
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', null) }}
    </div>

    <!-- Message Form Input -->
    <div>
        {{ Form::label('message', 'Message') }}
        {{ Form::textarea('message', null) }}
    </div>

    @if($users->count() > 0)
    <div>
      @foreach($users as $user)
        <label title="{{$user->first_name}} {{$user->last_name}}"><input type="checkbox" name="recipients[]" value="{{$user->id}}">{{$user->first_name}}</label>
      @endforeach
    </div>
    @endif

    <!-- Submit Form Input -->
    <div>
      {{ Form::submit('Submit', ['class' => 'button']) }}
    </div>
  {{Form::close()}}
</div>
@stop
