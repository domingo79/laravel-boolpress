<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Dotenv\Result\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('guest.welcome');
    }
    public function about()
    {
        return view('guest.adout');
    }
    public function contacts()
    {
        return view('guest.contacts');
    }

    /**
     * test di mail con validazione dati
     */
    public function sendContactsForm(Request $request)
    {
        $validateData = $request->validate([
            'full_name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);

        Mail::to('admin@test.com')->send(new ContactFormMail($validateData));

        return redirect()->back()->with('message', 'Success! 👍 Grazie per la tua email ti risponderemo presto 👍');
    }
}
