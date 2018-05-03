@extends('layouts.app')
@section('content')
    <div class="col-md-4">
        <p><a href="{{route('index')}}">Home Page</a></p>
        <p><a href="#">Settings</a></p>
    </div>
    <div class="col-md-4">
        <p>{{Auth::user()->name}}</p>
        <p>Account created: {{Auth::user()->created_at}}</p>
    </div>
@endsection