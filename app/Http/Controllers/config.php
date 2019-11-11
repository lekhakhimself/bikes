<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\configuration;
Use App\Http\Requests\ConfigValidation;
class config extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function configuration()
    {
        $this->middleware('auth');
        
        return view('admin.addconfiguration');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
        public function registerConfig(ConfigValidation $request)
          {
            configuration::create([
            'key'=> $request->get('key'),
            'value'=>$request->get('value'),
            'type'=>$request->get('type')
        ]);
        $request -> session() ->flash('success-message','configuration register successfully');
        return redirect()->back(); 
          }
    /**
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
public function showconfigs()
    {
        $showconfig = configuration::orderBy('id', 'asc')->get();
        $this->middleware('auth');
        return view('admin.showconfiguration', ['showconfig' => $showconfig]);
    }
     public function showeditconfig($id)
    {
  
        $config = configuration::find($id);
        return view('admin.showeditconfig', compact('config'));

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
         public function UpdateConfiguration(ConfigValidation $request ,$id)
    {
        $config=configuration::find($id);
        $config->update([
            'key'=> $request->get('key'),
            'value'=>$request->get('value'),
            'type'=>$request->get('type')
        ]);

        if(!$config){
            $request->session()->flash('success-message','Failed to update configuration');
        }
         $request->session()->flash('success-message','confugration updated successfully');
   return redirect()->Route('ShowConfiguration');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function deleteConfiguration(Request $request, $id)
    {
       $config=configuration::find($id);
       $config->delete();

        $request->session()->flash('success-message', 'configuration deleted successfully');
        return redirect()->back();
    }
}
