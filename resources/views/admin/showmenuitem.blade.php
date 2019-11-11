@extends('admin.layouts.header')
@section('title','Show page menu Item')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        @if(count($showmenuitem)==0)
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
                    <th>Name</th>
                    <th>Url</th>
                    <th>Type</th>
                    
                    <th>Is Active</th>
                    <th>Actions</th>
                </tr>
                </thead>
            
                @foreach($showmenuitem as $singlemenuitem)
                    <tr>

                        <td class="text-center"  >
                            {{$singlemenuitem->id}}
                        </td>
                        <td>{{$singlemenuitem->name}}</td>
                        <td>{{$singlemenuitem->url}}</td>
                        <td>{{$singlemenuitem->type}}</td>
                        <td>{{$singlemenuitem->is_active=='1'?'Yes':'no'}}</td>

                        <td><a href="{{Route('showedmenuItem',[$singlemenuitem->id])}}"><i class="flaticon2-edit"></i></a> &nbsp;
                            &nbsp;
    <a href="{{Route('DeleteeMenuItem',[$singlemenuitem->id])}}" onclick="return confirm('are you sure want to delete this item')"><i class="flaticon2-trash"></i></a>

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
