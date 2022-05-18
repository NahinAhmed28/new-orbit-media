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




        $this->validate($request, [
            'form_first_name' => 'required|string',
            'form_last_name' => 'required|string',
            'form_email' => 'required|string|email',
            'form_phone' => 'required|numeric ',
            'form_message' => 'required|string|max:25555',
        ]);

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
        else{
            return Redirect::back()->withErrors(['msg' => 'Message Send failed !']);
        }

    }

}
