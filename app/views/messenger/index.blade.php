@extends('layouts.master')

@section('content')
  <div class="column">
    @if($threads->count() > 0)
        @foreach($threads as $thread)
        <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
        <div class="{{$class}}">
            <h4>{{link_to('messages/' . $thread->id, $thread->subject)}}</h4>
            {{$thread->latestMessage()->body}}
        </div>
        @endforeach
    @else
        <p>Sorry, no threads.</p>
    @endif
  </div>
@stop
