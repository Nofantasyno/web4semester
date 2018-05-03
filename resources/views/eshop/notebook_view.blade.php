@extends('eshop.layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">Notebooks & Laptops</a>
                <a href="#" class="list-group-item">Computers</a>
                <a href="#" class="list-group-item">Peripheral devices & Accesories</a>
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div class="card mt-4">
                <img class="card-img-top img-fluid" src="{{$notebook->img}}" alt="">
                <div class="card-body">
                    <h3 class="card-title">{{$notebook->brand}} {{$notebook->model}}</h3>
                    <h4>${{$notebook->price}}</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                    <p class="card-text"><b>CPU: </b>{{$notebook->cpu}}</p>
                    <p class="card-text"><b>Graphics: </b>{{$notebook->graphics}}</p>
                    <p class="card-text"><b>RAM: </b>{{$notebook->ram}}</p>
                    <p class="card-text"><b>HDD: </b>{{$notebook->hdd}}</p>
                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    4.0 stars
                </div>
            </div>
            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Product Reviews
                </div>
                <div class="card-body" id="comments-block">
                    @foreach($feedbacks as $feedback)
                        @include('comments.commentForm')
                    @endforeach
                </div>
                <hr>
                <div class="card-body">
                    @if($user=Auth::user())
                        <div class="form-group">
                            @include('comments.createCommentForm')
                        </div>
                    @else
                        <p>To leave a comment, please <a href="/login">sign in</a> or <a href="/register">register</a></p>
                    @endif
                </div>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
</div>

<script src="/js/jq.js"></script>
@endsection