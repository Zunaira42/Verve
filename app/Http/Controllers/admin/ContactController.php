<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }
    public function create()
    {
        return view('admin.contacts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_num' => 'required',
            'subject' => 'nullable',
            'message' => 'required',
        ]);
        Contact::create($request->all());
        return redirect()->route('admin.contacts.index')->with('success', 'Contact create');
    }
    public function edit($id)
    {
        $contact = Contact::findorfail($id);
        return view('admin.contacts.edit', Compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::findorfail($id);
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone_num' => 'required',
            'subject' => 'nullable',
            'message' => 'required',
        ]);
        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->route('admin.contacts.index')
            ->with('success', 'contact updated successfully');
    }

}
