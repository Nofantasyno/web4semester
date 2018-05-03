@extends('eshop.layout')
@section('content')
    @foreach($notebooks as $notebook)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                @if(Auth::user())
                    @if(Auth::user()->role_id==1)
                        {!! Form::open(['method'=> 'DELETE', 'route'=>['notebook.destroy', $notebook->id]]) !!}
                        <button onclick="return confirm('Data will be removed forever, are you sure?')"><i class="glyphicon glyphicon-remove" style=""></i> </button>
                        {!! Form::close() !!}
                    @endif
                @endif
                <img class="group list-group-image" src="{{$notebook->img}}" style="width: 220px; height: 150px" alt="img" />
                <div class="caption">
                    <a href="{{action('Notebooks_controller@show', $notebook->id)}}"><h4 class="group inner list-group-item-heading">
                            {{$notebook->brand}} {{$notebook->model}}</h4></a>
                    <p class="group inner list-group-item-text">
                        Product description</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                {{$notebook->price}}$</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection