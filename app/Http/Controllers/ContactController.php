<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);

        $successMessage = app()->getLocale() === 'ar' 
        ? 'تم إرسال رسالتك بنجاح!'
        : 'Your message has been sent successfully!';

    return redirect()->back()->with('success', $successMessage);
    }//
}
