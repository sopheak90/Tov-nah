<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThingModel;


class thingController extends Controller
{
    public function store(Request $request){
        $thing = new ThingModel();

        $thing->name = $request->input('name');
        $thing->description = $request->input('description');
        $thing->image = $request->input('image');
        $thing->save();
        return redirect('/listThing');
     }

    //list all thing-to-do in frontend
    public function DisplayThing(){
        $data = ThingModel::orderBy('name','asc')->get(); 
        return view('frontend.thing', ['data' => $data ]); 
    }   


    //List Thing To Do in backend
    public function listThing(){
        $data1 = ThingModel::all();  
        return view('backend.listThing', ['data1' => $data1 ]); 
    }

    

    //Delete thing to do in backend
    public function deleteThing($id){
        $data1 = ThingModel::find($id);
        $data1->delete();
        return redirect('/listThing');
    }

    //Update thing to do in backend
    public function showThing($id){
        $data = ThingModel::find($id);
        return view('backend.updateThing', ['data' => $data ]); 
    }
    


    public function editThing(Request $req){

        $data = ThingModel::find($req->id);

        $data->name = $req->name;
        $data->description = $req->description;
        $data->image = $req->image;
        $data->save();

        return redirect('/listThing');

    }

        //Show detail about thing to do in frontend
        public function detailThing($id){
            $data = ThingModel::find($id);
            return view('frontend.detailThing', ['data' => $data ]); 
        }

}
