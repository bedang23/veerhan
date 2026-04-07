<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'current_website' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',
            'source' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = $request->userAgent();

        Contact::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
