<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactModel;


class contactController extends Controller
{
    public function index(Request $request){

        $request->input();
        $contact = new contactModel;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
       
        $contact->save();
        return view('frontend.contact')->with('contact', $contact);


     }
}