@extends('layouts.app')
@section('title', 'About Me')
@section('content')
<section class="about-wrapper">
  <div class="profile-card">
    <img src="{{ asset('images/profile.jpg') }}" alt="Sabbir Ahmed">
    <h3>Sabbir Ahmed</h3>
    <span>Final Year CSE Student</span>
  </div>

  <div class="about-description">
    <h2>About Me</h2>
    <p>I'm a final-year student of Computer Science and Engineering at Daffodil International University. I’m passionate about creating practical digital solutions and enhancing user experiences across platforms.</p>
    <p>My work focuses on blending data analysis, web development, and intelligent systems to solve real-world problems. Whether it's crafting clean, efficient web apps or exploring insights through data, I approach every task with creativity and attention to detail.</p>
    <p>I'm committed to continuous learning and staying ahead in the fast-evolving tech space. My goal is to contribute meaningfully in teams where technology meets impact.</p>
  </div>
</section>
@endsection

@push('styles')
<style>
  .about-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    padding: 60px 20px;
    background: #eaf0f6;
  }

  .profile-card {
    flex: 1 1 300px;
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    text-align: center;
    transition: transform 0.3s ease;
  }

  .profile-card:hover {
    transform: translateY(-5px);
  }

  .profile-card img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 12px;
    border: 4px solid #00bcd4;
    margin-bottom: 20px;
  }

  .profile-card h3 {
    font-size: 22px;
    margin: 0;
    color: #1d3557;
  }

  .profile-card span {
    display: block;
    color: #607d8b;
    font-size: 14px;
    margin-top: 6px;
  }

  .about-description {
    flex: 2 1 400px;
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  }

  .about-description h2 {
    font-size: 28px;
    color: #0d47a1;
    margin-bottom: 20px;
    border-bottom: 2px solid #00bcd4;
    display: inline-block;
    padding-bottom: 5px;
  }

  .about-description p {
    font-size: 16px;
    color: #333;
    line-height: 1.7;
    margin-bottom: 16px;
    text-align: left;
  }

  @media (max-width: 768px) {
    .about-wrapper {
      flex-direction: column;
      padding: 40px 15px;
    }

    .about-description h2 {
      font-size: 24px;
    }

    .profile-card img {
      width: 120px;
      height: 120px;
    }
  }
</style>
@endpush

