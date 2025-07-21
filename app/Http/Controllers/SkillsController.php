<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    // Show all skills
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    // Show form to create new skill
    public function create()
    {
        return view('skills.create');
    }

    // Store new skill
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:technical,soft',
            'level' => 'required|in:beginner,intermediate,expert',
            'logo' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'type', 'level']);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $path;
        }

        Skill::create($data);

        return redirect()->route('skills.index')->with('success', 'Skill added successfully!');
    }
}
