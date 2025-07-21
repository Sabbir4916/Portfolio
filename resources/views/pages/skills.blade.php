@extends('layouts.app')
@section('title', 'Skills')

@section('content')
<style>
  .skills-section {
    padding: 80px 20px;
    background: linear-gradient(135deg, #1f1c2c, #928dab);
    text-align: center;
    color: #fff;
  }

  .skills-section h2 {
    font-size: 36px;
    margin-bottom: 40px;
  }

  .skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
    max-width: 900px;
    margin: auto;
  }

  .skill-item {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 12px;
    transition: transform 0.3s, background 0.3s;
    font-weight: 500;
    font-size: 16px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }

  .skill-item:hover {
    transform: translateY(-8px);
    background: rgba(0,188,212,0.2);
  }

  .skill-icon {
    font-size: 24px;
    display: block;
    margin-bottom: 10px;
  }
</style>

<section class="skills-section">
  <h2>My Skills</h2>
  <div class="skills-grid">
    <div class="skill-item"><span class="skill-icon">🌐</span> HTML / CSS / JavaScript</div>
    <div class="skill-item"><span class="skill-icon">⚙️</span> PHP / Laravel</div>
    <div class="skill-item"><span class="skill-icon">🗄️</span> MySQL / Database Design</div>
    <div class="skill-item"><span class="skill-icon">📱</span> Flutter (Mobile Apps)</div>
    <div class="skill-item"><span class="skill-icon">🤖</span> Machine Learning (Python)</div>
    <div class="skill-item"><span class="skill-icon">💻</span> C / C++ Programming</div>
    <div class="skill-item"><span class="skill-icon">📊</span> Data Analysis (Pandas, NumPy)</div>
    <div class="skill-item"><span class="skill-icon">☁️</span> RESTful APIs</div>
    <div class="skill-item"><span class="skill-icon">🔧</span> Git / GitHub</div>
    <div class="skill-item"><span class="skill-icon">🎨</span> UI/UX Design (Figma)</div>
    <div class="skill-item"><span class="skill-icon">📈</span> Power BI / Data Visualization</div>
    <div class="skill-item"><span class="skill-icon">🔒</span> Basic Cybersecurity</div>
  </div>
</section>
@endsection
