@extends('admin.layouts.header')
@section('title','Show page menu')
@section('content-section')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="card">
  <div class="card-body">
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        @if(count($showmenus)==0)
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
                    <th>Header</th>
                    <th>Footer</th>
                    <th>Slug</th>
                    
                    <th>Actions</th>
                </tr>
                </thead>
            
                @foreach($showmenus as $singlemenu)
                    <tr>

                        <td class="text-center"  >
                            {{$singlemenu->id}}
                        </td>
                        <td>{{$singlemenu->header}}</td>
                        <td>{{$singlemenu->footer}}</td>
                        <td>{{$singlemenu->slug}}</td>
                        <td><a href="{{Route('showedmenu',[$singlemenu->id])}}"><i class="flaticon2-edit"></i></a> &nbsp;
                            &nbsp;
    <a href="{{Route('DeleteMenu',[$singlemenu->id])}}" onclick="return confirm('are you sure want to delete this item')"><i class="flaticon2-trash"></i></a>

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
