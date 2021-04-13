
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
		<title>Location | {{$data['name']}}</title>
		<div style="margin: 5% 20% 3% 20%;">
                <div class="title">
                    <h1 style="text-align: center; padding-bottom: 15px; border-bottom: 2px solid rgb(235, 156, 9);">Welcome to {{$data['name']}}</h1>
                    <img style="height: auto; width: 100%;" src="{{$data['image']}}" alt="Angkorwat Temple">
                </div>


                <div class="description" style="padding-top: 20px">
				   {!!$data['description']!!}
				  	<a href="/location"> <button type="button" class="btn btn-primary btn-lg btn-block" style="margin: 0 0 40px 0" >Back</button></a>
                </div>
          
        </div>
	