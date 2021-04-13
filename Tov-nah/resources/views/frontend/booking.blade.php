@extends('frontend.master')
@section('title', 'Booking Now')
@section('content')
@include ('frontend.banner');
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Booking now</h3>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <div class="desc">
                        <span></span>
                        <h3>New York</h3>
                        <span>3 nights</span>
                        <span class="price">$1,000</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="col-12 pt-1">
                    <p class="mb-4 pb-2">Booking Options</p>
                </div>
                <div class="col-12 pb-5">
                    <input class="checkbox-booking" type="checkbox" name="booking" id="booking-1">
                    <label class="for-checkbox-booking" for="booking-1">
                        <span class="text">breakfast</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-2">
                    <label class="for-checkbox-booking" for="booking-2">
                        </i><span class="text">dinner</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-3">
                    <label class="for-checkbox-booking" for="booking-3">
                        </i><span class="text">pick up</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-4">
                    <label class="for-checkbox-booking" for="booking-4">
                        </i><span class="text">garden</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-5">
                    <label class="for-checkbox-booking" for="booking-5">
                        </i><span class="text">internet</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-6">
                    <label class="for-checkbox-booking" for="booking-6">
                        <span class="text">parking</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-7">
                    <label class="for-checkbox-booking" for="booking-7">
                        <span class="text">television</span>
                    </label>
                    <!--
						--><input class="checkbox-booking" type="checkbox" name="booking" id="booking-10">
                    <label class="for-checkbox-booking" for="booking-10">
                        <span class="text">drink</span>
                    </label>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="col-12 pt-5">
                    <p class="mb-4 pb-2">Number of member</p>
                </div>
                <div class="col-12 pb-5">
                    <input class="checkbox-tools" type="radio" name="tools" id="tool-1" checked>
                    <label class="for-checkbox-tools" for="tool-1">
                        1 member
                    </label>
                    <!--
						--><input class="checkbox-tools" type="radio" name="tools" id="tool-2">
                    <label class="for-checkbox-tools" for="tool-2">
                        2 members
                    </label>
                    <!--
						--><input class="checkbox-tools" type="radio" name="tools" id="tool-3">
                    <label class="for-checkbox-tools" for="tool-3">
                        Team
                    </label>
                    <!--
						--><input class="checkbox-tools" type="radio" name="tools" id="tool-4">
                    <label class="for-checkbox-tools" for="tool-4">
                        Family
                    </label>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <label for="start">Date Join</label>
                            <input type="date" id="start" class="form-control" name="date" value="datepicker" style="width: 100%;" required>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <label for="start">Date Leave</label>
                            <input type="date" id="start" class="form-control" name="date" value="datepicker" style="width: 100%;" required>
                        </div>
                    </div>
                    <p></p>
                    <p>Let Finish</p>
                    <a class="btn btn-primary btn-outline" href="#">Book Now <i class="icon-arrow-right22"></i></a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection