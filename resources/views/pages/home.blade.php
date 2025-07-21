@extends('layouts.app')
@section('title', 'Home')

@section('content')
<style>
  :root {
    --primary-color: #0056d2;
    --accent-color: #00bcd4;
    --bg-light: #f3f6f9;
    --text-dark: #1a1a1a;
    --text-muted: #555;
  }

  .hero-section {
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 80px 20px;
    min-height: 90vh;
    font-family: 'Segoe UI', sans-serif;
  }

  .hero-container {
    background: #fff;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    max-width: 1100px;
    width: 100%;
    padding: 50px 40px;
    gap: 40px;
    animation: fadeIn 0.8s ease-in-out;
  }

  .hero-image {
    flex: 1 1 300px;
    text-align: center;
  }

  .hero-image img {
    width: 240px;
    height: 240px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid var(--primary-color);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
  }

  .hero-content {
    flex: 1 1 500px;
  }

  .hero-content h1 {
    font-size: 36px;
    color: var(--text-dark);
    margin-bottom: 16px;
    font-weight: 700;
  }

  .hero-content h1 span {
    color: var(--primary-color);
  }

  .hero-content p {
    font-size: 17px;
    color: var(--text-muted);
    margin-bottom: 14px;
    line-height: 1.6;
  }

  .hero-content p strong {
    color: var(--primary-color);
  }

  .btn-cta {
    margin-top: 20px;
    display: inline-block;
    padding: 12px 28px;
    background: var(--primary-color);
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    transition: background 0.3s ease, transform 0.2s ease;
  }

  .btn-cta:hover {
    background: #003f9e;
    transform: translateY(-2px);
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 768px) {
    .hero-container {
      flex-direction: column;
      text-align: center;
      padding: 40px 20px;
    }
  }
</style>

<section class="hero-section">
  <div class="hero-container">

    <!-- Profile Image -->
    <div class="hero-image">
      <img src="{{ asset('images/profile.jpg') }}" alt="Sabbir Ahmed Photo">
    </div>

    <!-- Intro Content -->
    <div class="hero-content">
      <h1>Hello, I'm <span>Sabbir Ahmed</span></h1>
      <p>I specialize in <strong>Data Analysis</strong>, <strong>Machine Learning</strong>, and <strong>Full-Stack Web Development</strong>. I enjoy solving real-world problems with efficient, elegant digital solutions.</p>
      <p>Feel free to explore my portfolio and connect for collaborations or exciting opportunities!</p>
      <a href="{{ url('/projects') }}" class="btn-cta">View My Work</a>
    </div>

  </div>
</section>
@endsection
