<?php

namespace App\Http\Controllers;

use App\Auth;
use App\bike_categories;

use Illuminate\Http\Request;
use App\Http\Requests\bikeValidation;

class BikeCategory extends Controller
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

    public function addNewBikesCategory(bikeValidation $request)
    {

        bike_categories::create([
            'name' => $request->get('cname'),
            'description' => $request->get('memo'),
            'is_active' => $request->get('isactive')
        ]);

        $request->session()->flash('success-message', 'user register successfully');
        return redirect()->back();
    }

    public function showcategory()
    {
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        $this->middleware('auth');
        return view('admin.showcategory', ['showcate' => $showcate]);
    }
public function showeditbikecategory($id){
    $editcategry=bike_categories::find($id);
    return view('admin.editcategory',compact('editcategry'));

}
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
    public function updatecategory(bikeValidation $request ,$id)
    {
        $category=bike_categories::find($id);
        $category->update([
            'name' => $request->get('cname'),
            'description' => $request->get('memo'),
            'is_active' => $request->get('isactive'),
        ]);
        if(!$category){
            $request->session()->flash('success-message','Failed to update category');
        }
         $request->session()->flash('success-message','category updated successfully');
   return redirect()->Route('showCategory');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function deletecategory(Request $request, $id)
    {
       $category=bike_categories::find($id);
       $category->delete();

        $request->session()->flash('success-message', 'Category deleted successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
