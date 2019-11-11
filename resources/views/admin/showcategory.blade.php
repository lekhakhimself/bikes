@extends('admin.layouts.header')
@section('title','Show Bike Category')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
<div class="kt-portlet__body">

	<!--begin: Datatable -->
	@if(count($showcate)==0)
	<span style="color: red">
		{{'no category available'}}
	
		@else
	</span>
	  @if(Session::has('success-message'))
                        <div class="alert alert-danger">
                            {{Session::get('success-message')}}

                        </div>
                @endif


	<table class="table table-striped- table-bordered table-hover table-checkable"  id="kt_table_1">
		<thead>
			<tr>
				<th><center>Category ID</center></th>
				<th>Category Name</th>
				<th>Category Description</th>
				<th>Is-Active</th>
			
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($showcate as $singlecate)
			<tr>
				
				<td><center>{{$singlecate->id}} </center></td>
				<td>{{$singlecate->name}}</td>
				<td>{{$singlecate->description}}</td>
				<td>{{$singlecate->is_active}}</td>
				<td><a href="{{Route('editCategory',[$singlecate->id])}}"><i class="flaticon2-edit"></i></a> &nbsp; &nbsp; &nbsp;
												
															<a href="{{Route('deleteCategory',[$singlecate->id])}}" onclick="return confirm('are you sure want to delete this category')"><i class="flaticon2-trash"></i></a>
														
													
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
