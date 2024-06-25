<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Crypt;
use App\Models\User;
use Session;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('restaurant.home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("restaurant.create");

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

               $info=[
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
        ];


    Restaurant::create($info);
   return redirect('/list')->with('status','Restaurent Submited Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(restaurant $restaurant,$id)
    {
        //
        $data= restaurant::find($id);
        return view('restaurant.edit',['data'=>$data]);
        // return view('edit',['data'=>$data]);
        // return restaurant::find($id); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurant $restaurant)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     // Add other validation rules as necessary
        // ]);
        //
        // $restaurant->restaurant::find($request->id);
        $restaurant->name=$request->name;
        $restaurant->email=$request->email;
        $$restaurant->address=$request->address;
        $$restaurant->save();
        return redirect('/list')->with('status','Data Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(restaurant $restaurant,$id )
    {
        //
        return Restaurant::find($id)->delete();
        // return $id;
        // $restaurant->delete();
        // return redirect('/list')->with('status','Data Deleted Successfully');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $data= restaurant::all();
        return view('restaurant.list',compact('data'));
    }

function register(Request $request)
{
    // echo Crypt::encrypt('123@abc');
    // return $request->input();
    $user= new user;
    $user->name=$request->input('name');
    $user->email=$request->input('email');
    $user->password=Crypt::encrypt($request->input('password'));
    $user->contact=$request->input('contact');
    $user->save();
    $request->session()->put('user',$request->input('name'));
    return redirect('/restaurant');
}





}
