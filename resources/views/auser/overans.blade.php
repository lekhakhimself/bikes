@extends('auser.layouts.header')
@section('title','OVER ONS')
@section('content-section')



<section class="container-fluid">
			<div class="overons_bgimg">
				<h4>OVER ONS</h4> 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br> sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim </p>
			</div>
</section>


<section class="container-fluid">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="row pt-3 pb-3">
					<div class="col-lg-8 col-md-8">
						<P class="text-dark"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident,  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</P>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4" >
						<img class="img-responsive" src="{{asset('user/asset/Images/overons2.jpg')}}" style="width: 100%; background-size: cover;">
					</div>
				</div>
			</div>

			<div class="col-lg-2"></div>
		</div>
	
		<div >
			<img class="img-responsive" style="background-size: cover; width: 100%; padding-top: 30px;" src="{{asset('user/asset/Images/overons3.jpg')}}">
		</div>
		<div class=" row" style="overflow: hidden;">
			<div class="col-lg-6 col-md-6"> 
				<div class="overons4 mb-4		">
				<h4 class="text-white">FIETSCLUB LOMEL</h4>
				<p class="text-white">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="overons5 mb-4">
				<h4 class="text-white">WIELERCLUB DE KOERSKES</h4>
				<p class="text-white">Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>
		</div>
	</section>


@endsection
