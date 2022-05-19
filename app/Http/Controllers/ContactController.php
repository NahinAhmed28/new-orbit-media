<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ContactController extends Controller
{
    public function store(Request $request)
    {

         $request->validate([
            'form_first_name' => 'required|string',
            'form_last_name' => 'required|string',
            'form_email' => 'required|string|email',
            'form_phone' => 'required ',
            'form_message' => 'required',
        ]);

//        dd($request->all());


        $value= Contact::create([
            'form_first_name'=> $request->form_first_name,
            'form_last_name'=> $request->form_last_name,
            'form_email'=> $request->form_email,
            'form_phone'=> $request->form_phone,
            'form_message'=> $request->form_message


        ]);

        if ($value)
        {
            return Redirect::back()->with('message','We have recieved your message, We will get back to you soon!');
//            return Redirect::back()->withErrors(['msg' => 'Message Send !']);
        }


    }

}
