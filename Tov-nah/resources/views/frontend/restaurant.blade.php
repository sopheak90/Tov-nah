@extends('frontend.master')
@section('title', 'restaurant')
@section('content')
@include ('frontend.banner');
<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Book A Restaurant</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row row-bottom-padded-md">
			<div class="row row-bottom-padded-md">

				@foreach ($data as $i)
				<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
					<div href="{{ route('BookingRestaurant')}}"><img src="{{ $i->image }}" class="img-responsive">
						<div class="desc">
							<span></span>
							<h3>{{ $i->name }}</h3>
							<span>People: {{ $i->amount_of_people }}</span>
							<span class="price">{{ $i->price }}</span>
							<a class="btn btn-primary btn-outline" href="{{"detailRestaurant/" . $i->id}}">Book Now <i class="icon-arrow-right22"></i></a>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</div>
@endsection