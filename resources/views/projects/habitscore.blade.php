@extends('layouts.app')

@section('content')
<div class="container mt-2 pt-5 mb-3">
    
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects') }}" class="text-muted text-decoration-none">Projects</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Habitscore</li>
        </ol>
    </nav>

    <div class="mb-5">
        <h1 class="display-4 fw-bold mb-3" style="font-family: var(--font-heading);">HABITSCORE: <span class="accent-red">TRACKER APP</span></h1>
        <p class="lead text-muted" style="max-width: 800px;">
            A full-stack habit-tracking ecosystem designed to help users maintain consistency through data visualization and gamified scores.
        </p>
    </div>

    <div class="row g-5">
        
        <div class="col-lg-8">
            <div class="rounded-4 overflow-hidden mb-5 shadow-sm" style="border: 1px solid #333;">
                <img src="{{ asset('img/habitscore_pi.png') }}" class="img-fluid w-100" alt="Habitscore Preview">
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-3 accent-red" style="font-family: var(--font-heading);">The Challenge</h3>
                <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                    Developing a scalable system that can calculate real-time consistency scores based on user input, while ensuring the UI remains simple and motivating. The backend needed to handle rapid habit logging without compromising performance.
                </p>
            </div>

            <div class="mb-5">
                <h3 class="fw-bold mb-3 accent-red" style="font-family: var(--font-heading);">The Solution</h3>
                <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                    I implemented a robust Laravel backend using Eloquent ORM to efficiently query and update user scores. The frontend was built with Bootstrap 5 to ensure a responsive, dark-mode first design that reduces eye strain. The entire application is deployed via an automated CI/CD pipeline from GitHub to Railway.
                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="bg-dark p-4 rounded-4 sticky-top" style="top: 100px; border: 1px solid #222;">
                <h5 class="mb-4 pb-3 border-bottom border-secondary" style="font-family: var(--font-heading);">Project Info</h5>
                
                <div class="mb-4">
                    <h6 class="text-muted small text-uppercase" style="letter-spacing: 1px;">Role</h6>
                    <p class="fw-semibold text-white mb-0">Fullstack Developer</p>
                </div>

                <div class="mb-4">
                    <h6 class="text-muted small text-uppercase" style="letter-spacing: 1px;">Tech Stack</h6>
                    <div class="mt-2">
                        <span class="skill-tag">Laravel 11</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Bootstrap 5</span>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="text-muted small text-uppercase" style="letter-spacing: 1px;">Deployment</h6>
                    <p class="fw-semibold text-white mb-0">Railway</p>
                </div>

                <div class="d-grid gap-3 mt-5">
                    <a href="https://www.youtube.com/watch?v=P1r2FYWPVgw" target="_blank" class="btn btn-custom-red">
                        <i class="bi bi-play-circle-fill me-2"></i> Watch Live Demo
                    </a>
                    <a href="https://github.com/Keii2508/Habitscore" target="_blank" class="btn btn-outline-light border-secondary">
                        <i class="bi bi-github me-2"></i> View Repository
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection