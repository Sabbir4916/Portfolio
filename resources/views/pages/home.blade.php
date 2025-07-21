@extends('layouts.app')
@section('title', 'Home')

@section('content')
<style>
  .home-section {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    color: #fff;
    text-align: center;
    padding: 50px 20px;
  }

  .home-content {
    max-width: 800px;
    background: rgba(255,255,255,0.05);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
  }

  .home-content h1 {
    font-size: 3rem;
    margin-bottom: 20px;
  }

  .home-content h1 span {
    color: #00e5ff;
  }

  .home-content p {
    font-size: 1.2rem;
    margin: 10px 0;
    line-height: 1.6;
  }

  .btn-primary {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 30px;
    background: #00e5ff;
    color: #000;
    border: none;
    border-radius: 50px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background: #fff;
    color: #000;
    transform: scale(1.05);
  }
</style>

<section class="home-section">
  <div class="home-content">
    <h1>Hello, I'm <span>Sabbir Ahmed</span></h1>
    <p>Passionate about <b>Data Analysis</b>, <b>Machine Learning</b>, and <b>Web Development</b>.</p>
    <p>Explore my projects and skills to see how I can help you grow your business or idea.</p>
    <p><strong>Open to collaborations, exciting projects, or just a friendly chat!</strong></p>
    <a href="{{ url('/projects') }}" class="btn-primary">See My Work</a>
  </div>
</section>
@endsection
