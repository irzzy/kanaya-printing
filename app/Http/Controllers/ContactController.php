<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::raw("Pesan dari: {$validated['name']} ({$validated['email']})\n\n{$validated['message']}", function ($mail) use ($validated) {
            $mail->to('your-email@domain.com')
                 ->subject('Pesan Baru dari Website');
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
