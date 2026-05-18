@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 mb-5">
    
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects') }}" class="text-muted text-decoration-none">Projects</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Tokyoji Case Study</li>
        </ol>
    </nav>

    <div class="tokyoji-hero px-4 px-md-5">
        <div class="japan-sun"></div>
        <div class="tokyo-skyline"></div>
        
        <div class="hero-content row align-items-center">
            <div class="col-lg-7">
                <h6 class="accent-red fw-bold mb-3" style="letter-spacing: 3px;">VISUAL IDENTITY & BRANDING</h6>
                <h1 class="display-3 fw-bold mb-4" style="font-family: var(--font-heading); line-height: 1.1;">TOKYOJI <br><span class="text-white">東京寺</span></h1>
                <p class="lead text-muted mb-4" style="max-width: 600px;">
                    A conceptual streetwear label that merges the raw energy of urban Tokyo with the timeless principles of Japanese minimalism. 
                </p>
                <div class="d-flex gap-3">
                    <span class="skill-tag">Brand Design</span>
                    <span class="skill-tag">Streetwear</span>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-end">
                <div class="bg-black d-inline-flex align-items-center justify-content-center rounded-circle border border-danger shadow-lg" style="width: 250px; height: 250px; padding: 5px;">
                    
                    <img src="{{ asset('img/tokyoji-logo.png') }}" alt="Tokyoji Logo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5 mt-4">
        
        <div class="col-lg-8">

            <section class="mb-5">
                <h3 class="fw-bold mb-4 accent-red" style="font-family: var(--font-heading);">01. The Philosophy</h3>
                <p class="text-muted fs-5 mb-4" style="line-height: 1.8;">
                    Nama <strong>Tokyoji (東京寺)</strong> secara harfiah berarti "Kuil Tokyo". Brand ini diciptakan untuk merepresentasikan gaya hidup urban yang cepat namun tetap menjunjung tinggi kedisiplinan dan kesederhanaan. 
                </p>
                <p class="text-muted fs-5" style="line-height: 1.8;">
                    Inspirasi utama datang dari konsep <em>"Ma"</em> (間) — yaitu ruang kosong atau jeda. Dalam desain ini, saya meminimalkan elemen dekoratif yang tidak perlu, membiarkan tipografi yang kuat dan transisi palet warna <em>deep maroon</em> hingga <em>tokyo red</em> menjadi pusat perhatian visualnya.
                </p>
            </section>

            <section class="mb-5">
                <h3 class="fw-bold mb-4 accent-red" style="font-family: var(--font-heading);">02. Brand Assets</h3>
                
                <div class="row g-3">
                    
                    <div class="col-xl-7 col-lg-12">
                        <div class="p-4 rounded-4 bg-dark border border-secondary h-100 w-100 d-flex flex-column justify-content-center">
                            <h6 class="text-white mb-4 small fw-bold text-uppercase" style="letter-spacing: 1px;">Color Palette</h6>
                            
                            <div class="d-flex flex-wrap gap-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="rounded-circle shadow-sm border border-secondary mb-2" style="width: 48px; height: 48px; background: #44151d;" title="Deep Maroon"></div>
                                    <small class="text-muted font-monospace text-uppercase" style="font-size: 0.7rem;">#44151D</small>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="rounded-circle shadow-sm border border-secondary mb-2" style="width: 48px; height: 48px; background: #802833;" title="Muted Crimson"></div>
                                    <small class="text-muted font-monospace text-uppercase" style="font-size: 0.7rem;">#802833</small>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="rounded-circle shadow-sm mb-2" style="width: 48px; height: 48px; background: #c6213e; border: 1px solid #c6213e;" title="Tokyo Red"></div>
                                    <small class="text-muted font-monospace text-uppercase" style="font-size: 0.7rem;">#C6213E</small>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="rounded-circle shadow-sm border border-secondary mb-2" style="width: 48px; height: 48px; background: #bc9ba1;" title="Dusty Rose"></div>
                                    <small class="text-muted font-monospace text-uppercase" style="font-size: 0.7rem;">#BC9BA1</small>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="rounded-circle shadow-sm border border-secondary mb-2" style="width: 48px; height: 48px; background: #fefefe;" title="Pure White"></div>
                                    <small class="text-muted font-monospace text-uppercase" style="font-size: 0.7rem;">#FEFEFE</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

       

            <section class="mb-5">
                
                <h3 class="fw-bold mb-4 accent-red" style="font-family: var(--font-heading);">03. Apparel Mockups</h3>
                
                <div id="mockupCarousel" class="carousel slide carousel-fade rounded-4 overflow-hidden border border-secondary shadow-lg" data-bs-ride="carousel">
                    
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#mockupCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#mockupCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#mockupCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#mockupCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#mockupCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#mockupCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active d-flex justify-content-center" data-bs-interval="3000">
                            <img src="{{ asset('img/baju.png') }}" class="img-fluid" style="height: 550px;" alt="Mockup 1">
                            <div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-pill py-1 px-3 mb-4 mx-auto" style="width: fit-content;">
                                <p class="small m-0">T-Shirt - Red Edition</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center" data-bs-interval="3000">
                            <img src="{{ asset('img/baju2.png') }}" class="img-fluid" style="height: 550px;" alt="Mockup 2">
                            <div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-pill py-1 px-3 mb-4 mx-auto" style="width: fit-content;">
                                <p class="small m-0">T-Shirt - Black Edition</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center" data-bs-interval="3000">
                            <img src="{{ asset('img/celana.png') }}" class="img-fluid" style="height: 550px;" alt="Mockup 3">
                            <div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-pill py-1 px-3 mb-4 mx-auto" style="width: fit-content;">
                                <p class="small m-0">Pants - Red Edition</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center" data-bs-interval="3000">
                            <img src="{{ asset('img/celana2.png') }}" class="img-fluid" style="height: 550px;" alt="Mockup 4">
                            <div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-pill py-1 px-3 mb-4 mx-auto" style="width: fit-content;">
                                <p class="small m-0">Pants - Black Edition</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center" data-bs-interval="3000">
                            <img src="{{ asset('img/topi.png') }}" class="img-fluid" style="height: 550px;" alt="Mockup 5">
                            <div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-pill py-1 px-3 mb-4 mx-auto" style="width: fit-content;">
                                <p class="small m-0">Hat - Red Edition</p>
                            </div>
                        </div>
                        <div class="carousel-item d-flex justify-content-center" data-bs-interval="3000">
                            <img src="{{ asset('img/topi2.png') }}" class="img-fluid" style="height: 550px;" alt="Mockup 6">
                            <div class="carousel-caption d-none d-md-block bg-black bg-opacity-50 rounded-pill py-1 px-3 mb-4 mx-auto" style="width: fit-content;">
                                <p class="small m-0">Hat - Black Edition</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#mockupCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon p-3 bg-dark bg-opacity-25 rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mockupCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon p-3 bg-dark bg-opacity-25 rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">
                <div class="bg-dark p-4 rounded-4 border border-secondary shadow-sm">
                    <h5 class="mb-4 text-white fw-bold" style="font-family: var(--font-heading);">Project Overview</h5>
                    
                    <div class="mb-4">
                        <label class="text-muted small text-uppercase fw-bold mb-1 d-block" style="letter-spacing: 1px;">Deliverables</label>
                        <ul class="list-unstyled text-white small">
                            <li class="mb-1"><i class="bi bi-check2 accent-red me-2"></i> Logo Design</li>
                            <li class="mb-1"><i class="bi bi-check2 accent-red me-2"></i> Brand Guidelines</li>
                            <li class="mb-1"><i class="bi bi-check2 accent-red me-2"></i> Social Media Feed</li>
                            <li class="mb-1"><i class="bi bi-check2 accent-red me-2"></i> E-Commerce Prototype</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <label class="text-muted small text-uppercase fw-bold mb-1 d-block" style="letter-spacing: 1px;">Project Year</label>
                        <p class="text-white mb-0">2025</p>
                    </div>

                    <hr class="border-secondary my-4">

                    <a href="{{ route('projects') }}" class="btn btn-outline-light border-secondary w-100 py-2">
                        <i class="bi bi-arrow-left me-2"></i> Back to Projects
                    </a>
                </div>

                <div class="mt-4 p-4 rounded-4 border border-danger text-center" style="background: rgba(230, 57, 70, 0.05);">
                    <h2 class="m-0 text-danger" style="font-family: 'Oswald'; opacity: 0.5;">誠実</h2>
                    <p class="text-muted small mb-0 mt-2">"Integrity" in Japanese</p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection