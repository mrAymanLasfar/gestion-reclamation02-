<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // التحقق من صحة البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // تسجيل الرسالة فـ قاعدة البيانات
        Contact::create($validated);

        return redirect('/contact')->with('success', 'Votre message a été envoyé avec succès!');
    }
}
