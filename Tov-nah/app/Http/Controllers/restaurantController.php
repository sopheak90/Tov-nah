<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RestaurantModel;
use App\Models\RBookingModel;



class restaurantController extends Controller
{
    //Display Restaurant in frontend
    public function DisplayRestaurant(){
        $data = RestaurantModel::orderBy('name','asc')->get();
        return view('frontend.restaurant', ['data' => $data ]);
    }

    //
    public function store(Request $request){
        $data = new RestaurantModel();
        $data->name = $request->input('name');   
        $data->location = $request->input('location');
        $data->amount_of_people = $request->input('amount_of_people');
        $data->price = $request->input('price');
        $data->description = $request->input('description');
        $data->type = $request->input('type');
        $data->image = $request->input('image');
        
        $data->save();
        return redirect('/listRestaurant');
     }


     //List Restaurant in backend
    public function listRestaurant(){
        $data = RestaurantModel::all();  
        return view('backend.listRestaurant', ['data' => $data ]); 
    }

    

    //Delete Restaurant in backend
    public function deleteRestaurant($id){
        $data = RestaurantModel::find($id);
        $data->delete();
        return redirect('/listRestaurant');
    }

    
    //Update Restaurant in backend
    public function showRestaurant($id){
        $data = RestaurantModel::find($id);
        return view('backend.updateRestaurant', ['data' => $data ]); 
    }
    


    public function editRestaurant(Request $req){
        $data = RestaurantModel::find($req->id);

        $data->name = $req->name;
        $data->location = $req->location;
        $data->amount_of_people = $req->amount_of_people;
        $data->price = $req->price;
        $data->description = $req->description;
        $data->type = $req->type;
        $data->image = $req->image;
        $data->save();

        return redirect('/listRestaurant');

    }

    public function detailRestaurant($id){
        $data = RestaurantModel::find($id);
        return view('frontend.detailRestaurant', ['data' => $data ]); 
    }

     // insert booking in to database
     public function RBooking(Request $request){
        $data = new RBookingModel();

        $data->restaurantId = $request->input('restaurantId');
        $data->restaurantName = $request->input('restaurantName');
        $data->name = $request->input('name');
        $data->phonenumber = $request->input('phonenumber');
        $data->email = $request->input('email');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->amount = $request->input('amount');
        $data->more = $request->input('more');
        $data->save();
        return redirect('/restaurant');
     }
    
    //list all restaurant booking
    public function listBooking(){
        $data = RBookingModel::all();  
        return view('backend.listRestaurantBooking', ['data' => $data ]); 
    }

    //Delete booking restaurant
    public function deleteBooking($id){
        $data = RBookingModel::find($id);
        $data->delete();
        return redirect('/listRestaurantBooking');
    }
    

}
