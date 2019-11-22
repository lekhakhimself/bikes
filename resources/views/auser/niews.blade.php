@extends('auser.layouts.header')
@section('title','NIEWS')
@section('content-section')


    <div class="container-fluid ">


        <div class="row bg-dark mr-0 ml-0">
            <div class="col-lg-2 col-md-2 col-sm-1 col-1  "></div>
            <div class="col-lg-8 col-md-8 col-sm-10 col-10 ">
                <div class="row menutext">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4  text-white ">
                        @foreach($showimage as $singleimage)
                            @if($singleimage->bike_id=='3')
                                <img class="img-responsive im p-2" src="{{asset('admin/bikes/'.$singleimage->images)}}"
                                     alt="{{$singleimage->images}}">
                            @endif
                        @endforeach


                            @foreach($showcate as $singlecate)
                                @if($singlecate->id=='3')
                                   <a href="{{Route('scategorydetails',[$singlecate->id])}}"> <h6 class="text-center text-white"> {{$singlecate->name}} </h6></a>

                                    @foreach($singlecate->Rbikes()->orderBy('Name','asc')->take(2)->get() as $newBikes)
                                        <p class="text-center text-white" style="padding: 0;">   {{ $newBikes->Name}} </p>
                                    @endforeach
                                @endif
                            @endforeach



                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
                        @foreach($showimage as $singleimage)
                            @if($singleimage->bike_id=='8')
                                <img class="img-responsive im p-2" src="{{asset('admin/bikes/'.$singleimage->images)}}"
                                     alt="{{$singleimage->images}}">
                            @endif
                        @endforeach
                        
                            @foreach($showcate as $singlecate)
                                @if($singlecate->id=='1')
     <a href="{{Route('scategorydetails',[$singlecate->id])}}"><h6 class="text-center text-white">     {{$singlecate->name}} </h6></a>

                      @foreach($singlecate->Rbikes()->orderBy('Name','asc')->take(3)->get() as $newBikes)
                                        <p class="text-center text-white" style="padding: 0;">   {{ $newBikes->Name}} </p>
                                    @endforeach



                                    
                                @endif
                            @endforeach
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4 text-white">
                        @foreach($showimage as $singleimage)
                            @if($singleimage->bike_id=='12')
                                <img class="img-responsive im p-2" src="{{asset('admin/bikes/'.$singleimage->images)}}"
                                     alt="{{$singleimage->images}}">
                            @endif
                        @endforeach
                    

                            @foreach($showcate as $singlecate)
                                @if($singlecate->id=='6')
                                     <a href="{{Route('scategorydetails',[$singlecate->id])}}"> <h6 class="text-center text-white">   {{$singlecate->name}} </h6></a>
                
                      @foreach($singlecate->Rbikes()->orderBy('Name','asc')->take(3)->get() as $newBikes)
                                        <p class="text-center text-white" style="padding: 0;">   {{ $newBikes->Name}} </p>
                                    @endforeach
                                @endif
                            @endforeach
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6 text-white">
                        @foreach($showimage as $singleimage)
                            @if($singleimage->bike_id=='15')
                                <img class="img-responsive im p-2" src="{{asset('admin/bikes/'.$singleimage->images)}}"
                                     alt="{{$singleimage->images}}">
                            @endif
                        @endforeach
                     

                            @foreach($showcate as $singlecate)
                                @if($singlecate->id=='5')
                                        <a href="{{Route('scategorydetails',[$singlecate->id])}}"> <h6 class="text-center text-white"> {{$singlecate->name}} </h6></a>
                         @foreach($singlecate->Rbikes()->orderBy('Name','asc')->take(3)->get() as $newBikes)
                                        <p class="text-center text-white" style="padding: 0;">   {{ $newBikes->Name}} </p>
                                    @endforeach
                                @endif
                            @endforeach


                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-6 text-white">
                        <img class="img-responsive im p-2" src="{{asset('user/asset/Images/menu2.jpg')}}">
                      

                            @foreach($showcate as $singlecate)
                                @if($singlecate->id=='7')
                  <a href="{{Route('scategorydetails',[$singlecate->id])}}">   <h6 class="text-center text-white"> {{$singlecate->name}} </h6></a>
                         @foreach($singlecate->Rbikes()->orderBy('Name','asc')->take(3)->get() as $newBikes)
                                        <p class="text-center text-white" style="padding: 0;">   {{ $newBikes->Name}} </p>
                                    @endforeach
                                @endif
                            @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-1 col-1"></div>
    </div>



    </div>


    <section class="container-fluid">


        <div class="bgimg">
            @foreach($showcate as $singlecate)
                @if($singlecate->name=='ROAD')
                    <h4> {{$singlecate->name}}</h4>
                    <p style="width:50%;">{{$singlecate->description}}</p>
                @endif
            @endforeach

        </div>

    </section>

    <section>
        <div class="row mr-0 ml-0" style="margin-right: 0px !important;">
            <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                <div class="mount">
                    @foreach($showcate as $singlecate)
                        @if($singlecate->name=='MOUNTAIN')
                            <h4 class="text-white">{{$singlecate->name}}</h4>

                            <P class="text-white" style="width: 55%;">
                                {{$singlecate->description}}
                            </P>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="mt-4 mount1">
                    @foreach($showcate as $singlecate)
                        @if($singlecate->name=='ELEKTRISCH')
                            <h4 class="text-white">{{$singlecate->name}}</h4>
                            <P class="text-white" style="width: 55%;"> {{$singlecate->description}}
                            </P>
                        @endif
                    @endforeach
                </div>

                <div class=" mt-4 mount2">
                    @foreach($showcate as $singlecate)
                        @if($singlecate->name=='FITNESS')
                            <h4 class="text-white">{{$singlecate->name}}</h4>
                            <P class="text-white" style="width: 55%;"> {{$singlecate->description}}
                            </P>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </section>
        <div class="container-fluid m-3">
             <div class="owl-carousel owl-theme">
        @foreach($showcate as $singlecate)
             @foreach($singlecate->Rbikes()->orderBy('Name','asc')->get() as $newbike)
                @foreach($newbike->Rimages()->take(9)->get() as $newimage)
                @if(($newbike->id)==($newimage->bike_id))
               

                    
                    <a href="{{Route('sbikedetails',[$newbike->slug])}}">
                          <div class="item"><img style="height: 300px; width: 450px;" src="{{asset('admin/bikes/'.$newimage->images)}}"></div>
                      

                
                    <p class="text-center font-weight-bold mt-3">{{$newbike->Name}}</p>
                    <p class="text-center">{{$newbike->price}} <span>&#8364;</span></p>
                    </a>


               
                @endif
                @endforeach
                @endforeach
               
                @endforeach
 </div>
            </div>
        </div>

         



    <script type="text/javascript" src="{{asset('user/asset/JS/jquery-1.12.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/asset/JS/owl.carousel.min.js')}}"></script>
    <script>

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    

@endsection
