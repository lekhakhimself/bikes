
		<!DOCTYPE html>
<html>
	<head>
	<title>@yield('title')|4bikes</title>
		<link rel="stylesheet" type="text/css" href="{{asset('user/asset/CSS/style.css')}}">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
		<!-- ....links for owl carousel -->
		<link rel="stylesheet" type="text/css" href="{{asset('user/asset/JS/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('user/asset/JS/owl.theme.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('user/asset/JS/owl.theme.green.min.css')}}">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>

	<body>
<header class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: black !important;">
				<a href="index.php" class="navbar-brand"><img class="img-responive" src="{{asset('user/asset/Images/logo1.png')}}"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collMenu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="collMenu">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item {{Request::is('/userhome','userhome')?'active':''}} m-1">
							<a href="{{Route('userhome')}}" class="nav-link">HOME</a>
						</li>
						<li class="nav-item {{Request::is('/userniews','userniews')?'active':''}} m-1">
							<a href="{{Route('userniews')}}" class="nav-link">NIEUWS</a>
						</li>
						<li class="nav-item {{Request::is('/userfietsen','userfietsen')?'active':''}} m-1">
							<a href="{{Route('userfietsen')}}" class="nav-link">FIETSEN</a>
						</li>
						<li class="nav-item {{Request::is('/useroveran','useroveran')?'active':''}} m-1">
							<a href="{{Route('useroveran')}}" class="nav-link">OVER ONS</a>
						</li>
						<li class="nav-item m-1">
								<a href="{{Route('details')}}" class="nav-link {{Request::is('/details','details')?'active':''}}">DETAIL</a>
						</li>
					</ul>
					
					<form class="form-inline mr-2" method="post" enctype="multipart/formdata" action="{{Route('search')}}">
						{{csrf_field()}}
						<input class="form-control mr-sm-2" type="text" name="search" placeholder="search" >
						}
					<button class="icon bg-dark" type="submit"><img src="{{asset('user/asset/Images/logo3.png')}}"></button></form>
						
						<a href="" class="navbar-brand"><img src="{{asset('user/asset/Images/logo2.png')}}"></a>
					
				</div>

				
			</nav>
			  @if(Session::has('success-message'))
                                       <div class="alert alert-dark"><h4 class="text-center"> {{Session::get('success-message')}}</h4></div>
                                           

                                    
                                        @endif
		</header>
			
		@yield('content-section')
@include('auser.layouts.footer')
	</body>
	</html>

		
		
		
		
		
		
