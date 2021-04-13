@extends('frontend.master')
@section('title', 'Home')
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
        <div class="row">
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
            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-outline btn-lg" href="/hotel">See All <i class="icon-arrow-right22"></i></a></p>
            </div>
        </div>

    </div>
</div>

<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Restaurant</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($data1 as $i)
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
            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-outline btn-lg" href="/restaurant">See All <i class="icon-arrow-right22"></i></a></p>
            </div>
        </div>
    </div>
</div>


<div id="fh5co-car" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Popular Location</h3>
                <p>The Kingdom of Cambodia, or simply known as Cambodia, is located in South East Asia</p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            @foreach ($data2 as $i)
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="{{ route('BookingRestaurant')}}"><img src="{{ $i->image }}" class="img-responsive">
                    <div class="desc">
                        <span></span>
                        <h3>{{ $i->name }}</h3>
                        <span>Estimate {{ $i->estimate}}</span>
                        <span class="price">{{ $i->price }}</span>
                        <a class="btn btn-primary btn-outline" href="{{"detailLocation/" . $i['id']}}">View Detail <i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-outline btn-lg" href="/location">See All <i class="icon-arrow-right22"></i></a></p>
            </div>
        </div>
    </div>
</div>


<div id="fh5co-car" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Thing to do</h3>
                <p>The Kingdom of Cambodia, or simply known as Cambodia, is located in South East Asia</p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">

            @foreach ($data3 as $i)
            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="{{"detailThing/" . $i['id']}}"><img src="{{ $i->image }}" class="img-responsive">
                    <div class="desc">
                        <span></span>
                        <h3>{{ $i->name }}</h3>
                        <span class="price">{{ $i->price }}</span>
                        <a class="btn btn-primary btn-outline" href="{{"detailThing/" . $i['id']}}">View Detail <i class="icon-arrow-right22"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12 text-center animate-box">
                <p><a class="btn btn-primary btn-outline btn-lg" href="{{"/thing"}}">See All <i class="icon-arrow-right22"></i></a></p>
            </div>
        </div>
    </div>
</div>

@endsection