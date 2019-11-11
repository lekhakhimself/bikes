<?php

namespace App\Http\Controllers;

use App\Auth;
use App\bike_details;
use App\bikes;


use Illuminate\Http\Request;
use App\Http\Requests\addBikeDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class bikeDetails extends Controller
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
    public function bikeDetail()
    {
        $this->middleware('auth');
         $showBike= bikes::orderBy('id','desc')->get();
        return view('admin.addbikedetail',['showBike'=>$showBike]);
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

        public function AddBikesDetails(addBikeDetails $request)
          {
            bike_details::create([
            'part'=> $request->get('part'),
            'color'=>$request->get('color'),
            'size'=>$request->get('size'),
            
            'description'=> $request->get('memo'),
            'bike_id'=>$request->get('bike_id'),
           




        ]);
        $request -> session() ->flash('success-message','user register successfully');
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
 public function showbikedetails()
    {
        $showdetails = bike_details::orderBy('id', 'asc')->with('bikes')->get();
        $this->middleware('auth');
        return view('admin.showbikedetails', ['showdetails' => $showdetails]);
    }
  public function showeditbikedetails($id)
    {
        $bike = bikes::orderBy('id', 'asc')->get();
        $showeditdetails = bike_details::find($id);
        return view('admin.showeditdetails', compact('bike', 'showeditdetails'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function UpdateBikeDetails(addBikeDetails $request ,$id)
    {
        $Bikedetails=bike_details::find($id);
        $Bikedetails->update([
            'part'=> $request->get('part'),
            'color'=>$request->get('color'),
            'size'=>$request->get('size'),
            
            'description'=> $request->get('memo'),
            'bike_id'=>$request->get('bike_id'),
        ]);

        if(!$Bikedetails){
            $request->session()->flash('success-message','Failed to update category');
        }
         $request->session()->flash('success-message','category updated successfully');
   return redirect()->Route('ShowBikeDetails');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function deletedetails(Request $request, $id)
    {
       $bikedetails=bike_details::find($id);
       $bikedetails->delete();

        $request->session()->flash('success-message', 'Bike details deleted successfully');
        return redirect()->back();
    }
    
    }

