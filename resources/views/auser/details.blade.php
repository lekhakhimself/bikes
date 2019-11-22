@extends('auser.layouts.header')
@section('title','Details')
@section('content-section')
<section class="container-fluid">
			<div class="detail_bgimg">
				<h4> ROAD / PERFORMANCE</h4>  
				<p>WOMEN'S S-WORKS TARMAC DISC</p>
			</div>
</section>


<section class="container-fluid" >
		<div class="mntxt">
		<div class="row mt-5 mb-5">
			<div class="col-lg-2 col-md-2"></div>
			<div class="col-lg-8 col-md-8 detail1">
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
				<button class="btn btn-dark">Lees meer</button>
			</div>

			<div class="col-xl-2 col-lg-2 col-md-2" >
				
			</div>
		</div>
		</div>
		<div class=" bg-light ">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10 mt-4">
					<div class="row mb-5">
						<div class="col-lg-6">
							<div class="table-responsive bg-white">
								<h3>COLOR / SIZES</h3>
								<table class="table table-borderless">
									<thead>
										<tr>
											<th>Part#</th>
											<th>Color</th>
											<th>Size</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										@foreach($showdetails as $singledetails)
										@if($singledetails->bike_id=='3')
										<tr>
											<td>{{$singledetails->part}}</td>
											<td>{{$singledetails->color}}</td>
											<td>{{$singledetails->size}}</td>
											<td>{{$singledetails->description}}</td>
										</tr>
									@endif
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="table-responsive bg-white">
								<h3>Tchnical Specification</h3>
								<table class="table table-borderless">
									<tbody>
										@foreach($tech as $newtech)
										@if($newtech->bike_id=='3')
										<tr>
											<td>{{$newtech->parts}}</td>
											<td>{{$newtech->description}}</td>
										</tr>
										@endif
										@endforeach
										

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-1"></div>
			</div>
			
		</div>

		<div class="container-fluid ">
			<div class="row ">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					
					<div class="row ">
						<div class="col-lg-6 col-md-6">
							<div class="table-responsive pt-5">
								<h2>GEOMETRY</h2>
								<table class="table table-borderless">
									
									<thead>
										
										<tr>
											<th>Size</th>
											<th>49</th>
											<th>52</th>
											<th>54</th>
											<th>56</th>
											<th>58</th>
											<th>61</th>
										</tr>
									</thead>
									<tbody>
										
												@foreach($showgeometry as $singlegeometry)
										@if($singlegeometry->bike_id=='3')
										<tr>
											<td>{{$singlegeometry->Size}}</td>
											<td>{{$singlegeometry->fortynine}}</td>
											<td>{{$singlegeometry->fifty_two}}</td>
											<td>{{$singlegeometry->fifty_four}}</td>
											<td>{{$singlegeometry->fifty_six}}</td>
											<td>{{$singlegeometry->fifty_eight}}</td>
											<td>{{$singlegeometry->sixty_one}}</td>
										
										@endif
										@endforeach
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div>
								<div class="pt-5">
								<img class="img-responsive" src="{{asset('user/asset/Images/detail2.jpg')}}" style="width: 100%; background-size: cover;">
							</div>
							<div class="pt-5">
								<img class="img-responsive" src="{{asset('user/asset/Images/detail3.jpg')}}" style="width: 100%; background-size: cover;">
							</div>
							</div>
							
							

						</div>
					</div>
				</div>
				<div class="col-lg-1"></div>
				
			</div>
		</div>
	
		
	</section>


@endsection
