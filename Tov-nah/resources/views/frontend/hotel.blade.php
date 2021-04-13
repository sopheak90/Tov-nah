@extends('frontend.master')
@section('title','Hotel')
@section('content')
@include ('frontend.banner');
<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Popular hotel &amp; hostel destinations</h3>
				<p>Far far away, behind the word mountains, far from the countries there live the blind texts.</p>
			</div>
		</div>
		<div class="row row-bottom-padded-md">
			@foreach ($data as $i)

			<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
				<div href="#"><img src="{{$i['image']}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<div class="desc">
						<span></span>
						<h3>{{$i['name']}}</h3>
						<span>{{$i['night']}} night</span>
						<span class="price">{{ $i['price']}}</span>
						<a class="btn btn-primary btn-outline" href="{{"detailHotel/" . $i['id']}}">Book Now <i class="icon-arrow-right22"></i></a>
					</div>
				</div>
			</div>


			@endforeach

		</div>
		<div class="row">
			<div class="col-md-12 animate-box">
				<h2 class="heading-title">Travel Booking guide to book a perfect hotel</h2>
			</div>
			<div class="col-md-6 animate-box">
				<p>Far far away, behind the word mountains, far from the countries there live the blind texts. Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue </p>
				<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue </p>
				<a href="#">Read More <i class="icon-arrow-right22"></i></a>
			</div>
			<div class="col-md-6 animate-box">
				<img class="img-responsive" src="images/cover_bg_2.jpg" alt="travel">
			</div>
		</div>


	</div>
</div>
@endsection