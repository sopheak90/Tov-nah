<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;
use App\Models\HBookingModel;


class hotelController extends Controller
{
    //Display Hotel in frontend
    public function DisplayHotel(){
        $data = HotelModel::orderBy('name','asc')->get();
        return view('frontend.hotel', ['data' => $data ]);
    }
     //insertHotel.blade.php
    public function insertHotel(){
        return view('backend.listHotel');
     }
 
    //
    public function store(Request $request){
        $data = new HotelModel();
        $data->name = $request->input('name');   
        $data->night = $request->input('night');
        $data->location = $request->input('location');
        $data->type = $request->input('type');
        $data->price = $request->input('price');
        $data->description = $request->input('description');
        $data->image = $request->input('image');
        $data->rating = $request->input('rating');
        $data->save();
        return  redirect('/listHotel');
     }


    //List Hotel in backend
    public function listHotel(){
        $data = HotelModel::all();  
        return view('backend.listHotel', ['data' => $data ]); 
    }

    

    //Delete Hotel in backend
    public function deleteHotel($id){
        $data = HotelModel::find($id);
        $data->delete();
        return redirect('/listHotel');
    }
    //Delete booking hotel
    public function deleteBooking($id)
    {
        $data = HBookingModel::find($id);
        $data->delete();
        return redirect('/listHotelBooking');
    }
    
    //Update Hotel in backend
    public function showHotel($id){
        $data = HotelModel::find($id);
        return view('backend.updateHotel', ['data' => $data ]); 
    }
    


    public function editHotel(Request $request){
        $data = HotelModel::find($request->id);

        $data->name = $request->name; 
        $data->night = $request->night;
        $data->location = $request->location;
        $data->type = $request->type;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->rating = $request->rating;
        $data->image = $request->image;

        $data->save();
        return redirect('/listHotel');

    }

    public function detailHotel($id){
        $data = HotelModel::find($id);
        return view('frontend.detailHotel', ['data' => $data ]); 
    }

    // insert booking in to database
    public function HBooking(Request $request){
        $data = new HBookingModel();

        $data->hotelId = $request->input('hotelId');
        $data->hotelName = $request->input('hotelName');
        $data->name = $request->input('name');
        $data->phonenumber = $request->input('phonenumber');
        $data->email = $request->input('email');
        $data->checkin = $request->input('checkin');
        $data->checkout = $request->input('checkout');
        $data->amount = $request->input('amount');
        $data->more = $request->input('more');
        $data->save();
        return redirect('/hotel');
    }
    
    //list all hotel booking
    public function listBooking(){
        $data = HBookingModel::all();  
        return view('backend.listHotelBooking', ['data' => $data ]); 
    }
    
}