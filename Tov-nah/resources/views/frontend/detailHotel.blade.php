<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
		<title>Booking | {{ $data['name']}} </title>
		<div style="margin: 5% 20% 3% 20%;">
            <div class="title">
                <h1 style="text-align: center; padding-bottom: 15px; border-bottom: 2px solid rgb(235, 156, 9);">Book {{ $data['name']}} Now</h1>
                <img style="height: auto; width: 100%;" src="{{ $data['image']}}" alt="Angkorwat Temple">
            </div>


            <div class="description" style="padding-top: 20px">
                <form action="{{ route('BookingHotel')}}" method="POST" class="x1" id="nameform">
                    @csrf

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="hotelId" value="{{$data['id']}}">
                        <input type="hidden" class="form-control" name="hotelName" value="{{$data['name']}}">
                        <input type="text" class="form-control" name="name" required placeholder="Your Name">
                    </div>

                    <div class="form-group">
                        <input type="phonenumber" class="form-control"  name="phonenumber" required placeholder="Your Phone Number">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control"  name="email" required placeholder="Your Email">
                    </div>
 
                    <div class="form-group">                     
                        <input type="date" class="form-control" id="estimate" name="checkin" required placeholder="Check in date">
                    </div>          
                    
                    <div class="form-group">
                        <input type="date" class="form-control" id="estimate" name="checkout" required placeholder="Check out date">
                    </div>   
            
                    <div class="form-group">
                        <input type="number" class="form-control" id="estimate" name="amount" required placeholder="Number of People">
                    </div>  

                    <div class="form-group">
                        <input type="text" class="form-control" id="estimate" name="more" required placeholder="More information">
                    </div>  


                    <br>
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin: 0 0 40px 0" >Booking Now</button>
                </form>

                   
                    <a href="/hotel"> <button type="button" class="btn btn-danger btn-lg btn-block" style="margin: 0 0 40px 0" >Cancel</button></a>
            </div>
          
        </div>
	