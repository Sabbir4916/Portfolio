@extends('layouts.app')
@section('title', 'Add New Skill')

@section('content')
<style>
  .form-container {
    max-width: 600px;
    margin: 40px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', sans-serif;
  }

  .form-container h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #0d47a1;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
  }

  .form-group input,
  .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
  }

  .form-group input[type="file"] {
    border: none;
  }

  .btn-submit {
    background: #1565c0;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .btn-submit:hover {
    background: #0d47a1;
  }

  .back-link {
    display: inline-block;
    margin-top: 20px;
    color: #1565c0;
    text-decoration: none;
  }
</style>

<div class="form-container">
  <h1>Add New Skill</h1>

  <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="name">Skill Name</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required>
      @error('name')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group">
      <label for="type">Type</label>
      <select name="type" id="type" required>
        <option value="">-- Select Type --</option>
        <option value="technical" {{ old('type') == 'technical' ? 'selected' : '' }}>Technical</option>
        <option value="soft" {{ old('type') == 'soft' ? 'selected' : '' }}>Soft</option>
      </select>
      @error('type')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group">
      <label for="level">Proficiency Level</label>
      <select name="level" id="level" required>
        <option value="">-- Select Level --</option>
        <option value="beginner" {{ old('level') == 'beginner' ? 'selected' : '' }}>Beginner</option>
        <option value="intermediate" {{ old('level') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
        <option value="expert" {{ old('level') == 'expert' ? 'selected' : '' }}>Expert</option>
      </select>
      @error('level')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group">
      <label for="logo">Skill Logo (optional)</label>
      <input type="file" name="logo" id="logo" accept="image/*">
      @error('logo')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <button type="submit" class="btn-submit">Add Skill</button>
  </form>

  <a href="{{ route('skills.index') }}" class="back-link">← Back to Skills</a>
</div>
@endsection
