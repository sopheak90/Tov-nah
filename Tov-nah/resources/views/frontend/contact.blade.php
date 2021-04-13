@extends('frontend.master')
@section('title', 'Contact')
@section('content')
@include ('frontend.banner');
<div id="fh5co-contact" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>Contact Information</h3>
				<p>Far far away, behind the word mountains, far from the countries, there live the blind texts.</p>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-6">
				<h3 class="section-title">Our Address</h3>
				<p>Far far away, behind the word mountains, far from the countries, there live the blind texts.</p>
				<ul class="contact-info">
					<li><i class="icon-location-pin"></i>198 West 21th Street, Suite 721 PhnomPenh</li>
					<li><i class="icon-phone2"></i>+855 23 880 880</li>
					<li><i class="icon-mail"></i><a href="#">info@tov-nah.com</a></li>
					<li><i class="icon-globe2"></i><a href="#">www.tov-nah.com</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<div class="row">
					<form action="/email" method="post">
						{{ csrf_field() }}
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Name" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Your Email" name="email" require>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" style="padding-left:5px;">
								<input type="reset" value="Reset" class="btn btn-danger">
								<input type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						@if (session('success'))
						<div class="col-md-6" style='color:#42f581;'>
							<i class="fas fa-check-circle"></i>
							{{ session('success') }}
						</div>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection