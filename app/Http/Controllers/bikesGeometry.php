<?php

namespace App\Http\Controllers;

use App\Auth;
use App\geometry;
use App\bikes;

use Illuminate\Http\Request;
use App\Http\Requests\geometry_validation;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class bikesGeometry extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function viewgeometry()
    {
            $this->middleware('auth');
         $showBike= bikes::orderby('id','desc')->get();
        return view('admin.addbikegeometry',['showBike'=>$showBike]);

    }

 public function registerGeometry (geometry_validation $request)
          {

           geometry::create([
            'Size'=> $request->get('size'),
            
            'fortynine'=> $request->get('forty_nine'),
            'fifty_two'=>$request->get('fifty_two'),
               'fifty_four'=>$request->get('fifty_four'),
                  'fifty_six'=>$request->get('fifty_six'),
                     'fifty_eight'=>$request->get('fifty_eight'),
           
             'sixty_one'=>$request->get('sixty_one'),
             'bike_id'=>$request->get('bike_id'),
           




        ]);
               $request->session()->flash('success-message', 'user register successfully');
        return redirect()->back();
     
          }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGeometry()
    {
    $showgeometry= geometry::orderBy('id', 'asc')->with('bikes')->get();
        $this->middleware('auth');
        return view('admin.sBikeGeometries', ['showgeometry' => $showgeometry]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function showeditgeometry($id)
    {
        $bike = bikes::orderBy('id', 'asc')->get();
        $showeditgeo = geometry::find($id);
        return view('admin.showeditgeometry', compact('bike', 'showeditgeo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function UpdateBikeGeometry(geometry_validation $request ,$id)
    {
         $bikegeometry=geometry::find($id);
         $bikegeometry->update([
                'Size'=> $request->get('size'),
            
            'fortynine'=> $request->get('forty_nine'),
            'fifty_two'=>$request->get('fifty_two'),
               'fifty_four'=>$request->get('fifty_four'),
                  'fifty_six'=>$request->get('fifty_six'),
                     'fifty_eight'=>$request->get('fifty_eight'),
           
             'sixty_one'=>$request->get('sixty_one'),
             'bike_id'=>$request->get('bike_id'),
           

        ]);

        if(!$bikegeometry){
            $request->session()->flash('success-message','Failed to update category');
        }
         $request->session()->flash('success-message','geometry updated successfully');
   return redirect()->Route('ShowBikeGeometry');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function deletegeometry(Request $request, $id)
    {
       $bikegeometry=geometry::find($id);
       $bikegeometry->delete();

        $request->session()->flash('success-message', 'Bike details deleted successfully');
        return redirect()->back();
    }
}
