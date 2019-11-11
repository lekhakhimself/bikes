<?php

namespace App\Http\Controllers;

use App\Auth;
use App\technical_description;
use App\bikes;
use App\Http\Requests\TechnicalDescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class description extends Controller
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
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
      public function adddescription()
    {
        $this->middleware('auth');
         $showBike= bikes::orderby('id','desc')->get();
        return view('admin.technicaldescription',['showBike'=>$showBike]);
    }

        public function registerDescription (TechnicalDescription $request)
          {
            technical_description::create([
            'parts'=> $request->get('part'),            
            'description'=> $request->get('memo'),
            'bike_id'=>$request->get('bike_id'),
                ]);
        $request -> session() ->flash('success-message','Specification Added successfully');
        return redirect()->back(); 
          }
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
    public function showtechdescription()
    {
         $showdescription = technical_description::orderBy('id', 'asc')->with('bikes')->get();
        $this->middleware('auth');
        return view('admin.showbikedescription', ['showdescription' => $showdescription]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showeditbikedescription($id)
    {
        $bike = bikes::orderBy('id', 'asc')->get();
        $showeditdescript = technical_description::find($id);
        return view('admin.showeditdescription', compact('bike', 'showeditdescript'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         public function UpdateBikeDescription(TechnicalDescription $request ,$id)
    {
        $Bikedescription=technical_description::find($id);
        $Bikedescription->update([
          'parts'=> $request->get('part'),            
            'description'=> $request->get('memo'),
            'bike_id'=>$request->get('bike_id'),
           



        ]);

        if(!$Bikedescription){
            $request->session()->flash('success-message','Failed to update category');
        }
         $request->session()->flash('success-message','Description updated successfully');
   return redirect()->Route('ShowTechnicalDescription');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function deletedescription(Request $request, $id)
    {
       $Bikedescription=technical_description::find($id);
       $Bikedescription->delete();

        $request->session()->flash('success-message', 'Bike description deleted successfully');
        return redirect()->back();
    }
    
}
