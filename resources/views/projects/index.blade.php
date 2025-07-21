@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<style>
  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1100px;
    margin: 40px auto;
  }

  .project-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    padding: 15px;
    text-align: center;
  }

  .project-card img {
    width: 100%;
    height: 140px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  .project-card h4 {
    margin-bottom: 5px;
  }

  .btn-primary {
    display: inline-block;
    margin-bottom: 20px;
    padding: 8px 15px;
    background: #1976d2;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
  }
</style>

<div class="container">
  <h2>Projects</h2>
  <a href="{{ route('projects.create') }}" class="btn-primary">+ Add New Project</a>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="projects-grid">
    @foreach($projects as $project)
      <div class="project-card">
        @if($project->images && count($project->images))
          <img src="{{ asset('storage/' . $project->images[0]) }}" alt="{{ $project->name }}">
        @endif
        <h4>{{ $project->name }}</h4>
        <p><strong>Type:</strong> {{ ucfirst($project->type) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
        <p>{{ Str::limit($project->description, 80) }}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
