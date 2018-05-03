<div class="item  col-xs-4 col-lg-4" id="notebook-form">
    <div class="thumbnail">
        @if(Auth::user())
            @if(Auth::user()->role_id==1)
                {!! Form::open(['method'=> 'DELETE', 'route'=>['notebook.destroy', $notebook->id]]) !!}
                <button onclick="return confirm('Data will be removed forever, are you sure?')"><i class="glyphicon glyphicon-remove" style=""></i> </button>
                {!! Form::close() !!}
            @endif
        @endif
        <img id="noteboook-id" class="group list-group-image" src="{{$notebook->img}}" style="width: 220px; height: 150px" alt="img" />
        <div class="caption">
            <a href="{{action('Notebooks_controller@show', $notebook->id)}}" id="notebook-name"><h4 class="group inner list-group-item-heading">
                    {{$notebook->brand}} {{$notebook->model}}</h4></a>
            <p class="group inner list-group-item-text">
                Product description</p>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="lead" id="price">{{$notebook->price}}$</p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a class="btn btn-success" id="cart-button">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="/js/addToCart.js"></script> -->