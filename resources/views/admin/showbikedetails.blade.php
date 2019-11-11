@extends('admin.layouts.header')
@section('title','Show Bikes Details')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        @if(count($showdetails)==0)
            <span style="color: red">
		{{'no category available'}}

                @else
	</span>
            @if(Session::has('success-message'))
                <div class="alert alert-danger">
                    {{Session::get('success-message')}}

                </div>
            @endif


            <table class="table table-striped- table-bordered table-hover table-checkable "  
                   id="kt_table_1">
                <thead >
                <tr>
                    <th>
                    ID
                    </th>
                    <th>Part</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Description</th>
                    <th>Bike Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
            
                @foreach($showdetails as $singledetails)
                    <tr>

                        <td class="text-center"  >
                            {{$singledetails->id}}
                        </td>
                        <td>{{$singledetails->part}}</td>
                        <td>{{$singledetails->color}}</td>
                        <td>{{$singledetails->size}}</td>
                        <td>{{$singledetails->description}}</td>
                        <td>{{ $singledetails->bikes->Name}}</td>
                        <td><a href="{{Route('editbikeDetails',[$singledetails->id])}}"><i class="flaticon2-edit"></i></a> &nbsp;
                            &nbsp;
    <a href="{{Route('deleteBikeDetails',[$singledetails->id])}}" onclick="return confirm('are you sure want to delete this category')"><i class="flaticon2-trash"></i></a>

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
