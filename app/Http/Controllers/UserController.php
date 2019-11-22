    <?php
    namespace App\Http\Controllers;
    use App\bike_categories;
    use App\configuration;
    use App\Bikes;
    use App\bike_details;
    use App\geometry;
    use App\gallery;
    use App\technical_description;
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
        $showcate = bike_categories::with(['Rbikes' => function ($query) {
            $query->where('is_active', '1');
        }])->get();
        return view('auser.home', ['showcate' => $showcate]);
    // }
    }
    public function viewniews()
    {
        $bikename = bikes::orderBy('id', 'asc')->get();
        $showcate = bike_categories::with(['Rbikes' => function ($query) {
            $query->where('is_active', '1');
        }])->get();
        $showimage = gallery::orderBy('id', 'asc')->get();
        return view('auser.niews', compact('showcate', 'showimage', 'bikename'));
    }
    public function viewfietsen()
    {
        $showcate = bike_categories::with(['Rbikes'=> function ($query){
            $query->with('Rimages');
        }])->get();
        return view('auser.fietsen', ['showcate'=>$showcate]);
    }
    public function viewoverans()
    {
        $showcate = bike_categories::orderBy('id', 'asc')->get();
        return view('auser.overans', ['showcate' => $showcate]);
    }
    public function viewdetails()
    {
        $showdetails = bike_details::orderBy('id', 'asc')->get();
        $showgeometry = geometry::orderBy('id', 'asc')->get();
        $tech = technical_description::orderBy('id', 'asc')->get();
        return view('auser.details', compact('showdetails', 'showgeometry', 'tech'));
    }
    public function search(Request $request)
    {
        $bikesearch = $request->get('search');
        $bike = bikes::orderBy('id', 'asc')->get();
        $searchbike = bike_categories::orderBy('id', 'asc')->where('name', 'like', '%' . $bikesearch . '%')->orWhereHas('Rbikes', function ($query) use ($bikesearch) {
            $query->where('Name', 'like', '%' . $bikesearch . '%');
            $query->with('Rimages','Bdetails','Bgeometry','tdiscription');
        })->get();
        if (!$searchbike->isEmpty()){
            return view('auser.searchbike', ['searchbike' => $searchbike]);
        }
        else
        {
            $request->session()->flash('success-message','No Item Found');
            return redirect()->Route('userhome');
        }
    }
    public function sbikedetails(Request $request,$slug)
    {
        $slug=$slug;
        $showcate = bike_categories::with(['Rbikes'=> function ($query){
            $query->with('Rimages','Bdetails','Bgeometry','tdiscription');
        }])->get();
        foreach ($showcate as $singlecate) {
            foreach ($singlecate->Rbikes as $newbike) {
                if ($slug==$newbike->slug) {
                    if ($newbike->category_id==$singlecate->id) {
                        return view('auser.sbikedetails',compact('showcate','slug'));
                    }
                }
            }
        }
    }
    public function bikecatedetails(Request $request,$id)
    {
        $bike_category=bike_categories::findOrfail($id);
        if($bike_category){
            $cid=$id;
            $showcate = bike_categories::with(['Rbikes'=> function ($query){
                $query->with('Rimages');
            }])->get();
            return view('auser.showcategorydetails',compact('showcate','cid'));

        }
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
    public function edit($id)
    {
    //
    }
    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
    //
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