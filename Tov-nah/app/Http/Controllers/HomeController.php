<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelModel;
use App\Models\RestaurantModel;
use App\Models\b_LocationModel;
use App\Models\ThingModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //List Hotel in backend
    public function displayHome(){
        $data = HotelModel::all();  
        $data1 = RestaurantModel::all();
        $data2 = b_LocationModel::all();
        $data3 = ThingModel::all();
        return view('frontend.home', ['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3 ]); 
    }
}
