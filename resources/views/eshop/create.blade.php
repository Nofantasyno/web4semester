@extends('eshop.layout')
@section('content')
    <div class="container">
        <h3>Add new Item</h3>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['method'=> 'POST', 'route'=>['notebook.store']]) !!}
                <div class="form-group">
                    <h4>Brand</h4>
                    <input type="text" class="form-control" name="brand" value="{{old('brand')}}">
                    <br>
                    <h4>Model</h4>
                    <input type="text" class="form-control" name="model" value="{{old('model')}}">
                    <br>
                    <h4>Mass</h4>
                    <input type="text" class="form-control" name="mass" value="{{old('mass')}}">
                    <br>
                    <h4>Resolution</h4>
                    <input type="text" class="form-control" name="resolution" value="{{old('resolution')}}">
                    <br>
                    <h4>RAM</h4>
                    <input type="text" class="form-control" name="ram" value="{{old('ram')}}">
                    <br>
                    <h4>CPU</h4>
                    <input type="text" class="form-control" name="cpu" value="{{old('cpu')}}">
                    <br>
                    <h4>Graphics</h4>
                    <input type="text" class="form-control" name="graphics" value="{{old('graphics')}}">
                    <br>
                    <h4>HDD</h4>
                    <input type="text" class="form-control" name="hdd" value="{{old('hdd')}}">
                    <br>
                    <h4>Price</h4>
                    <input type="text" class="form-control" name="price" value="{{old('price')}}">
                    <br>
                    <h4>Image</h4>
                    <input type="text" class="form-control" name="img" value="{{old('img')}}">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection