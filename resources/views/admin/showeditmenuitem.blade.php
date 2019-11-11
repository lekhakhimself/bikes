@extends('admin.layouts.header')
@section('title','Update_Menu_Item')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Menu Item
												</h3>
											</div>
										</div>
										@if(Session::has('success-message'))
										<div>
											{{Session::get('success-message')}}

										</div>
										@endif

										<!--begin::Form-->

										<form class="kt-form" method="post" action="{{Route('UpdateMenuItem',[$menuitem->id])}}" >
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Name:</label>
														<input type="text" class="form-control" name="nam" value="{{$menuitem->name}}">
														@if($errors->has('nam'))
														<span style="color:red">
															{{$errors->First('nam')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('nam')?'d-none':''}} ">Please enter name</span>
													</div>


													<div class="form-group">
														<label>Url:</label>
														<input type="text" class="form-control" name="url" value="{{$menuitem->url}}">
														@if($errors->has('url'))
														<span style="color:red">
															{{$errors->First('url')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('url')?'d-none':''}} ">Please enter Url</span>
													</div>

													<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Type:</label>
																<select class="form-control" name="type">

																	<option value="self">Self</option>
																	<option value="newTab">New Tab</option>
																	<option value="newWindow">New Window</option>

																</select>
																@if($errors->has('type'))
														<span style="color:red">
															{{$errors->First('type')}}
														</span>
														@endif
															</div>
														</div>
													</div>

													<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Is-Active:</label>
																<select class="form-control" name="isactive">

																	<option value="1">Active</option>
																	<option value="0">Diactive</option>

																</select>
																@if($errors->has('isactive'))
														<span style="color:red">
															{{$errors->First('isactive')}}
														</span>
														@endif
															</div>
														</div>


											</div>

											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="Submit" name="submit" class="btn btn-primary ">Update</button>
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
