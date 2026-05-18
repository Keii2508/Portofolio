@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-between">
        
        <!-- Bagian Kiri: Info Kontak -->
        <div class="col-lg-5 mb-5 mb-lg-0">
            <h6 class="accent-red fw-bold mb-3">GET IN TOUCH</h6>
            <h1 class="about-heading mb-4">Let's build something together!</h1>
            <p class="text-muted mb-5">
                Whether you have an internship opportunity, a project idea, or just want to say hi, I'll try my best to get back to you!
            </p>

            <!-- Info Email dll -->
            <div class="d-flex align-items-center mb-4">
                <div class="bg-dark rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 50px; height: 50px; border: 1px solid #333;">
                    <i class="bi bi-envelope-fill accent-red fs-5"></i>
                </div>
                <div>
                    <p class="mb-0 text-muted" style="font-size: 0.85rem;">Email Me At</p>
                    <h6 class="mb-0">joseaustin0805@gmail.com</h6> <!-- Ganti pake email asli lu -->
                </div>
            </div>

            <div class="d-flex align-items-center mb-4">
                <div class="bg-dark rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 50px; height: 50px; border: 1px solid #333;">
                    <i class="bi bi-geo-alt-fill accent-red fs-5"></i>
                </div>
                <div>
                    <p class="mb-0 text-muted" style="font-size: 0.85rem;">Location</p>
                    <h6 class="mb-0">Bandung, Indonesia</h6>
                </div>
            </div>

            <!-- Tombol Download CV -->
            <a href="#" class="btn btn-custom-red mt-3">
                <i class="bi bi-file-earmark-pdf me-2"></i> Download My CV
            </a>
        </div>

        <!-- Bagian Kanan: Contact Form -->
        <div class="col-lg-6">
            <!-- Ini kotak abu-abu gelap yang ngebungkus formnya biar rapi -->
            <div class="bg-dark p-5 rounded-4 shadow-sm" style="border: 1px solid #222;">
                <h4 class="mb-4" style="font-family: var(--font-heading);">Send Me a Message</h4>
                
                <!-- Alert kalau pesan sukses terkirim -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert">
                        <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf 
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small">Your Name</label>
                            <input type="text" name="name" class="form-control bg-black text-white border-secondary" placeholder="John Doe" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small">Email Address</label>
                            <input type="email" name="email" class="form-control bg-black text-white border-secondary" placeholder="john@example.com" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small">Subject</label>
                        <input type="text" name="subject" class="form-control bg-black text-white border-secondary" placeholder="Internship Opportunity" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted small">Message</label>
                        <textarea name="message" class="form-control bg-black text-white border-secondary" rows="5" placeholder="Hi Jose, we are looking for..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom-red w-100">
                        <i class="bi bi-send me-2"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection