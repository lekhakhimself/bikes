@extends('auser.layouts.header')
@section('title','NIEWS')
@section('content-section')


<div class="container-fluid ">
		
	
			<div class="row bg-dark mr-0 ml-0" >
				<div class="col-lg-2 col-md-2 col-sm-1 col-1  "></div>
				<div class="col-lg-8 col-md-8 col-sm-10 col-10 ">
					<div class="row menutext" >
						<div class="col-lg-2 col-md-4 col-sm-4 col-4  text-white ">
							<img class="img-responsive im p-2" src="{{asset('user/asset/Images/menu1.jpg')}}">
								<h6 class="text-center text-white">ROAD</h6>
								<p class="text-center text-white">Performance <br> Adventure & gravels <br>Frames</p>
							</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
							<img class="img-responsive im p-2" src="{{asset('user/asset/Images/mount.jpg')}}">
								<h6 class="text-center text-white">MOUNTAIN</h6>
								<p class="text-center text-white">Cross Country <br> Trail <br>Downhill
								</p>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
							<img class="img-responsive im p-2" src="{{asset('user/asset/Images/mount1.jpg')}}">
								<h6 class="text-center text-white">ELEKTRISCH</h6>
								<p class="text-center text-white"> Mountain <br> City</p>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-6 text-white">
							<img class="img-responsive im p-2" src="{{asset('user/asset/Images/mount2.jpg')}}">
								<h6 class="text-center text-white">FITNESS</h6>
								
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 col-6 text-white">
							<img class="img-responsive im p-2" src="{{asset('user/asset/Images/menu2.jpg')}}">
								<h6 class="text-center text-white">KINDEREN</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-1 col-1"></div>
			</div>
			
		

	</div>


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
