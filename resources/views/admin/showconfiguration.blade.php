@extends('admin.layouts.header')
@section('title','Show page menu Item')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        @if(count($showconfig)==0)
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
                    <th>Key</th>
                    <th>Value</th>
                    <th>Type</th>
                    
                   
                    <th>Actions</th>
                </tr>
                </thead>
            
                @foreach($showconfig as $singleconfig)
                    <tr>

                        <td class="text-center"  >
                            {{$singleconfig->id}}
                        </td>
                        <td>{{$singleconfig->key}}</td>
                        <td>{{$singleconfig->value}}</td>
                        <td>{{$singleconfig->type}}</td>
                      

                        <td><a href="{{Route('ShowEditConfig',[$singleconfig->id])}}"><i class="flaticon2-edit"></i></a> &nbsp;
                            &nbsp;
    <a href="{{Route('DeleteConfiguration',[$singleconfig->id])}}" onclick="return confirm('are you sure want to delete this item')"><i class="flaticon2-trash"></i></a>

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
