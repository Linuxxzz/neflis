<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
            'phone' => 'nullable|string|max:20',
            'plan' => 'required|in:basic,standard,premium',
        ]);

        Subscriber::create($validatedData);

        return redirect()->route('home')->with('success', __('messages.subscription_success'));
    }

    public function changeLanguage($locale)
    {
        if (in_array($locale, ['en', 'es'])) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }
}
