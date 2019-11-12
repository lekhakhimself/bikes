<?php

namespace App\Http\Controllers;
use App\bike_categories;
use App\configuration;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class UserController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewhome()
    {
    

 
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        return view('auser.home',['showcate' => $showcate]);

    // }

}
   public function viewniews()
    {
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        return view('auser.niews',['showcate' => $showcate]);
    }
 public function viewfietsen()
    {
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        return view('auser.fietsen',['showcate' => $showcate]);
    }
     public function viewoverans()
    {
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        return view('auser.overans',['showcate' => $showcate]);
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
