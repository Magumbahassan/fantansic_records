@extends('layout.main')

@section('content')
<body class="index-page">

    @include('layout.nav')

    <main class="main">
        <!-- Include Animate.css in your <head> if not already -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <div id="quickCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner vh-100">

                <!-- Slide 1 -->
                <div class="carousel-item active h-100">
                    <img src="{{ asset('assets/img/audio piccs.avif') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 1">
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 p-4 rounded">
                        <h2 class="display-5 fw-bold">Discover Your Sound</h2>
                        <p class="lead">Transforming ideas into sonic masterpieces.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets/img/photo-1535006600179-d034a606ade2.avif') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 2">
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 p-4 rounded">
                        <h2 class="display-5 fw-bold">Captivating Video Production</h2>
                        <p class="lead">Bringing your stories to life with stunning visuals.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item h-100">
                    <img src="{{ asset('assets/img/554674a8-c33e-406d-8ef2-dbcc8cff4236.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slide 3">
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 p-4 rounded">
                        <h2 class="display-5 fw-bold">Artist Management</h2>
                        <p class="lead">Helping you shine and grow your brand.</p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#quickCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#quickCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Welcome Section -->
        <section class="bg-dark text-white d-flex align-items-center py-5" style="min-height: 70vh;">
            <div class="container-xl" style="max-width: 900px;">
                <h1 class="display-4 fw-bold mb-4 text-center">Welcome to Fantastic Records</h1>
                <p class="lead mb-4">
                    At Fantastic Records, we are dedicated to transforming your creative ideas into outstanding audio and visual productions...
                </p>
                <div class="text-center">
                    <a href="#services" class="btn btn-warning btn-lg px-5 fw-semibold shadow-sm">Discover Our Services</a>
                </div>
                <p class="mt-4 text-center small text-secondary">
                    For inquiries, please contact: <a href="tel:0759522359" class="text-warning text-decoration-none">0759522359</a>
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-5 bg-dark text-white" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-5">
                        <h2 class="display-4 fw-bold">Our Services</h2>
                        <p class="lead">Discover the wide range of audio production services offered by Swangz Avenue.</p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-dark border-0 h-100">
                            <img src="{{ "assets/img/b58fcdee-5460-49d6-8bcc-0eef2e5dffa0.jpg" }}" class="card-img-top" alt="Music Production">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold">Music Production</h5>
                                <p class="card-text text-white fw-bold">Our experienced team... mixing and mastering, we've got you covered.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-dark border-0 h-100">
                            <img src="{{ "assets/img/22bd8bf6-31c5-4c02-957a-e9b021cb2142.jpg" }}">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold">Film Production</h5>
                                <p class="card-text text-white fw-bold">Create captivating sound effects and visuals for your films and media projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card bg-dark border-0 h-100">
                            <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="Artist Management">
                            <div class="card-body">
                                <h5 class="card-title text-white fw-bold">Artist Management</h5>
                                <p class="card-text text-white fw-bold">Our team supports artist branding, bookings, and growth strategies to elevate your career.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partner Radio Stations -->










<!-- 🔹 Fullscreen Video Background Section -->
<div class="position-relative vh-100 w-100 overflow-hidden">
    <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover">
        <source src="{{ asset('assets/img/WhatsApp Video 2025-05-22 at 7.03.14 PM.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 p-4 rounded">
        <h2 class="display-5 fw-bold">Cinematic Excellence in Every Frame</h2>
        <p class="lead">Discover the artistry and innovation driving our professional filming and visual production team.</p>
    </div>
</div>



<!-- 🔊 Latest Releases Section -->
<div class="container py-5">
    <h2 class="text-center mb-4">🎧 Latest Releases</h2>
    <div class="row g-4">

        <!-- 📀 Release Item 1 -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="rounded shadow overflow-hidden">
                <img src="{{ asset('assets/img/9dab70a5-21df-4fed-8f6c-7521d0d067b6.jpg') }}" class="img-fluid w-100" alt="Cover">
                <div class="bg-light text-center p-3">
                    <audio controls class="w-100">
                        <source src="{{ asset('assets/audio/sample1.mp3') }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>

        <!-- 📀 Release Item 2 -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="rounded shadow overflow-hidden">
                <img src="{{ asset('assets/img/9dab70a5-21df-4fed-8f6c-7521d0d067b6.jpg') }}" class="img-fluid w-100" alt="Cover">
                <div class="bg-light text-center p-3">
                    <audio controls class="w-100">
                        <source src="{{ asset('assets/audio/sample2.mp3') }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>

<section class="bg-black py-5">
    <div class="container">
        <h5 class="text-center text-uppercase text-white fw-bold mb-4">Partner Radio Stations</h5>
        <div class="overflow-hidden">
            <div class="d-flex gap-3 animate-slide">

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/images.png') }}" alt="Capital FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/unnamed.png') }}" alt="Galaxy FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>




                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/APEX.jpg') }}" alt="Next FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/CITY.jpg') }}" alt="Beat FM" class="img-fluid" style="max-height: 80px; object-fit: contain;">
                </div>


                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/images.png') }}" alt="Capital FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/unnamed.png') }}" alt="Galaxy FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>




                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/APEX.jpg') }}" alt="Next FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/CITY.jpg') }}" alt="Beat FM" class="img-fluid" style="max-height: 80px; object-fit: contain;">
                </div>

<div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/images.png') }}" alt="Capital FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/unnamed.png') }}" alt="Galaxy FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>




                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/APEX.jpg') }}" alt="Next FM" class="img-fluid" style="max-height: 50px; object-fit: contain;">
                </div>

                <div class="flex-shrink-0 p-2 bg-dark rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 90px; height: 60px;">
                    <img src="{{ asset('assets/img/logo/CITY.jpg') }}" alt="Beat FM" class="img-fluid" style="max-height: 80px; object-fit: contain;">
                </div>

        </div>
    </div>
</section>


    @include('layout.footer')

</body>
@endsection
