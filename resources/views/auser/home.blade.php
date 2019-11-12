@extends('auser.layouts.header')
@section('title','Home')
@section('content-section')



<section class="container-fluid">


            <div class="bgimg">
                @foreach($showcate as $singlecate)
                @if($singlecate->name=='ROAD')
                    <h4> {{$singlecate->name}}</h4>
                    <p style="width:50%;">{{$singlecate->description}}</p>
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
						<h4 class="text-white">{{$singlecate->name}}</h4>
                               
						<P class="text-white" style="width: 55%;">
                            {{$singlecate->description}}
						</P>
                            @endif
                        @endforeach
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" >
					<div class="mt-4 mount1">
                        @foreach($showcate as $singlecate)
                            @if($singlecate->name=='ELEKTRISCH')
						<h4 class="text-white">{{$singlecate->name}}</h4>
						<P class="text-white" style="width: 55%;"> {{$singlecate->description}}
						</P>
                            @endif
                        @endforeach
					</div>

					<div class=" mt-4 mount2">
						  @foreach($showcate as $singlecate)
                            @if($singlecate->name=='FITNESS')
						<h4 class="text-white">{{$singlecate->name}}</h4>
						<P class="text-white" style="width: 55%;" > {{$singlecate->description}}
						</P>
                            @endif
                        @endforeach
					</div>

				</div>

			</div>
		</section>

		<div class="owl-carousel owl-theme">
		  <div class="item"><img src="{{asset('user/asset/Images/bike1.jpg')}}"></div>
		    <div class="item"><img src="{{asset('user/asset/Images/bike2.jpg')}}"></div>
		    <div class="item"><img src="{{asset('user/asset/Images/bike3.jpg')}}"></div>
		    <div class="item"><img src="{{asset('user/asset/Images/bike1.jpg')}}"></div>
		    <div class="item"><img src="{{asset('user/asset/Images/bike2.jpg')}}"></div>
		    <div class="item"><img src="{{asset('user/asset/Images/bike3.jpg')}}"></div>
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
