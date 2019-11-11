
@extends('admin.layouts.header')
@section('title','Update Configuration')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-9">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Add Configuration
												</h3>
											</div>
										</div>
										@if(Session::has('success-message'))
										<div>
											{{Session::get('success-message')}}
											
										</div>
										@endif

										<!--begin::Form-->
										
										<form class="kt-form" method="post" action="{{Route('UpdateConfiguration',[$config->id])}}" >
											{{csrf_field()}}
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Key:</label>
													
														<input type="text" class="form-control" name="key" value="{{$config->key}}">
															@if($errors->has('key'))
														<span style="color: red">
															{{$errors->First('key')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('key')?'d-none':''}}">Please enter key</span>
													</div>
													
													
													<div class="form-group">
														<label>Value:</label>
														
														<input type="text" class="form-control" name="value" value="{{$config->value}}">
														@if($errors->has('value'))
														<span style="color: red">
															{{$errors->First('value')}}
														</span>
														@endif
														<span class="form-text text-muted {{$errors->has('value')?'d-none':''}}">Please value</span>
													</div>


												
													<div class="form-group form-group-last row">
															<div class="col-lg-4 form-group-sub">
																<label class="form-control-label">Type:</label>
																<select class="form-control" name="type">

																	<option value="string">string</option>
																	<option value="text">text</option>
																	<option value="boolean">boolean Window</option>

																</select>
																<span class="form-text text-muted {{$errors->has('type')?'d-none':''}}">Please choose url type</span>
																@if($errors->has('type'))
														<span style="color:red">
															{{$errors->First('type')}}
														</span>
														@endif
															</div>
												</div>
												<br>
													
													
												

														
																								
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

					

@endsection
