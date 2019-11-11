<?php

namespace App\Http\Controllers;

use App\Auth;

use App\menu_item;
Use App\Http\Requests\menuItemValidation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class menuItem extends Controller
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
     public function viewmenuform()
    {
        $this->middleware('auth');
        return view('admin.addmenu_item');
        
    }
    public function registermenuitem(menuItemValidation $request)
    {
        menu_item::Create([
            'name'=>$request->get('nam'),
            'url'=>$request->get('url'),
            'type'=>$request->get('type'),
            'is_active'=>$request->get('isactive'),
        ]);
          $request -> session() ->flash('success-message','Menu Item added  successfully');
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
  public function showmenuitems()
    {
        $showmenuitem = menu_item::orderBy('id', 'asc')->get();
        $this->middleware('auth');
        return view('admin.showmenuitem', ['showmenuitem' => $showmenuitem]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function showeditmenuitem($id)
    {

        $menuitem = menu_item::find($id);
        return view('admin.showeditmenuitem', compact('menuitem'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatemenuItem(menuItemValidation $request, $id)
    {
         $updatemenuitem=menu_item::find($id);
        $updatemenuitem->update([
            'name'=>$request->get('nam'),
            'url'=>$request->get('url'),
            'type'=>$request->get('type'),
            'is_active'=>$request->get('isactive'),

        ]);

        if(!$updatemenuitem){
            $request->session()->flash('success-message','Failed to update menu Item');
        }
         $request->session()->flash('success-message','menu Item updated successfully');
   return redirect()->Route('ShowMenuItem');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletemenuitem(Request $request,$id)
    {
    $deleteitem= menu_item::find($id);
    $deleteitem->delete();
    if(!$deleteitem)
    {
        $request->session()->flash('success-message','failed to delete menu item');
    }
    $request->session()->flash('success-message','menu item deleted successfully');
    return redirect()->back();
    }
}
