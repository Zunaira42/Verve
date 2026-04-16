<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('admin.trainers.index', compact('trainers'));
    }
    public function create()
    {
        return view('admin.trainers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'speciality' => 'required',
            'certification' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = auth()->id();

        Trainer::create($data);
        return redirect()->route('admin.trainers.index')->with('success', 'Trainer added');
    }
    public function edit($id)
    {
        $trainer = Trainer::findorfail($id);
        return view('admin.trainers.edit', compact('trainer'));
    }
    public function update(Request $request, $id)
    {
        $trainer = Trainer::findorfail($id);
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'speciality' => 'required',
            'certification' => 'required',
        ]);
        $trainer->update([
            'name' => $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'experience' => $request->experience,
            'speciality' => $request->speciality,
            'certification' => $request->certification,
        ]);
        return redirect()->route('admin.trainers.index')
            ->with('success', 'contact updated successfully');
    }
}
