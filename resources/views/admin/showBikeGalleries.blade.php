@extends('admin.layouts.header')
@section('title','Show Bike Images')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
 <div class="kt-portlet__body"  >
 @if(count($showimage)==0)
            <span style="color: red">
		{{'no category available'}}

                @else
	</span>
            @if(Session::has('success-message'))
                <div class="alert alert-danger">
                    {{Session::get('success-message')}}

                </div>
            @endif
		<table class="table table-image table-striped- table-bordered table-hover table-checkable">
		  <thead>
		  	@foreach($showimage as $singleimage)
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Image</th>
		      <th scope="col">Bike name</th>
		      <th scope="col">Bike id</th>
		      <th scope="col"> Action</th>
		    </tr>
		  </thead>
		  <tbody style="height: 400px;">
		    <tr>
		      <td scope="row" class="p-5">    {{$singleimage->id}}</td>
		      <td class="w-25">
			      <img src="{{asset('admin/bikes/'.$singleimage->images)}}" alt="{{$singleimage->images}}" height="150" width="150">
		      </td>
		      <td class="p-5">    {{$singleimage->bikes->Name}}</td>
		      <td class="p-5">    {{$singleimage->bikes->id}}</td>
		      <td class="text-center pt-5">	<a href="{{Route('editbikeImges',[$singleimage->id])}}"><i class="flaticon2-edit"></i></a> &nbsp; &nbsp; &nbsp;

															<a href="{{Route('deleteBikeImage',[$singleimage->id])}}" onclick="return confirm('are you sure want to delete this category')"><i class="flaticon2-trash"></i></a>


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
