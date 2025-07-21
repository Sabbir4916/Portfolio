@extends('layouts.app')
@section('title', 'Resume')

@section('content')
<section class="resume-wrapper">
    <h3 class="resume-section-title">Work Experience</h3>
    <ul class="resume-list">
      <li>
        <div class="position">Data Analyst</div>
        <div class="company">Samsung</div>
        <div class="duration">Jan 2022 - Present</div>
        <div class="desc">
          Analyzing data trends, generating actionable insights, and collaborating with cross-functional teams to improve business performance.
        </div>
      </li>
      <li>
        <div class="position">Web Developer</div>
        <div class="company">Walton</div>
        <div class="duration">Jul 2020 - Dec 2021</div>
        <div class="desc">
          Developed and maintained dynamic websites and applications using Laravel, PHP, and JavaScript frameworks.
        </div>
      </li>
      <li>
        <div class="position">Sales Executive</div>
        <div class="company">Swapno</div>
        <div class="duration">Jan 2019 - Jun 2020</div>
        <div class="desc">
          Managed client relationships, handled product demonstrations, and exceeded monthly sales targets consistently.
        </div>
      </li>
    </ul>
  </div>
</section>
@endsection
<style>
  body {
    background: #fefefe;
    font-family: 'Roboto', sans-serif;
  }

  .resume-wrapper {
    max-width: 900px;
    margin: 50px auto;
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 20px;
    border: 1px solid #e0e0e0;
    box-shadow: 4px 6px 18px rgba(0, 0, 0, 0.07);
  }

  .resume-wrapper h2 {
    font-size: 36px;
    color: #004d40;
    text-align: center;
    margin-bottom: 35px;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .resume-section-title {
    color: #00695c;
    border-left: 6px solid #004d40;
    padding-left: 15px;
    font-size: 22px;
    font-weight: 600;
    margin: 30px 0 20px;
  }

  .resume-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .resume-list li {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px dashed #ccc;
  }

  .resume-list li:last-child {
    border-bottom: none;
  }

  .position {
    font-size: 18px;
    color: #1b5e20;
    font-weight: 600;
  }

  .company {
    font-style: italic;
    font-size: 16px;
    color: #555;
    margin-top: 4px;
  }

  .duration {
    font-size: 14px;
    color: #888;
    margin-top: 2px;
  }

  .desc {
    margin-top: 8px;
    font-size: 15px;
    color: #444;
    line-height: 1.6;
  }

  .cv-button {
    text-align: center;
    margin-top: 40px;
  }

  .cv-button a {
    padding: 12px 30px;
    background-color: #00796b;
    color: #fff;
    font-weight: bold;
    text-decoration: none;
    border-radius: 30px;
    transition: background 0.3s ease;
    display: inline-block;
  }

  .cv-button a:hover {
    background-color: #004d40;
  }
</style>


