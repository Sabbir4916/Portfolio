<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'demo_url' => 'nullable|url',
            'images.*' => 'nullable|image|max:2048',
            'type' => 'required|in:personal,client,academic',
            'reference' => 'nullable|string|max:255',
            'tools' => 'required|array',
            'keywords' => 'nullable|array',
            'status' => 'required|in:active,inactive,in-progress',
        ]);

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('projects', 'public');
            }
        }

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'github_url' => $request->github_url,
            'demo_url' => $request->demo_url,
            'images' => $images,
            'type' => $request->type,
            'reference' => $request->reference,
            'tools' => $request->tools,
            'keywords' => $request->keywords,
            'status' => $request->status,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project added successfully!');
    }
}
