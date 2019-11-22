@extends('admin.layouts.header')
@section('title','Add_bikes_Geometry')
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
										<div class="alert alert-primary">
											{{Session::get('success-message')}}
											
										</div>
										@endif


										<!--begin::Form-->
											@if(Count($showBike)==0)
										<span style="color: red">
											{{'sorry no bikes available'}}
										</span>
										@endif
										<form action="{{Route('registerbikesgeometry')}}" method="post" class="kt-form">
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Size</label>
														<input type="text" class="form-control" name="size" placeholder="Enter bike size">
															@if($errors->has('size'))
														<span style="color: red">
															{{$errors->First('size')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('size')?'d-none':''}}">Please enter Bike Size</span>
													</div>

													
												
													<div class="form-group">
														<label>Forty Nine</label>
														<input type="text" class="form-control" name="forty_nine" placeholder="Enter geometrics">
															@if($errors->has('forty_nine'))
														<span style="color: red">
															{{$errors->First('forty_nine')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('forty_nine')?'d-none':''}}">Please enter geometric description</span>
													</div>
													
												
													
													<div class="form-group">
														<label>Fifty two</label>
														<input type="text" class="form-control" name="fifty_two" placeholder="Enter geometrics">
														@if($errors->has('fifty_two'))
														<span style="color: red">
															{{$errors->First('fifty_two')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('fifty_two')?'d-none':''}}">Please enter geometric description</span>
													</div>
													 
													<div class="form-group">
														<label>Fifty Four</label>
														<input type="text" class="form-control" name="fifty_four" placeholder="Enter geometrics">
														@if($errors->has('fifty_four'))
														<span style="color: red">
															{{$errors->First('fifty_four')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('fifty_four')?'d-none':''}}">Please enter geometric description</span>
													</div>

													<div class="form-group">
														<label>Fifty Six</label>
														<input type="text" class="form-control" name="fifty_six" placeholder="Enter geometrics">
														@if($errors->has('fifty_six'))
														<span style="color: red">
															{{$errors->First('fifty_six')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('fifty_six')?'d-none':''}}">Please enter geometric description</span>
													</div>
													<div class="form-group">
														<label>Fifty Eight</label>
														<input type="text" class="form-control" name="fifty_eight" placeholder="Enter geometrics"> @if($errors->has('fifty_eight'))
														<span style="color: red">
															{{$errors->First('fifty_eight')}}
														</span>
														@endif
														
														<span class="form-text text-muted {{$errors->has('fifty_eight')?'d-none':''}}" id="fiftyeight" >Please enter geometric description</span>
													</div>
													<div class="form-group">
														<label>Sixty One</label>
														<input type="text" class="form-control" name="sixty_one" placeholder="Enter geometrics">
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
																	@foreach($showBike as $showBike)
																	
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
													<button type="Submit" class="btn btn-primary">Submit</button>
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
 