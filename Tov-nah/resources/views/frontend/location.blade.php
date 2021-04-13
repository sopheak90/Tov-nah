@extends('frontend.master')
@section('title', 'Location')
@section('content')
@include ('frontend.banner');
<div id="fh5co-car" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Popular Location</h3>
				<p>The Kingdom of Cambodia, or simply known as Cambodia, is located in South East Asia</p>
			</div>
		</div>
		<div class="row row-bottom-padded-md">
			@foreach ($data as $i)
			<a href={{"detailLocation/" . $i['id']}}>
				<div class="col-md-6 animate-box">
					<div class="car">
						<div class="one-4">
							<h3>{{$i->name}}</h3>
							<span class="price"><small>Khmer: {{$i->khmerprice}}</small></span>
							<span class="price"> <small>Foreign: {{$i->foriegnprice}}</small></span>
							<span class="price"><small>Estimate: {{$i->estimate}}</small></span>
						</div>
						<div class="one-1" style="background-image: url({{$i->image}});">
						</div>
					</div>
				</div>
			</a>
			@endforeach
		</div>
	</div>
</div>
@endsection