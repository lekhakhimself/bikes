	@extends('auser.layouts.header')
	@section('title','Home')
	@section('content-section')




	<section class="container-fluid">


		<div class="bgimg">
			@foreach($showcate as $singlecate)
			@if($singlecate->name=='ROAD')
			@foreach($singlecate->Rbikes()->get() as $newbike)
			@if($singlecate->id==$newbike->category_id)
			<a href="{{Route('scategorydetails',[$singlecate->id])}}"><h4 class="text-white">{{$singlecate->name}}</h4></a>
			<p style="width:50%;">{{$singlecate->description}}</p>
			@endif
			@endforeach
			@endif
			@endforeach

		</div>

	</section>

	<section>
		<div class="row mr-0 ml-0" style="margin-right: 0px !important;">
			<div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 " >
				<div class="mount">
					@foreach($showcate as $singlecate)
					@if($singlecate->name=='MOUNTAIN')
					@foreach($singlecate->Rbikes()->get() as $newbike)
					@if($singlecate->id==$newbike->category_id)

					<a href="{{Route('scategorydetails',[$singlecate->id])}}"><h4 class="text-white">{{$singlecate->name}}</h4></a>
					
					<P class="text-white" style="width: 55%;">
						{{$singlecate->description}}
					</P>
					@endif
					@endforeach
					@endif
					@endforeach
				</div>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
				<div class="mt-4 mount1">
					@foreach($showcate as $singlecate)
					@if($singlecate->name=='ELEKTRISCH')
					@foreach($singlecate->Rbikes()->get() as $newbike)
					@if($singlecate->id==$newbike->category_id)
					<a href="{{Route('scategorydetails',[$singlecate->id])}}"><h4 class="text-white">{{$singlecate->name}}</h4></a>
					<P class="text-white" style="width: 55%;"> {{$singlecate->description}}
					</P>
					@endif
					@endforeach
					@endif
					@endforeach
				</div>

				<div class=" mt-4 mount2">
					@foreach($showcate as $singlecate)
					@if($singlecate->name=='FITNESS')
					@foreach($singlecate->Rbikes()->get() as $newbike)
					@if($singlecate->id==$newbike->category_id)
					<a href="{{Route('scategorydetails',[$singlecate->id])}}"><h4 class="text-white">{{$singlecate->name}}</h4></a>
					<P class="text-white" style="width: 55%;" > {{$singlecate->description}}
					</P>
					@endif
					@endforeach
					@endif
					@endforeach
				</div>

			</div>

		</div>
	</section>

	<div class="container-fluid m-3">
		<div class="owl-carousel owl-theme">
			@foreach($showcate as $singlecate)
			@foreach($singlecate->Rbikes()->orderBy('Name','asc')->get() as $newbike)
			@foreach($newbike->Rimages()->take(9)->get() as $newimage)
			@if(($newbike->id)==($newimage->bike_id))
			

			
			<a href="{{Route('sbikedetails',[$newbike->slug])}}">
				<div class="item"><img style="height: 300px; width: 450px;" src="{{asset('admin/bikes/'.$newimage->images)}}"></div>
				

				
				<p class="text-center font-weight-bold mt-3">{{$newbike->Name}}</p>
				<p class="text-center">{{$newbike->price}} <span>&#8364;</span></p>
			</a>


			
			@endif
			@endforeach
			@endforeach
			
			@endforeach
		</div>
	</div>



	<script type="text/javascript" src="{{asset('user/asset/JS/jquery-1.12.4.js')}}"></script>
	<script type="text/javascript" src="{{asset('user/asset/JS/owl.carousel.min.js')}}"></script>
	<script>

		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:3
				}
			}
		})
	</script>


	@endsection
