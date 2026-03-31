<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_num' => 'required',
            'subject' => 'required|string',
            'message' => 'required',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'subject'      => $request->subject,
            'message' => $request->message,
        ]);
        // return back()->with('success', 'save contact');
        return response()->json(['message' => 'Your message has been sent successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
