@extends('admin.layouts.header')
@section('title','edit_bikes_Category')
@section('content-section')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-9">

                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Edit Bike_Category
                            </h3>
                        </div>
                    </div>
                    @if(Session::has('success-message'))
                        <div>
                            {{Session::get('success-message')}}

                        </div>
                @endif


                <!--begin::Form-->

                    <form action="{{Route('updateCategory',[$editcategry->id])}}" method="post" class="kt-form">
                        {{csrf_field()}}
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">

                                    <label>category Name:</label>
                                   
                                    <input type="text" class="form-control" name="cname" value="{{$editcategry->name}}">
                                    <span class="form-text text-muted">Please enter your Bike Category name</span>
                                </div>


                                <div class="form-group form-group-last row">
                                    <div class="col-lg-4 form-group-sub">
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
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                     
                                       <textarea type="textarea" class="form-control" name="memo"  rows="8">{{$editcategry->description}}</textarea>
                                        <span class="form-text text-muted">Please enter short description.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="Submit" class="btn btn-primary">Update Category</button>
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
