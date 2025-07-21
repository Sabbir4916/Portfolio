@extends('layouts.app')
@section('title', 'Skills')

@section('content')
<style>
  .skills-container {
    max-width: 900px;
    margin: 40px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', sans-serif;
  }

  .skills-container h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #0d47a1;
  }

  .skills-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
  }

  .skill-card {
    background: #f5f7fa;
    border-left: 5px solid #0d47a1;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
  }

  .skill-card img {
    width: 40px;
    height: 40px;
    object-fit: contain;
    margin-bottom: 10px;
  }

  .skill-card h4 {
    margin: 5px 0;
    color: #333;
    font-size: 18px;
  }

  .skill-meta {
    font-size: 14px;
    color: #555;
  }

  .add-btn {
    display: inline-block;
    margin: 20px 0;
    padding: 10px 20px;
    background: #1565c0;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s;
  }

  .add-btn:hover {
    background: #0d47a1;
  }
</style>

<div class="skills-container">
  <h1>My Skills</h1>

  <a href="{{ route('skills.create') }}" class="add-btn">+ Add New Skill</a>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @if($skills->count())
    <div class="skills-list">
      @foreach($skills as $skill)
        <div class="skill-card">
          @if($skill->logo)
            <img src="{{ asset('storage/' . $skill->logo) }}" alt="{{ $skill->name }}">
          @endif
          <h4>{{ ucfirst($skill->name) }}</h4>
          <div class="skill-meta">{{ ucfirst($skill->type) }} | {{ ucfirst($skill->level) }}</div>
        </div>
      @endforeach
    </div>
  @else
    <p>No skills found. Click "Add New Skill" to create one.</p>
  @endif
</div>
@endsection
