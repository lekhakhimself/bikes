@extends('admin.layouts.header')
@section('title','Add_bikes')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add New Bike
												</h3>
											</div>
										</div>
										@if(Session::has('success-message'))
										<div class="alert alert-primary">
											{{Session::get('success-message')}}
											
										</div>
										@endif

										<!--begin::Form-->
										@if(Count($showcategory)==0)
										<span style="color: red">
											{{'sorry no bikes available'}}
										</span>
										@endif
										<form class="kt-form" method="post" action="{{Route('addnewbike')}}" >
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Bike Name:</label>
														@if($errors->has('bname'))
														<span style="color: red">
															{{$errors->First('bname')}}
														</span>
														@endif
														<input type="text" class="form-control" name="bname" placeholder="Enter Bike name">
														<span class="form-text text-muted">Please enter your Bike name</span>
													</div>
													
													
													<div class="form-group">
														<label>Price:</label>
														@if($errors->has('price'))
														<span style="color: red">
															{{$errors->First('price')}}
														</span>
														@endif
														<input type="number" class="form-control" name="price" placeholder="Enter Bike Price">
														<span class="form-text text-muted">Please enter Bike Price</span>
													</div>
													<div class="form-group">
														<label>Slug</label>
														@if($errors->has('slug'))
														<span style="color: red">
															{{$errors->First('slug')}}
														</span>
														@endif
														<input type="text" class="form-control" name="slug" placeholder="Enter Bike Slug">
														<span class="form-text text-muted">Please enter slug for your bike</span>
													</div>
													
													
													<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																@if($errors->has('isactive'))
														<span style="color: red">
															{{$errors->First('isactive')}}
														</span>
														@endif
																<label class="form-control-label">Is-Active:</label>
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
													@if($errors->has('memo'))
														<span style="color: red">
															{{$errors->First('memo')}}
														</span>
														@endif
													<div class="col-lg-9 col-md-9 col-sm-12">
														<textarea class="form-control" name="memo" placeholder="Enter a menu" rows="8"></textarea>
														<span class="form-text text-muted">Please enter short description.</span>
													</div>
												</div>
												</div>
												<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Category:</label>
																@if($errors->has('category_idd'))
														<span style="color: red">
															{{$errors->First('category_idd')}}
														</span>
														@endif
																<select class="form-control" name="category_idd">
																	@foreach($showcategory as $showcategory)
																	
																	<option value={{$showcategory->id}}>{{$showcategory->name}}</option>
																	@endforeach
																
																</select>
															</div>
														</div>
											</div>
											
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="Submit" name="submit" class="btn btn-primary ">Submit</button>
													<button type="reset" name="reset" class="btn btn-secondary">Cancel</button>
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
 