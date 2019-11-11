
@extends('admin.layouts.header')
@section('title','Show Bikes Details')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        @if(count($showdescription)==0)
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
                    <th>ID</th>
                    <th>Parts</th>
               
                    <th>Description</th>
                    <th>Bike Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
            
                @foreach($showdescription as $singledescription)
                    <tr>

                        <td class="text-center">
                            {{$singledescription->id}}
                        </td>
                        <td>{{$singledescription->parts}}</td>
                        <td>{{$singledescription->description}}</td>
          
                        <td>{{ $singledescription->bikes->Name}}</td>
                        <td><a href="{{Route('ShowEditTechnicalDescription',[$singledescription->id])}}"><i class="flaticon2-edit"></i></a> &nbsp;
                            &nbsp;
    <a href="{{Route('DeleteBikeDescription',[$singledescription->id])}}" onclick="return confirm('are you sure want to delete this category')"><i class="flaticon2-trash"></i></a>

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
