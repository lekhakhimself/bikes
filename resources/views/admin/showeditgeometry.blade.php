@extends('admin.layouts.header')
@section('title','Update_bikes_Geometry')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Bike_Geometry
												</h3>
											</div>
										</div>
										@if(Session::has('success-message'))
										<div>
											{{Session::get('success-message')}}
											
										</div>
										@endif


										<!--begin::Form-->
									
										<form action="{{Route('updateBikeGeometry',[$showeditgeo->id])}}" method="post" class="kt-form">
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Size</label>
														<input type="text" class="form-control" name="size" value="{{$showeditgeo->Size}}">
															@if($errors->has('size'))
														<span style="color: red">
															{{$errors->First('size')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('size')?'d-none':''}}">Please enter Bike Size</span>
													</div>

													
												
													<div class="form-group">
														<label>Forty Nine</label>
														<input type="text" class="form-control" name="forty_nine" value="{{$showeditgeo->fortynine}}">
															@if($errors->has('forty_nine'))
														<span style="color: red">
															{{$errors->First('forty_nine')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('forty_nine')?'d-none':''}}">Please enter geometric description</span>
													</div>
													
												
													
													<div class="form-group">
														<label>Fifty two</label>
														<input type="text" class="form-control" name="fifty_two" value="{{$showeditgeo->fifty_two}}">
														@if($errors->has('fifty_two'))
														<span style="color: red">
															{{$errors->First('fifty_two')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('fifty_two')?'d-none':''}}">Please enter geometric description</span>
													</div>
													 
													<div class="form-group">
														<label>Fifty Four</label>
														<input type="text" class="form-control" name="fifty_four" value="{{$showeditgeo->fifty_four}}">
														@if($errors->has('fifty_four'))
														<span style="color: red">
															{{$errors->First('fifty_four')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('fifty_four')?'d-none':''}}">Please enter geometric description</span>
													</div>

													<div class="form-group">
														<label>Fifty Six</label>
														<input type="text" class="form-control" name="fifty_six" value="{{$showeditgeo->fifty_six}}">
														@if($errors->has('fifty_six'))
														<span style="color: red">
															{{$errors->First('fifty_six')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('fifty_six')?'d-none':''}}">Please enter geometric description</span>
													</div>
													<div class="form-group">
														<label>Fifty Eight</label>
														<input type="text" class="form-control" name="fifty_eight" value="{{$showeditgeo->fifty_eight}}"> @if($errors->has('fifty_eight'))
														<span style="color: red">
															{{$errors->First('fifty_eight')}}
														</span>
														@endif
														
														<span class="form-text text-muted {{$errors->has('fifty_eight')?'d-none':''}}" id="fiftyeight" >Please enter geometric description</span>
													</div>
													<div class="form-group">
														<label>Sixty One</label>
														<input type="text" class="form-control" name="sixty_one" value="{{$showeditgeo->sixty_one}}">
														@if($errors->has('sixty_one'))
														<span style="color: red">
															{{$errors->First('sixty_one')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('sixty_one')?'d-none':''}}">Please enter geometric description</span>
													</div>
													
														<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Bike Name:</label>
																<select class="form-control" name="bike_id">
																	@foreach($bike as $showBike)
																	
																	<option value={{$showBike->id}}>{{$showBike->Name}}</option>
																	@endforeach
																
																</select>
																	@if($errors->has('bike_id'))
														<span style="color: red">
															{{$errors->First('bike_id')}}
														</span>
														@endif

															</div>
														</div>
											</div>
													<br>
													
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="Submit" class="btn btn-primary">Update</button>
													<button type="reset" class="btn btn-secondary">Cancel</button>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>

									<!--end::Portlet-->

									<!--begin::Portlet-->
						
									<!--end::Portlet-->
								</div>
															</div>

						</div>

@endsection
 