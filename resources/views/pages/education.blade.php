@extends('layouts.app')
@section('title', 'Education')

@section('content')
<style>
  body {
    background: #f0f4f8;
  }

  .education-section {
    max-width: 720px;
    margin: 60px auto;
    background: #fff;
    padding: 50px 40px;
    border-radius: 14px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
  }

  .education-section h2 {
    text-align: center;
    font-size: 38px;
    margin-bottom: 40px;
    color: #1565c0;
    letter-spacing: 1.1px;
    font-weight: 700;
  }

  .education-item {
    border-left: 5px solid #1565c0;
    padding-left: 20px;
    margin-bottom: 30px;
  }

  .education-item h3 {
    font-size: 24px;
    margin-bottom: 6px;
    color: #0d47a1;
    font-weight: 600;
  }

  .education-item span {
    display: block;
    font-style: italic;
    color: #666;
    font-size: 16px;
    margin-bottom: 8px;
  }

  .education-item p {
    font-size: 16px;
    line-height: 1.6;
    color: #444;
  }
</style>

<section class="education-section">
  <h2>My Education</h2>

  <div class="education-item">
    <h3>B.Sc in Computer Science & Engineering</h3>
    <span>Daffodil International University</span>
    <p>Final year student focused on Data Analysis, Machine Learning, and Web Development.</p>
  </div>

  <div class="education-item">
    <h3>Higher Secondary Certificate (HSC)</h3>
    <span>Sylhet Govt. College</span>
    <p>Completed in 2020 in Science.<br>Result: GPA 5.00</p>
  </div>

  <div class="education-item">
    <h3>Secondary School Certificate (SSC)</h3>
    <span>Sylhet Govt. Pilot High School</span>
    <p>Completed in 2018 in Science.<br>Result: GPA 5.00</p>
  </div>

</section>
@endsection
