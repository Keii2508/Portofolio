<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Jose Austin</title>
    
    <!-- Google Fonts: Oswald & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS Terpisah -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <body>
    <!-- NAVBAR (Sekarang pindah ke sini) -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom bg-black sticky-top" style="z-index: 1030;">
        <div class="container">
            <a class="navbar-brand navbar-brand-custom" href="{{ route('home') }}">JOSE AUSTIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('experience') }}">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <a href="{{ asset('cv/CV_Terbaru.pdf') }}" download="CV_Jose_Austin.pdf" class="btn btn-custom-red">
                    <i class="bi bi-download me-2"></i> Download CV
                </a>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>