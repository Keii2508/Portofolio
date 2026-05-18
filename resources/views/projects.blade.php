@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="text-center mb-5">
        <h6 class="accent-red fw-bold mb-3">MY WORKS</h6>
        <h1 class="about-heading">Featured Projects</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            A collection of my work in software development, UI/UX design, and digital branding. Each project represents a challenge I've solved.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-img-container">
                    <img src="{{ asset('img/habitscore_pi.png') }}" alt="Habitscore">
                </div>
                <div class="project-body">
                    <p class="project-category accent-red">Web Development</p>
                    <h3 class="project-title">Habitscore - Tracker App</h3>
                    <p class="text-muted small mb-4">
                        A fullstack web application built with Laravel 11. Features secure auth, progress tracking algorithms, and live deployment on Railway.
                    </p>
                    <div class="mb-4">
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">MySQL</span>
                    </div>
                    <a href="{{ route('projects.habitscore') }}" class="btn-view-project">View Project <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-img-container">
                    <img src="{{ asset('img/tokyoji_bg.png') }}" alt="Tokyoji">
                </div>
                <div class="project-body">
                    <p class="project-category accent-red">UI/UX & Branding</p>
                    <h3 class="project-title">Tokyoji Visual Identity</h3>
                    <p class="text-muted small mb-4">
                        Crafting a minimalist and modern brand identity including logo design, color palette, and high-fidelity mobile UI prototypes.
                    </p>
                    <div class="mb-4">
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Illustrator</span>
                    </div>
                    <a href="{{ route('projects.tokyoji') }}" class="btn-view-project">View Prototype <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-img-container">
                    <img src="{{ asset('img/ayanamotor_bg.png') }}" alt="Ayana Motor IG Feed">
                </div>
                <div class="project-body">
                    <p class="project-category accent-red">Brand Design & Social Media</p>
                    <h3 class="project-title">Ayana Motor Branding</h3>
                    <p class="text-muted small mb-4">
                        Crafting a dynamic visual identity and an interactive Instagram post feed prototype for a motorcycle parts and accessories shop to boost digital engagement.
                    </p>
                    <div class="mb-4">
                        <span class="skill-tag">Brand Identity</span>
                        <span class="skill-tag">Social Media</span>
                    </div>
                    <a href="{{ route('projects.ayanamotor') }}" class="btn-view-project">View Details <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>

</div>

<div class="container mt-5 mb-5 pb-5">
    
    <div class="text-center mb-5">
        <p class="text-muted">A collection of my work as a BINUS Student...</p>
    </div>

    <div class="row g-4">
        </div>

</div>
@endsection