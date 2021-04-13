
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!-- CSS Files -->
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
<div class="content" style="padding-top: 20px;">
	<div class="row">
		<div class="col-md-4" style="margin:auto;">
			<div class="card card-user">
				<div class="image">
					<button type="button" class="btn btn-light" style="position: absolute;margin-top:0;"  onclick="history.go(-1)">Back</button>
					<img src="../assets/img/bg5.jpg" alt="...">
				</div>
				<div class="card-body">
					<div class="author">
						<a href="#">
							<img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
							<h5 class="title">{{$users->name}}</h5>
						</a>
					</div>
					<p class="description text-center">
						ID : {{$users->id}}<br>
						Phone Number : {{$users->phone}} <br>
						Email : {{$users->email}}<br>
					</p>
				</div>
				<hr>
				<div class="button-container">
					<a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="fas fa-sign-out-alt"></i>
						{{ __('Logout') }}
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
