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
            'form_name'=> $request->form_name,
            'form_email'=> $request->form_email,
            'form_message'=> $request->form_message

        ]);

        if ($value)
        {
            return Redirect::back()->with('message','Operation Successful !');

        }

    }

}
