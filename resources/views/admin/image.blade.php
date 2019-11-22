@extends('admin.layouts.header')
@section('title','Add_bikes_Images')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Bike_Images
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
										<form action="{{Route('registernewimage')}}" method="post" enctype="multipart/form-data" class="kt-form">
											{{csrf_field()}}
											<div class="kt-portlet__body">
											

												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Upload Images</label>
														<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>

</div>
  @if($errors->has('image'))
														<span style="color: red">
															{{$errors->First('image')}}
														</span>
														@endif
													
												<br>
													
												
												
														<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Bike Name:</label>
																<select class="form-control" name="bike_id">
																	@foreach($showBike as $showBike)
																	
																	<option value={{$showBike->id}}>{{$showBike->Name}}</option>
																	@endforeach
																
																</select>
															</div>
															@if($errors->has('bike_id'))
														<span style="color: red">
															{{$errors->First('bike_id')}}
														</span>
														@endif
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
 