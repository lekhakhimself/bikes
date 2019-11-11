<?php

namespace App\Http\Controllers;

use App\Auth;
use App\gallery;
use App\bikes;

use Illuminate\Http\Request;
use App\Http\Requests\Imagevalidation ;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class images extends Controller
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

    public function viewimage()
    {
        $this->middleware('auth');
        $showBike = bikes::orderby('id', 'desc')->get();
        return view('admin.image', ['showBike' => $showBike]);

    }

    public function addimage(Imagevalidation $request)
    {


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('admin/bikes/', $image);

            gallery::create([
                'images' => $image,
                'bike_id' => $request->get('bike_id')
            ]);
            $request->session()->flash('success-message', 'Imge uploaded  successfully');
            return redirect()->back();
        }

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

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showbikeimages()
    {
        $showimage = gallery::orderBy('id', 'asc')->with('bikes')->get();
        $this->middleware('auth');
        return view('admin.showBikeGalleries', ['showimage' => $showimage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showeditimage($id)
    {
        $bike = bikes::orderBy('id', 'asc')->get();
        $showeditimages = gallery::find($id);
        return view('admin.editimage', compact('bike', 'showeditimages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateimage(Request $request, $id)
    {
        $addImage = gallery::find($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = sha1(time()) . "." . $file->getClientOriginalExtension();
            $file->move('admin/bikes/', $image);
            if ($addImage->images) {
                unlink('admin/bikes/' . $addImage->images);
            }
            $addImage->images = $image;
        }
       

       $addImage->update([
        
           'bike_id' => $request->get('bike_id')
       ]);
        $request->session()->flash('success-message', 'Imge updated  successfully');
        return redirect()->Route('ShowBikeImages');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function deleteimage(Request $request,$id)
    {
            $bikeimage=gallery::find($id);
       $bikeimage->delete();

        $request->session()->flash('success-message', 'Image deleted successfully');
        return redirect()->back();
    }
    
    
}
