@extends('layouts.app')
@section('title', 'Create Project')

@section('content')
<style>
  .form-container {
    max-width: 700px;
    margin: 40px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
  }

  .form-group input, 
  .form-group textarea, 
  .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .btn-submit {
    background: #1976d2;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
  }
</style>

<div class="form-container">
  <h2>Create New Project</h2>

  <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label>Project Name</label>
      <input type="text" name="name" required>
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea name="description" rows="4" required></textarea>
    </div>

    <div class="form-group">
      <label>GitHub URL</label>
      <input type="url" name="github_url">
    </div>

    <div class="form-group">
      <label>Demo URL</label>
      <input type="url" name="demo_url">
    </div>

    <div class="form-group">
      <label>Images (Multiple)</label>
      <input type="file" name="images[]" multiple>
    </div>

    <div class="form-group">
      <label>Type</label>
      <select name="type" required>
        <option value="personal">Personal</option>
        <option value="client">Client</option>
        <option value="academic">Academic</option>
      </select>
    </div>

    <div class="form-group">
      <label>Reference</label>
      <input type="text" name="reference">
    </div>

    <div class="form-group">
      <label>Tools (Comma-separated)</label>
      <input type="text" name="tools[]" placeholder="Example: Laravel, Vue.js, MySQL">
    </div>

    <div class="form-group">
      <label>Keywords (Comma-separated)</label>
      <input type="text" name="keywords[]" placeholder="Example: ecommerce, dashboard">
    </div>

    <div class="form-group">
      <label>Status</label>
      <select name="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
        <option value="in-progress">In Progress</option>
      </select>
    </div>

    <button type="submit" class="btn-submit">Create Project</button>
  </form>
</div>
@endsection
