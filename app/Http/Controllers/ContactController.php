<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactFormMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function form()
    {
        return view('guest.contacts');
    }

    public function storeAndSend(Request $request)
    {
        $validateData = $request->validate([
            "full_name" => "required | min:5 | max: 75",
            "email" => "required | email",
            "message" => "required",
        ]);

        $contact = Contact::create($validateData);

        Mail::to('admin@admin.com')->send(new ContactFormMailable($contact));

        return redirect()
            ->back()
            ->with(
                'message',
                'Success! Grazie per la tua email, ti risponderemo il prima possibile'
            );
    }
}
