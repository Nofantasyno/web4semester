@extends('eshop.layout')
@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" style="" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/img/34ef4b.jpg" style="margin:auto;max-width: 1000px; height:200px;" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="/img/banner1.png" style="margin:auto;max-width: 1000px; height:200px;" alt="Chicago">
                </div>

                <div class="item">
                    <img src="/img/Holiday-Sale-Banner-Background.png" style="margin:auto;max-width: 1000px; height:200px;" alt="New York">
                </div>

                <div class="item">
                    <img src="/img/banner2.png" style="margin:auto;max-width: 1000px; height:200px;" alt="New York">
                </div>

                <div class="item">
                    <img src="/img/banner3.jpeg" style="margin:auto;max-width: 1000px; height:200px;" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
	<div class="col-md-12">
			<div class="well well-sm">
				<strong>All</strong>
				<div class="btn-group">
					<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
							</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
								class="glyphicon glyphicon-th"></span>Grid</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					Sort:
					<a href="/eshop?sort=asc">Ascending</a>
					<a href="/eshop?sort=desc">Descending</a>
				</div>
			</div>
			<div id="products" class="row list-group">
                <div class="row">
				@foreach($notebooks as $notebook)
					@include('eshop.notebookForm')
			    @endforeach
                </div>
            </div>

			{{$notebooks->links()}}
		</div>
	</div>

@endsection