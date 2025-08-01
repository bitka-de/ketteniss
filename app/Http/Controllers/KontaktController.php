<?php

namespace App\Http\Controllers;

use App\Mail\KontaktformularMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontaktController extends Controller
{
    public function absenden(Request $request)
    {
        $validated = $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'email'],
            'telefon'   => ['nullable', 'string', 'max:50'],
            'nachricht' => ['required', 'string', 'max:2000'],
        ]);

        // Sende Mail an die hinterlegte Adresse
        Mail::to(config('mail.from.address'))->send(new KontaktformularMail($validated));

        // Erfolgsmeldung und Redirect
        return redirect()
            ->route('kontakt')
            ->with('success', 'Vielen Dank für Ihre Nachricht! Wir melden uns in Kürze.');
    }
}
