<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Auth;

use App\menu;


use App\Http\Requests\MenuValidation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class addmenu extends Controller
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
      public function viewmenus()
    {
         $this->middleware('auth');

        return view('admin.addmenus');
    }
public function registermenu(MenuValidation $request)
{
    menu::Create([
        'header'=>$request->get('header'),
        'footer'=>$request->get('footer'),
        'slug'=>$request->get('slug'),


    ]);
     $request -> session() ->flash('success-message','Menus Added successfully');
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
    public function showmenu()
    {
        $showmenus = menu::orderBy('id', 'asc')->get();
        $this->middleware('auth');
        return view('admin.showmenu', ['showmenus' => $showmenus]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function showeditmenu($id)
    {

        $showeditmenu = menu::find($id);
        return view('admin.editmenu', compact('showeditmenu'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function Updatemenu(MenuValidation $request ,$id)
    {
        $updatemenu=menu::find($id);
        $updatemenu->update([
             'header'=>$request->get('header'),
        'footer'=>$request->get('footer'),
        'slug'=>$request->get('slug'),

        ]);

        if(!$updatemenu){
            $request->session()->flash('success-message','Failed to update menu');
        }
         $request->session()->flash('success-message','menu updated successfully');
   return redirect()->Route('ShowMenu');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletemenu(Request $request,$id)
    {
       $deletemenu=menu::find($id);
       $deletemenu->delete();
        $request->session()->flash('success-message','menu Deleted successfully');
   return redirect()->back();
}

}
