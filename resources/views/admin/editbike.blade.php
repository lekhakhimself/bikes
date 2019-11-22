@extends('admin.layouts.header')
@section('title','Edit_bikes')
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
                        <div>
                            {{Session::get('success-message')}}

                        </div>
                    @endif

                <!--begin::Form-->

                    <form class="kt-form" method="post" action="{{Route('updateBike',[$editbikes->id])}}">
                        {{csrf_field()}}
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="form-group">
                                    <label>Bike Name:</label>
                                

                                    <input type="text" class="form-control" name="bname" value="{{$editbikes->Name}}">
                          
                                    <span class="form-text text-muted">Please enter your Bike name</span>
                                </div>
                                 
                                <div class="form-group">
                                    <label>Slug:</label>
                                

                                    <input type="text" class="form-control" name="slug" value="{{$editbikes->slug}}">
                          
                                    <span class="form-text text-muted">Please enter bike slug</span>
                                </div>


                                <div class="form-group">
                                    <label>Price:</label>

                                    <input type="number" class="form-control" name="price"
                                           value="{{$editbikes->price}}">
                                    <span class="form-text text-muted">Please enter Bike Price</span>
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
                                        <textarea class="form-control" name="memo" 
                                                  rows="8">{{$editbikes->short_description}}</textarea>
                                        <span class="form-text text-muted">Update your description.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-last row">
                                <div class="col-lg-4 form-group-sub">
                                    <label class="form-control-label">Category:</label>

                                    <select class="form-control" name="category_idd">
                                        @foreach($showcategory as $showcategory)

                                            <option value={{$showcategory->id}} @if($editbikes->category_id==$showcategory->id) @endif>{{$showcategory->name}}</option>
                                        @endforeach

                                    </select>
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
