<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:5000',
        ], [
            'nom.required' => 'Le nom est requis.',
            'email.required' => 'L\'email est requis.',
            'email.email' => 'L\'email doit être valide.',
            'sujet.required' => 'Le sujet est requis.',
            'message.required' => 'Le message est requis.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
        ]);

        try {
            $message = ContactMessage::create($validated);

            Mail::to('macdylankacou2000@gmail.com')->send(new ContactMail($message));

            return back()->with('success', 'Votre message a été envoyé avec succès. Merci de nous avoir contacté !');
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email contact: ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
        }
    }
}
