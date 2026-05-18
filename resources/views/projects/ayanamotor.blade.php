@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5 mb-5">
    
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects') }}" class="text-muted text-decoration-none">Projects</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">Ayana Motor Branding</li>
        </ol>
    </nav>

    <div class="ayana-hero px-4 px-md-5">
        <div class="motor-blur"></div>
        <div class="engine-silhouette"></div>
        
        <div class="hero-content row align-items-center position-relative" style="z-index: 2;">
            <div class="col-lg-7">
                <h6 class="accent-red fw-bold mb-3" style="letter-spacing: 3px;">DIGITAL CONTENT STRATEGY</h6>
                <h1 class="display-3 fw-bold mb-4" style="font-family: var(--font-heading); line-height: 1.1;">AYANA <br><span class="text-white">MOTOR</span></h1>
                <p class="lead text-muted mb-4" style="max-width: 600px;">
                    Modernizing a local motorcycle spare parts shop through a cohesive Instagram visual identity and strategic content prototype.
                </p>
                <div class="d-flex gap-3">
                    <span class="skill-tag">Social Media Design</span>
                    <span class="skill-tag">Product Photography</span>
                    <span class="skill-tag">Automotive</span>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-end">
               <div class="bg-black d-inline-flex align-items-center justify-content-center rounded-circle border border-danger shadow-lg" style="width: 250px; height: 250px; padding: 5px;">
                    
                    <img src="{{ asset('img/2.png') }}" alt="Ayana Motor Logo" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                    
                </div>
            </div>
        </div>
    </div>


<div class="row g-5 mt-4">
         
            <div class="col-lg-8 ps-lg-5">
                <section class="mb-5">
                    <h3 class="fw-bold mb-4 accent-red" style="font-family: var(--font-heading);">Content Strategy</h3>
                    <p class="text-muted fs-5 mb-5" style="line-height: 1.8;">
                        Tantangan utama dari <strong>Ayana Motor</strong> adalah mengubah citra toko sparepart tradisional menjadi bisnis yang relevan secara visual di era digital. Pendekatannya bukan sekadar "jualan", melainkan membangun katalog visual yang rapi dan terpercaya.
                    </p>

                    <div class="mb-3 d-flex align-items-center gap-2">
                        <div style="width: 30px; height: 2px; background-color: #E63946;"></div>
                        <h6 class="text-white small fw-bold text-uppercase m-0" style="letter-spacing: 1px;">3 Content Pillars</h6>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-4 bg-dark rounded-4 border border-secondary h-100 d-flex flex-column" style="transition: all 0.3s ease;" onmouseover="this.style.borderColor='#E63946'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='#495057'; this.style.transform='translateY(0)';">
                                <div class="mb-3 text-danger"><i class="bi bi-camera fs-2"></i></div>
                                <h5 class="text-white fw-bold mb-2">Product Showcase</h5>
                                <p class="text-muted small mb-0 mt-auto">Foto detail sparepart & aksesoris dengan pencahayaan dramatis untuk menonjolkan kualitas premium barang.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-4 bg-dark rounded-4 border border-secondary h-100 d-flex flex-column" style="transition: all 0.3s ease;" onmouseover="this.style.borderColor='#E63946'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='#495057'; this.style.transform='translateY(0)';">
                                <div class="mb-3 text-danger"><i class="bi bi-wrench-adjustable fs-2"></i></div>
                                <h5 class="text-white fw-bold mb-2">Educational</h5>
                                <p class="text-muted small mb-0 mt-auto">Membagikan tips perawatan motor ringan dan fungsi komponen yang memberi nilai tambah edukasi bagi followers.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-4 bg-dark rounded-4 border border-secondary h-100 d-flex flex-column" style="transition: all 0.3s ease;" onmouseover="this.style.borderColor='#E63946'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='#495057'; this.style.transform='translateY(0)';">
                                <div class="mb-3 text-danger"><i class="bi bi-shop fs-2"></i></div>
                                <h5 class="text-white fw-bold mb-2">Workshop Vibe</h5>
                                <p class="text-muted small mb-0 mt-auto">Menunjukkan keaslian (authenticity) suasana bengkel paman saya dan testimoni jujur dari pelanggan lokal.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <div class="col-lg-4 pe-lg-4">
                <div class="bg-dark p-4 rounded-4 border border-secondary sticky-top" style="top: 100px;">
                    <h5 class="mb-4 text-white fw-bold" style="font-family: var(--font-heading);">Project Overview</h5>
                    <div class="mb-4">
                        <small class="text-muted d-block text-uppercase fw-bold mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">Target Audience</small>
                        <p class="text-white fw-semibold mb-0">Motorcycle Enthusiasts, Local Riders</p>
                    </div>
                    <div class="mb-4">
                        <small class="text-muted d-block text-uppercase fw-bold mb-1" style="font-size: 0.7rem; letter-spacing: 1px;">Deliverables</small>
                        <ul class="list-unstyled text-white small m-0">
                            <li class="mb-2"><i class="bi bi-check2 accent-red me-2"></i> Content Pillar Strategy</li>
                            <li class="mb-2"><i class="bi bi-check2 accent-red me-2"></i> Product Photography</li>
                            <li class="mb-0"><i class="bi bi-check2 accent-red me-2"></i> Intagram Feed Prototype</li>
                        </ul>
                    </div>
                    <hr class="border-secondary my-4">
                    <a href="https://canva.link/fbm8cfrh6ly5t1c" target="_blank" class="btn btn-custom-red w-100 py-2">
                        <i class="bi bi-instagram me-2"></i> View Full Prototype
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-5 pt-5 pb-5 border-top border-secondary">
        <div class="text-center mb-5">
            <h2 class="fw-bold accent-red" style="font-family: var(--font-heading);">Instagram Feed Prototype</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">
                Desain grid 3x3 yang dirancang khusus untuk menciptakan estetika feed yang konsisten, maskulin, dan rapi saat dilihat di profil akun bisnis Ayana Motor.
            </p>
        </div>

        <div class="ig-grid-container mx-auto" style="max-width: 650px;">
            
            <div class="ig-post">
                <img src="{{ asset('img/3.png') }}" alt="Ayana Motor Feed 1" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/2.png') }}" alt="Ayana Motor Feed 2" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/1.png') }}" alt="Ayana Motor Feed 3" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/4.png') }}" alt="Ayana Motor Feed 4" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/5.png') }}" class="img-fluid" alt="Ayana Motor Feed 5" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/11.png') }}" alt="Ayana Motor Feed 6" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/6.png') }}" alt="Ayana Motor Feed 7" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/7.png') }}" alt="Ayana Motor Feed 8" style="object-fit: contain">
            </div>
            <div class="ig-post">
                <img src="{{ asset('img/10.png') }}" alt="Ayana Motor Feed 9" style="object-fit: contain">
            </div>

        </div>
    </section>

</div>
@endsection