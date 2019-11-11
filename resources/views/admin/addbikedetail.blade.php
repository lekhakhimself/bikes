@extends('admin.layouts.header')
@section('title','Add_bikes_Details')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Bike_ Details
												</h3>
											</div>
										</div>
										@if(Session::has('success-message'))
										<div>
											{{Session::get('success-message')}}

										</div>
										@endif

										<!--begin::Form-->
											@if(Count($showBike)==0)
										<span style="color: red">
											{{'sorry no bikes available'}}
										</span>
										@endif
										<form action="{{route('registerBikeDetails')}}" method="post" class="kt-form">
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Part</label>
													
														<input type="text" class="form-control @if($errors->has('part'))
														{{'invalid'}} @endif" name="part" placeholder="Enter Part">
															@if($errors->has('part'))
														<span style="color: red">
															{{$errors->First('part')}}
														</span>
														@endif
														<span class="form-text text-muted">Please enter Bike Parts</span>
													</div>

													
												
													<div class="form-group">
														<label>Color</label>
														<input type="text" class="form-control" name="color" placeholder="Enter Color">
															@if($errors->has('color'))
														<span style="color: red">
															{{$errors->First('color')}}
														</span>
														@endif
														<span class="form-text text-muted">Please enter Bike Color</span>
													</div>
													
												
													<div class="form-group">
														<label>Size</label>
														<input type="text" class="form-control" name="size" placeholder="Enter Bike Size">
															@if($errors->has('size'))
														<span style="color: red">
															{{$errors->First('size')}}
														</span>
														@endif
														<span class="form-text text-muted">Please enter Bike Size</span>
													</div>
													
													
													
														<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Bike Name:</label>
																<select class="form-control" name="bike_id">
																	@foreach($showBike as $showBike)
																	
																	<option value={{$showBike->id}}>{{$showBike->Name}}</option>
																	@endforeach
																		@if($errors->has('bike_id'))
														<span style="color: red">
															{{$errors->First('bike_id')}}
														</span>
														@endif
																
																</select>
															</div>
														</div>
											</div>
													<br>
													<div class="form-group ">
													<label class="col-form-label col-lg-3 col-sm-12">Description</label>
													<br>
													<div class="col-lg-9 col-md-9 col-sm-12">
														<textarea class="form-control" name="memo" placeholder="Enter a menu" rows="8"></textarea>
															@if($errors->has('memo'))
														<span style="color: red">
															{{$errors->First('memo')}}
														</span>
														@endif
														<span class="form-text text-muted">Please enter short description.</span>
													</div>
												</div>
												</div>
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

						


@endsection
 