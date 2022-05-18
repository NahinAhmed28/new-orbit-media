<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function store(Request $request)
    {
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
//            return Redirect::back()->with('message','Message Send !');
            return Redirect::back()->withErrors(['msg' => 'Message Send !']);
        }

    }

}
