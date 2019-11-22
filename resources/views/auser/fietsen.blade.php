@extends('auser.layouts.header')
@section('title','FIETSEN')
@section('content-section')

<section class="container-fluid">
			<div class="fietsen_bgimg">
				<h4> ROAD</h4> 
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
</section>

<section class="container-fluid ml-15 mr-15">
		<div class="row ml-0 mr-0"  style="overflow: hidden;">
			<div class="col-x8-6 col-lg-8 col-md-8 pt-4 pb-4 ">
				<P class="text-dark"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident,  
				</P>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-4" >
				<img class="img-responsive fiet_image pt-4 pb-4" src="{{asset('user/asset/Images/fietsen1.jpg')}}" style="background-size:cover; width: 110%;">
			</div>
		</div>
	
		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 d-inline-block text-white text-center ab" style="background-color: black;">Alles</div>
			<div class="col-lg-2 col-md-2 col-sm-2 d-inline-block text-white bg-dark text-center ab">Performance</div>
			<div class="col-lg-2 col-md-2 col-sm-2 d-inline-block text-white bg-dark text-center ab">Adventure & Gravel</div>
			<div class="col-lg-2 col-md-2 col-sm-2 d-inline-block text-white bg-dark text-center ab">Cyclocross</div>
			<div class="col-lg-2 col-md-2 col-sm-2 d-inline-block text-white bg-dark text-center ab">Triathlon</div>
			<div class="col-lg-2 col-md-2 col-sm-2 d-inline-block text-white bg-dark text-center ab">Frames</div>
		</div>
	</div>
	<div class="container-fluid m-3">
		@foreach($showcate as $singlecate)
					@if($singlecate->id=='3')
			<div class="row">
				@foreach($singlecate->Rbikes()->orderBy('Name','asc')->get() as $newbike)

				@foreach($newbike->Rimages()->get() as $newimage)
				@if(($newbike->id)==($newimage->bike_id))
				<div class="col-md-3">
					
					<a href="{{Route('sbikedetails',[$newbike->slug])}}"><img class="img-responsive bike_img" src="{{asset('admin/bikes/'.$newimage->images)}}"></a>

				
					<p class="text-center font-weight-bold mt-3">{{$newbike->Name}}</p>
					<p class="text-center">{{$newbike->price}} <span>&#8364;</span></p>


				</div>
				@endif
				@endforeach
				@endforeach
				@endif
				@endforeach

			</div>
		</div>
	</section>



@endsection
