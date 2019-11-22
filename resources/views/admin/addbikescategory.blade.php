@extends('admin.layouts.header')
@section('title','Add_bikes_Category')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Bike_Category
												</h3>
											</div>
										</div>
										@if(Session::has('success-message'))
										<div class="alert alert-primary">
											{{Session::get('success-message')}}

										</div>
										@endif


										<!--begin::Form-->

										<form action="{{route('addBikeCategory')}}" method="post" class="kt-form">
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">

														<label>category Name:</label>
														@if($errors->has('cname'))
														<span style="color: red">
															{{$errors->First('cname')}}
														</span>
														@endif
														<input type="text" class="form-control" name="cname" placeholder="Enter Bike Category name">
														<span class="form-text text-muted">Please enter your Bike Category name</span>
													</div>


													<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Is-Active:</label>
                                                                @if($errors->has('isactive'))
                                                                    <span style="color: red">
															{{$errors->First('isactive')}}
														</span>
                                                                @endif
																<select class="form-control" name="isactive">

																	<option value="1">Active</option>
																	<option value="0">Diactive</option>

																</select>
															</div>
														</div>
													<br>
													<div class="form-group ">
													<label class="col-form-label col-lg-3 col-sm-12">Description</label>
													<br>
													<div class="col-lg-9 col-md-9 col-sm-12">
                                                        @if($errors->has('memo'))
                                                            <span style="color: red">
															{{$errors->First('memo')}}
														</span>
                                                        @endif
														<textarea class="form-control" name="memo" placeholder="Enter a menu" rows="8"></textarea>
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

						</div>

@endsection
