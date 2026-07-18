<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    // Display all contact messages
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view(
            'contactMessages.index',
            compact('messages')
        );
    }

    // Delete contact message
    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);

        $message->delete();

        return redirect('/contact-messages')
            ->with(
                'success',
                'Message deleted successfully!'
            );
    }
}