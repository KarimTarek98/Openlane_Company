<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Traits\Notification;

class ContactController extends Controller
{
    use Notification;

    public function contactPage()
    {
        return view('app.contact.contact_page');
    }

    public function sendMessage(StoreMessage $request)
    {
        $message = Contact::create([
            'username' => $request->username,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone_number' => $request->phone_number,
            'message' => $request->message,

        ]);

        if ($message)
        {
            return $this->notification('Thank You for your feedback', 'success', 'contact');
        }
        else
        {
            return $this->notification('Your message is not sent, try again later', 'error', 'contact');
        }
    }

    public function feedbackMsg()
    {
        $messages = Contact::latest()->get();

        return view('admin.feedback.all_messages', compact('messages'));
    }

    public function deleteMsg($id)
    {
        $msgToDelete = Contact::findOrFail($id);

        $msgToDelete->delete();

        return $this->notification('Message Deleted', 'error', 'feedback.messages');
    }

}
