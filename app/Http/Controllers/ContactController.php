<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    // Show contact page
    public function index()
    {
        return view('contact');
    }

    // Save Contact Form
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect('/contact')
            ->with('success', 'Your message has been sent successfully!');
    }

    // Admin Contact Messages
    public function adminMessages()
    {
        $messages = ContactMessage::latest()->get();

        return view('contact.index', compact('messages'));
    }

    // Delete Message
    public function destroy($id)
    {
        ContactMessage::findOrFail($id)->delete();

        return redirect('/contact-messages')
            ->with('success', 'Message Deleted Successfully');
    }
}