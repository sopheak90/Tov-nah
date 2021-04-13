<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail; 
use App\Mail\SendMail;

class MailController extends Controller
{
    public function data()
    {
        $users = Mail::all();
        return view('admin.contact')->with('users', $users);
    }
    
    public function send(Request $request)
    {
        $mail = new Mail;
        $mail->name = $request->input('name');
        $mail->email = $request->input('email');
        $mail->message = $request->input('message');
        $mail->save();

         $data = [
          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->message
        ];

        \Mail::to('tov.nah.travel@gmail.com')->send(new SendMail($data));
        
        return redirect('contact')->with('success', 'Your message has been sent');
    }
}
