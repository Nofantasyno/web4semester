<div class="thumbnail" id="{{$feedback->id}}">
    @if(Auth::user())
        @if(Auth::user()->id==$feedback->user_id)
            {!! Form::open(['method'=> 'DELETE', 'route'=>['feedback.destroy', $feedback->id]]) !!}
            <button class="comment-remove" data-id="{{ $feedback->id }}"><i class="glyphicon glyphicon-remove" style=""></i></button>
            {!! Form::close() !!}
        @endif
    @endif
    <p class="text-muted">Posted by {{$feedback->author->name}} on {{$feedback->created_at}}</p>
    <p>{{$feedback->message}}</p>
</div>