<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function edit(Request $request ,$id)
    {
        $users = User::findorFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->email = $request->input('Email');
        $users->roll = $request->input('UserRoll');
        $users->phone = $request->input('Phone');
        $users->update();

        return redirect('/dataUser')->with('success','Your Date is Update');
    }
    public function delete(Request $request, $id)
    {
        $users = User::findorFail($id);
        $users->delete();

        return redirect('/dataUser')->with('success', 'Your Date is Delete');
    }
    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password =  Hash::make($request->input('password'));
        $user->roll = 'admin';
        $user->save();
        return redirect('/dataUser')->with('success', 'Your Date is create');
    }
    public function profiled(Request $request, $id)
    {
        $user = User::findorFail($id);
        return view('admin.Profile')->with('users', $user);
    }
    public function profile(Request $request, $id)
    {
        $user = User::findorFail($id);
        return view('frontend.profile')->with('users', $user);
    }
}
