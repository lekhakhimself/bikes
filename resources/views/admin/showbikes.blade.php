@extends('admin.layouts.header')
@section('title','Show Bikes')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        @if(count($showbik)==0)
            <span style="color: red">
		{{'no category available'}}

                @else
	</span>
            @if(Session::has('success-message'))
                <div class="alert alert-danger">
                    {{Session::get('success-message')}}

                </div>
            @endif


            <table class="table table-striped- table-bordered table-hover table-checkable" 
                   id="kt_table_1">
                <thead>
                <tr>
                    <th>
                        <center>Bike ID</center>
                    </th>
                    <th>Bike Name</th>
                    <th>Bike Description</th>
                    <th>Is-Active</th>
                    <th>Price</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($showbik as $singlebike)
                    <tr>

                        <td class="text-center">
                            {{$singlebike->id}}
                        </td>
                        <td>{{$singlebike->Name}}</td>
                        <td>{{$singlebike->short_description}}</td>
                        <td>{{$singlebike->is_active}}</td>
                        <td>{{$singlebike->price}}</td>
                        <td>{{ $singlebike->category->name}}</td>
                        <td>{{$singlebike->slug}}</td>
                        <td><a href="{{Route('editBikes',[$singlebike->id])}}"><i class="flaticon2-edit"></i></a> &nbsp;
                            &nbsp;
    <a href="{{Route('deleteBikes',[$singlebike->id])}}" onclick="return confirm('are you sure want to delete this category')"><i class="flaticon2-trash"></i></a>
                                                        
                        </td>


                    </tr>

                @endforeach

                </tbody>
            </table>
        @endif

    </div>
</div>
</div>
</div>


@endsection
