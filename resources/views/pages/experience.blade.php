@extends('layouts.app')
@section('title', 'Resume')

@section('content')
<style>
  body {
    background: #eef2f7;
  }

  .resume-section {
    background: #fff;
    max-width: 850px;
    margin: 60px auto;
    padding: 50px 40px;
    border-radius: 15px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
  }

  .resume-section h2 {
    font-size: 38px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 40px;
    color: #1a237e;
    letter-spacing: 1.2px;
  }

  .section-title {
    font-size: 26px;
    font-weight: 600;
    border-left: 5px solid #1a237e;
    padding-left: 15px;
    margin-bottom: 25px;
    color: #1a237e;
  }

  ul.education-list, ul.experience-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  ul.education-list li,
  ul.experience-list li {
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 1px solid #ddd;
  }

  ul.education-list li:last-child,
  ul.experience-list li:last-child {
    border-bottom: none;
  }

  .degree, .job-title {
    font-size: 18px;
    font-weight: 700;
    color: #0d47a1;
  }

  .institution, .company {
    font-size: 16px;
    color: #555;
    font-style: italic;
    margin-top: 4px;
  }

  .dates {
    font-size: 14px;
    color: #999;
    margin-top: 3px;
  }

  .description {
    margin-top: 10px;
    font-size: 15px;
    color: #444;
    line-height: 1.5;
  }

  .btn-download {
    display: block;
    width: max-content;
    margin: 35px auto 0;
    padding: 14px 40px;
    background-color: #1a237e;
    color: white;
    text-decoration: none;
    font-weight: 600;
    border-radius: 50px;
    box-shadow: 0 6px 15px rgba(26, 35, 126, 0.3);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .btn-download:hover {
    background-color: #3949ab;
    box-shadow: 0 8px 20px rgba(57, 73, 171, 0.5);
    color: #fff;
  }
</style>

<section class="resume-section">
  <h2>My Resume</h2>
  <a href="{{ asset('resume.pdf') }}" download class="btn-download">Download CV</a>
  <div>
    <h3 class="section-title">Work Experience</h3>
    <ul class="experience-list">
      <li>
        <div class="job-title">Data Analyst</div>
        <div class="company">Samsung</div>
        <div class="dates">Jan 2022 - Present</div>
        <div class="description">
          Analyzing data trends, generating actionable insights, and collaborating with cross-functional teams to improve business performance.
        </div>
      </li>
      <li>
        <div class="job-title">Web Developer</div>
        <div class="company">Walton</div>
        <div class="dates">Jul 2020 - Dec 2021</div>
        <div class="description">
          Developed and maintained dynamic websites and applications using Laravel, PHP, and JavaScript frameworks.
        </div>
      </li>
      <li>
        <div class="job-title">Sales Executive</div>
        <div class="company">Swapno</div>
        <div class="dates">Jan 2019 - Jun 2020</div>
        <div class="description">
          Managed client relationships, handled product demonstrations, and exceeded monthly sales targets consistently.
        </div>
      </li>
    </ul>
  </div>
</section>
@endsection
