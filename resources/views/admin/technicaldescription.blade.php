@extends('admin.layouts.header')
@section('title','Add_technical_Description')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Bike_Technical_Specification
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
										<form action="{{Route('registerTechnicalDescription')}}" method="post" class="kt-form">
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Parts</label>
														<input type="text" class="form-control" name="part" placeholder="Enter bike size">
															@if($errors->has('part'))
														<span style="color: red">
															{{$errors->First('part')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('size')?'d-none':''}}">Please enter Bike Part</span>

													</div>

													
														<div class="form-group ">
													<label class="col-form-label col-lg-3 col-sm-12">Technical Specification</label>
													<br>
													<div class="col-lg-9 col-md-9 col-sm-12">
														<textarea class="form-control" name="memo" placeholder="Enter a specification" rows="8"></textarea>
														@if($errors->has('memo'))
														<span style="color: red">
															{{$errors->First('memo')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('memo')?'d-none':''}}">Please enter technical Specification.</span>
													</div>
												</div>
										
														<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Bike Name:</label>
																<select class="form-control" name="bike_id">
																	@foreach($showBike as $showBike)
																	
																	<option value={{$showBike->id}}>{{$showBike->id}}</option>
																	@endforeach
																
																</select>
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

						</div>

@endsection
 