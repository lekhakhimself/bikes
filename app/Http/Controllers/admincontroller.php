<?php

namespace App\Http\Controllers;

use App\bikes;
use App\Auth;
use App\bike_categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\BikeReqValidate;

class admincontroller extends Controller
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

    public function header()
    {
        return view('admin.layouts.header');
    }

    public function admindashboard()
    {
        return view('admin.admindash');
    }

    public function addbike()
    {
        $showcategory = bike_categories::orderby('id', 'desc')->get();
        $this->middleware('auth');
        return view('admin.addbikes', ['showcategory' => $showcategory]);
    }

    public function addbikecategory()
    {
        $this->middleware('auth');
        return view('admin.addbikescategory');
    }

    public function showbikes()
    {
         $showbik = bikes::orderBy('id', 'asc')->with('category')->get();

        return view('admin.showbikes', ['showbik' => $showbik]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function addnewbikes(BikeReqValidate $request)
    {

        Bikes::create([
            'Name' => $request->get('bname'),
            'added-by' => auth()->user()->id,
            'updated-by' => auth()->user()->id,
            'category_id' => $request->get('category_idd'),
            'short_description' => $request->get('memo'),
            'is_active' => $request->get('isactive'),
            'price' => $request->get('price'),


        ]);
        $request->session()->flash('success-message', 'user register successfully');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showeditbikes($id)
    {
        $showcategory = bike_categories::orderBy('name', 'asc')->get();
        $editbikes = bikes::find($id);
        return view('admin.editbike', compact('editbikes', 'showcategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
       public function updateBikes(BikeReqValidate $request ,$id)
    {
        $Bikes=bikes::find($id);
        $Bikes->update([
           'Name' => $request->get('bname'),
            'added-by' => auth()->user()->id,
            'updated-by' => auth()->user()->id,
            'category_id' => $request->get('category_idd'),
            'short_description' => $request->get('memo'),
            'is_active' => $request->get('isactive'),
            'price' => $request->get('price')
        ]);

        if(!$Bikes){
            $request->session()->flash('success-message','Failed to update category');
        }
         $request->session()->flash('success-message','category updated successfully');
   return redirect()->Route('ShowBikes');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
       public function deletebike(Request $request, $id)
    {
       $bikes=bikes::find($id);
       $bikes->delete();

        $request->session()->flash('success-message', 'Bike deleted successfully');
        return redirect()->back();
    }

}
