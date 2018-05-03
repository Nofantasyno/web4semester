{!! Form::open(array('route'=>'feedback.store', 'id'=>'comment-create')) !!}
<input type="text" id="message" name="message" class="form-control" placeholder="Comment">
<input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
<input type="hidden" id="item_id" name="item_id" value="{{$notebook->id}}">
<div class="modal-footer">
    {{ csrf_field() }}
    <button class="btn btn-dark" id="comment-button">Add comment</button>
    {{Form::close()}}
</div>