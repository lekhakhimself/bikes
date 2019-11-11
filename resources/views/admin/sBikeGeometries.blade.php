@extends('admin.layouts.header')
@section('title','Show Bike Geometry')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
 <div class="kt-portlet__body"  >
 @if(count($showgeometry)==0)
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
		 
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Size</th>
		      <th scope="col">49</th>
		      <th scope="col">52</th>
		        <th scope="col">54</th>
		      <th scope="col">56</th>
		      <th scope="col">58</th>
		      <th scope="col">62</th>
		      <th scope="col">Bike name</th>
		      <th scope="col">Bike id</th>
		      <th scope="col"> Action</th>
		    </tr>
		  </thead>
		  <tbody >
		    <tr> 
		    	 	@foreach($showgeometry as $singlegeometry)
		      <td scope="row" >    {{$singlegeometry->id}}</td>
		      
		      	  	<td scope="row"> {{$singlegeometry->Size}}</td>
		      <td scope="row"> {{$singlegeometry->fortynine}}</td>
		      <td scope="row"> {{$singlegeometry->fifty_two}}</td>
		      <td scope="row"> {{$singlegeometry->fifty_four}}</td>
		      <td scope="row"> {{$singlegeometry->fifty_six}}</td>
		      <td scope="row"> {{$singlegeometry->fifty_eight}}</td>
		      <td scope="row"> {{$singlegeometry->sixty_one}}</td>
		      <td scope="row">    {{$singlegeometry->bikes->Name}}</td>
		      <td scope="row">    {{$singlegeometry->bikes->id}}</td>
		      <td scope="row">	<a href="{{Route('EditBikeGeometry',[$singlegeometry->id])}}"><i class="flaticon2-edit"></i></a> &nbsp; &nbsp; &nbsp;

															<a href="{{Route('deleteBikeGeometry',[$singlegeometry->id])}}" onclick="return confirm('are you sure want to delete this category')"><i class="flaticon2-trash"></i></a>


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
