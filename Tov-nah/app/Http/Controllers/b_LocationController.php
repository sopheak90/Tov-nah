<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\b_LocationModel;

class b_LocationController extends Controller
{
    public function store(Request $request){
        $location = new b_LocationModel();

        $location->name = $request->input('name');
        $location->khmerprice = $request->input('khmerprice');
        $location->foriegnprice = $request->input('foriegnprice');       
        $location->estimate = $request->input('estimate');       
        $location->description = $request->input('description'); 
        $location->image = $request->input('image');
        $location->save();
        return redirect('/listLocation');
     }



    public function DisplayLocation(){
        $data = b_LocationModel::orderBy('name','asc')->get();
        return view('frontend.location', ['data' => $data ]);
    }

    //List Thing To Do in backend
    public function listLocation(){
        $data = b_LocationModel::all();  
        return view('backend.listLocation', ['data' => $data ]); 
    }

    

    //Delete thing to do in backend
    public function deleteLocation($id){
        $data = b_LocationModel::find($id);
        $data->delete();
        return redirect('/listLocation');
    }

    //Update thing to do in backend
    public function showLocation($id){
        $data = b_LocationModel::find($id);
        return view('backend.updateLocation', ['data' => $data ]); 
    }
    


    public function editLocation(Request $req){

        $data = b_LocationModel::find($req->id);

        $data->name = $req->name;
        $data->khmerprice = $req->khmerprice;
        $data->foriegnprice = $req->foriegnprice;
        $data->estimate = $req->estimate;
        $data->description = $req->description;
        $data->image = $req->image;
        $data->save();

        return redirect('/listLocation');

    }

    //Show detail about location in frontend
    public function detailLocation($id){
        $data = b_LocationModel::find($id);
        return view('frontend.detailLocation', ['data' => $data ]); 
    }

}
