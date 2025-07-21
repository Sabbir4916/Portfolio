@extends('layouts.app')
@section('title', 'Education')
@section('content')
<div class="edu-wrapper">
  <div class="edu-header">
    <h2>My Educational Journey</h2>
  </div>

  <div class="timeline">
    <div class="edu-item">
      <h3>B.Sc in Computer Science & Engineering</h3>
      <span>Daffodil International University</span>
      <p>Final-year CSE student specializing in data analysis, machine learning, and web application development.</p>
    </div>

    <div class="edu-item">
      <h3>Higher Secondary Certificate (HSC)</h3>
      <span>Sylhet Govt. College, 2020</span>
      <p>Group: Science<br>Result: GPA 5.00</p>
    </div>

    <div class="edu-item">
      <h3>Secondary School Certificate (SSC)</h3>
      <span>Sylhet Govt. Pilot High School, 2018</span>
      <p>Group: Science<br>Result: GPA 5.00</p>
    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
  body {
    background-color: #edf3f9;
  }

  .edu-wrapper {
    max-width: 1000px;
    margin: 60px auto;
    padding: 20px;
  }

  .edu-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .edu-header h2 {
    font-size: 34px;
    color: #1e3a5f;
    border-bottom: 3px solid #00bcd4;
    display: inline-block;
    padding-bottom: 10px;
  }

  .timeline {
    position: relative;
    padding-left: 40px;
    margin-left: 20px;
    border-left: 3px dashed #00bcd4;
  }

  .edu-item {
    background: #fff;
    border-radius: 10px;
    padding: 25px 30px;
    margin-bottom: 30px;
    position: relative;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
  }

  .edu-item:hover {
    transform: translateX(5px);
  }

  .edu-item::before {
    content: '';
    position: absolute;
    top: 20px;
    left: -43px;
    width: 20px;
    height: 20px;
    background-color: #00bcd4;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 0 0 3px #00bcd4;
  }

  .edu-item h3 {
    font-size: 22px;
    margin: 0 0 8px;
    color: #0d47a1;
  }

  .edu-item span {
    display: block;
    font-size: 15px;
    color: #607d8b;
    margin-bottom: 10px;
    font-style: italic;
  }

  .edu-item p {
    font-size: 16px;
    color: #444;
    line-height: 1.6;
  }

  @media (max-width: 768px) {
    .timeline {
      padding-left: 20px;
      margin-left: 10px;
    }

    .edu-item {
      padding: 20px;
    }
  }
</style>
@endpush


