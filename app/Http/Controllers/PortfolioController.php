<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class PortfolioController extends Controller
{
    public function index() {
        return view('home');
    }

    public function experience() {
        return view('experience');
    }

    public function projects() {
        return view('projects');
    }

    public function contact() {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        // 1. Validasi inputan biar nggak kosong
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Kirim email ke alamat lu
        // Ganti email di bawah dengan email lu yang buat nerima pesan
        Mail::to('joseaustin0805@gmail.com')->send(new ContactMessage($validated));

        // 3. Balik lagi ke halaman contact dengan pesan sukses
        return back()->with('success', 'Thanks for reaching out! Your message has been sent.');
    }
    // app/Http/Controllers/PortfolioController.php
    public function habitscore() { return view('projects.habitscore'); }
    public function tokyoji() { return view('projects.tokyoji'); }
    public function ayanamotor() { return view('projects.ayanamotor'); }
}