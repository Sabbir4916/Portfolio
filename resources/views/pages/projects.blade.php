@extends('layouts.app')

@section('title', 'Projects')

@section('content')
  <style>
    .projects-section {
      padding: 60px 20px;
      text-align: center;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
    }

    .projects-section h1 {
      font-size: 42px;
      margin-bottom: 50px;
    }

    .projects-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      max-width: 1200px;
      margin: auto;
    }

    .project-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .project-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.3);
    }

    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .project-content {
      padding: 20px;
      text-align: left;
    }

    .project-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #1e3c72;
    }

    .project-description {
      font-size: 14px;
      color: #333;
      margin-bottom: 15px;
    }

    .project-buttons a {
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 8px;
      background-color: #1e3c72;
      color: #fff;
      font-size: 14px;
      margin-right: 8px;
      display: inline-block;
      transition: background 0.3s;
    }

    .project-buttons a:hover {
      background-color: #2a5298;
    }
  </style>

  <section class="projects-section">
    <h1>My Projects</h1>

    <div class="projects-container">

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1581090700227-1e7e84f4ab9b" alt="Budget Tracker App">
        <div class="project-content">
          <div class="project-title">Budget Tracker App</div>
          <div class="project-description">A web app built with React and Firebase to track personal expenses efficiently.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
            <a href="#">Live Demo</a>
          </div>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1591696205602-2f950c417cb9" alt="Weather Forecast API">
        <div class="project-content">
          <div class="project-title">Weather Forecast API</div>
          <div class="project-description">A Python Flask API providing real-time weather data using OpenWeatherMap API.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
          </div>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981d" alt="Portfolio Website">
        <div class="project-content">
          <div class="project-title">Personal Portfolio</div>
          <div class="project-description">My responsive portfolio built using Laravel and Tailwind CSS with dynamic content.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
            <a href="#">Live Site</a>
          </div>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1517430816045-df4b7de11d1d" alt="E-commerce App">
        <div class="project-content">
          <div class="project-title">E-commerce App</div>
          <div class="project-description">A complete MERN stack application for online shopping with payment gateway integration.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
            <a href="#">Live Demo</a>
          </div>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1581276879432-15a51d168635" alt="AI Chatbot">
        <div class="project-content">
          <div class="project-title">AI Chatbot</div>
          <div class="project-description">A machine learning based chatbot that can answer queries about healthcare information.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
