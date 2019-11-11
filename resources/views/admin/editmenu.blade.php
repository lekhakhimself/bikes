@extends('admin.layouts.header')
@section('title','Edit Page Menu')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="row">
                                <div class="col-lg-9">

                                    <!--begin::Portlet-->
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                 Edit Bike Details
                                                </h3>
                                            </div>
                                        </div>
                                        @if(Session::has('success-message'))
                                        <div>
                                            {{Session::get('success-message')}}

                                        </div>
                                        @endif

                                        <!--begin::Form-->
                                           
                                        <form action="{{Route('UpdateMenu',[$showeditmenu->id])}}" method="post" class="kt-form">
                                            {{csrf_field()}}
                                            <div class="kt-portlet__body">
                                                <div class="kt-section kt-section--first">
                                            <div class="kt-portlet__body">
                                                <div class="kt-section kt-section--first">
                                                    <div class="form-group">
                                                        <label>Enter Slug:</label>
                                                        <input type="text" class="form-control" name="slug" value="{{$showeditmenu->slug}}">
                                                            @if($errors->has('slug'))
                                                        <span style="color: red">
                                                            {{$errors->First('slug')}}
                                                        </span>
                                                        @endif
                                                        <span class="form-text text-muted {{$errors->has('slug')?'d-none':''}}">Please enter your Slug</span>
                                                    </div>



                                                    <div class="form-group form-group-last row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label class="form-control-label">Header:</label>
                                                                <select class="form-control" name="header">

                                                                    <option value="yes">Active</option>
                                                                    <option value="No">Diactive</option>

                                                                </select>
                                                                     @if($errors->has('header'))
                                                        <span style="color: red">
                                                            {{$errors->First('header')}}
                                                        </span>
                                                        @endif
                                                            </div>
                                                        </div>
                                                        <br>

                                                    <div class="form-group form-group-last row">
                                                            <div class="col-lg-4 form-group-sub">
                                                                <label class="form-control-label">Footer:</label>
                                                                <select class="form-control" name="footer">

                                                                    <option value="yes">Active</option>
                                                                    <option value="No">Diactive</option>

                                                                </select>
                                                                     @if($errors->has('footer'))
                                                        <span style="color: red">
                                                            {{$errors->First('footer')}}
                                                        </span>
                                                        @endif
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>
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




@endsection
