<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\models\Listing;

class ListingController extends Controller
{ public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $listings = Listing::orderby('created_at','desc')->get();
        return view('index')->with('listings',$listings);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  
    {  
     
      return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $this->validate($request,[
     'name'=>'required',
     'address'=>'required',
     'bio'=>'required',
     'email'=>'required|email',
     'phone'=>'required',
     'website'=>'required'



    ]);

    $l =new Listing();
         $l->user_id=Auth::id();
     $l->name=$request->input('name');
     $l->address=$request->input('address');
     $l->email=$request->input('email');
     $l->phone=$request->input('phone');
     $l->website=$request->input('website');
     $l->bio=$request->input('bio');
     $l->save();
      return redirect()->to('/home')->with('success','add listing sucessfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  $l = Listing::find($id);
        return view('show')->with('listing', $l);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {$l=  Listing::find($id); 
     return view('edit')->with('listing' , $l);    

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
    {  $this->validate($request,[
     'name'=>'required',
     'address'=>'required',
     'bio'=>'required',
     'email'=>'required|email',
     'phone'=>'required',
     'website'=>'required'



    ]);

   $l= listing::find($id);
         $l->user_id=Auth::id();
     $l->name=$request->input('name');
     $l->address=$request->input('address');
     $l->email=$request->input('email');
     $l->phone=$request->input('phone');
     $l->website=$request->input('website');
     $l->bio=$request->input('bio');
     $l->save();
     return redirect()->to('/home')->with('success','edit list sucessfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  $l= listing::find($id);
        $l->delete();
        return redirect()->to('/home')->with('success', 'list deleted successfully');
        //
    }
}
