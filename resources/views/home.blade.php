@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="container position-relative mt-5 pt-5">
    <div class="row align-items-center position-relative z-1">
        
        <!-- Teks Kiri (Diubah jadi col-lg-6 biar ngga makan tempat terlalu lebar) -->
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
            <p class="hero-subtitle accent-red mb-3">Exploring Tech, Design & Data</p>
            <h1 class="hero-title">COMPUTER SCIENCE<br>STUDENT</h1>
            <p class="text-muted mt-4 pe-lg-4">
                I am an undergraduate Computer Science student at Binus University. I love exploring various fields in technology, from building interactive web applications and crafting intuitive UI/UX designs, to analyzing data-driven solutions.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-custom-red mt-4">
                <i class="bi bi-chevron-right me-1"></i> Let's Connect
            </a>
        </div>
        
        <!-- Foto Kanan & Rating Box -->
        <div class="col-lg-6 position-relative">
            <div class="hero-image-container">
                <!-- Hiasan Lingkaran Merah -->
                <div class="hero-red-circle"></div>
                
                <!-- Foto Lu (Pake PNG transparan ya!) -->
                <img src="{{ asset('img/foto_jose3.png') }}" alt="Jose" class="hero-photo">
                
                <!-- Rating Box digeser ke sini jadi absolute/melayang -->
                <div class="rating-reviews rating-reviews-hero">
                    <div class="text-center">
                        <p class="rating-score mb-0">3.3</p>
                        <div class="stars mb-1" style="font-size: 0.8rem;">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <small class="text-muted" style="font-size: 0.65rem;">Current GPA</small>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Social Icons Side Bar -->
    <div class="social-icons-side d-none d-lg-flex">
        <a href="https://instagram.com/joseaustin0825" class="social-icon-circle"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/jose-austin-590a32385" class="social-icon-circle"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/Keii2508" class="social-icon-circle"><i class="bi bi-github"></i></a>
    </div>
</div>

<!-- STATS SECTION -->
<div class="container stats-section">
    <div class="row justify-content-center text-center align-items-center">
        <!-- Stat 1 -->
        <div class="col-12 col-sm-6 col-lg mb-4 mb-lg-0 d-flex justify-content-center align-items-center stat-item gap-3">
            <div class="bg-white text-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; min-width: 50px;">
                <i class="bi bi-code-slash fs-4"></i>
            </div>
            <div class="text-start">
                <h4>03+</h4>
                <p>Core Projects</p>
            </div>
        </div>
        <!-- Stat 2 -->
        <div class="col-12 col-sm-6 col-lg mb-4 mb-lg-0 d-flex justify-content-center align-items-center stat-item gap-3">
            <div class="bg-white text-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; min-width: 50px;">
                <i class="bi bi-layers fs-4"></i>
            </div>
            <div class="text-start">
                <h4>05+</h4>
                <p>Tech Stacks</p>
            </div>
        </div>
        <!-- Stat 3 -->
        <div class="col-12 col-sm-6 col-lg mb-4 mb-lg-0 d-flex justify-content-center align-items-center stat-item gap-3">
            <div class="bg-white text-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; min-width: 50px;">
                <i class="bi bi-book fs-4"></i>
            </div>
            <div class="text-start">
                <h4>6th</h4>
                <p>Semester</p>
            </div>
        </div>
        <!-- Stat 4 -->
        <div class="col-12 col-sm-6 col-lg mb-4 mb-lg-0 d-flex justify-content-center align-items-center stat-item gap-3">
            <div class="bg-white text-dark rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; min-width: 50px;">
                <i class="bi bi-lightning-charge fs-4"></i>
            </div>
            <div class="text-start">
                <h4>100%</h4>
                <p>Eager to Learn</p>
            </div>
        </div>
    </div>
</div>

<!-- ABOUT SECTION -->
<div class="container">
    <div class="about-section row align-items-center">
        <!-- Teks Kiri -->
        <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0 text-center text-lg-start">
            <h6 class="accent-red fw-bold mb-3">About Me</h6>
            <h2 class="about-heading mb-4">Looking for a versatile intern? Let's build something great.</h2>
            <p class="text-muted mb-4" style="line-height: 1.8;">
                Hi, I'm Jose! As a Computer Science student, I blend technical programming skills with a strong sense of digital aesthetics. I enjoy working on diverse challenges—whether it's developing and deploying full-stack web apps like Habitscore, designing brand prototypes and UI/UX for businesses like Tokyoji and Ayana Motor, or diving into data structures.
            </p>
            
            <div class="row mb-5 check-list text-light justify-content-center justify-content-lg-start">
                <div class="col-md-6 col-10 mb-3"><span class="check-list-icon"><i class="bi bi-check"></i></span> Web Development</div>
                <div class="col-md-6 col-10 mb-3"><span class="check-list-icon"><i class="bi bi-check"></i></span> UI/UX & Prototyping</div>
                <div class="col-md-6 col-10 mb-3"><span class="check-list-icon"><i class="bi bi-check"></i></span> Laravel & Bootstrap</div>
                <div class="col-md-6 col-10 mb-3"><span class="check-list-icon"><i class="bi bi-check"></i></span> Data Analytics Interest</div>
            </div>

            <a href="{{ route('experience') }}" class="btn btn-custom-red">
                <i class="bi bi-chevron-right me-1"></i> See My Experience
            </a>
        </div>
        
        <!-- Gambar Kanan -->
        <div class="col-lg-6 position-relative ps-lg-4">
            <div class="internship-badge">
                <p>INTERNSHIP<br>READY</p>
                <div class="badge-line"></div>
            </div>

            <div class="about-image-wrapper">
                <img src="{{ asset('img/foto_jose.png') }}" alt="Profile" class="img-fluid">
                <div class="small-black-circle"></div>
            </div>
        </div>
    </div>
</div>
@endsection