@extends('layout.main')
@section('content')

@include('layout.nav')

<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="mb-4 text-primary animate__animated animate__fadeInRight">Welcome to Our Audio Studio</h2>
                <p class="lead animate__animated animate__fadeInRight">
                    At Fatnatsnic Records, we take pride in our state-of-the-art audio production facilities.
                    Our studio is equipped with the latest technology and staffed by a team of experienced engineers
                    who are dedicated to helping you bring your musical vision to life.
                </p>
                <a href="#" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">Explore Our Services</a>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <h2 class="display-4 fw-bold">Our Services</h2>
                <p class="lead">Discover the wide range of audio production services offered by fantansic records.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark border-0 h-100">
                    <img src="{{ "assets/img/0d0a0cd8-cce3-4b9f-840d-18ece06dad4a.jpg" }}" class="card-img-top" alt="Music Production">
                    <p class="card-text mt-2 text-white fw-bold">Our experienced team of producers and engineers will help you bring your musical vision to life. From recording to mixing and mastering, we've got you covered.</p>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">MUSIC PRODUCTION</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark border-0 h-100">
                    <img src="{{ "assets/img/99c47b8c-457e-4b2d-8ea9-b2343438061a.jpg" }}" class="card-img-top" alt="Sound Design">
                    <p class="card-text mt-2 text-white fw-bold">Create unique and captivating sound effects, ambiences, and soundscapes for your projects. Our sound designers are experts in their craft.</p>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">RADIO ADVERT</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card bg-dark border-0 h-100">
                    <img src="{{ "assets/img/b58fcdee-5460-49d6-8bcc-0eef2e5dffa0.jpg" }}" class="card-img-top" alt="Audio Post-Production">
                    <p class="card-text mt-2 text-white fw-bold">From dialogue editing and ADR to sound mixing and mastering, our audio post-production team will ensure your project sounds its best.</p>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">MIXING AND MASTERING</h5></h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="position-relative vh-100 w-100 overflow-hidden">
    <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover">
        <source src="{{ asset('assets/img/WhatsApp Video 2025-05-22 at 7.12.21 PM.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="position-absolute top-50 start-50 translate-middle text-center text-white bg-dark bg-opacity-50 p-4 rounded">
        <h2 class="display-5 fw-bold">Crafting the Future of Sound</h2>
        <p class="lead">From studio recording to audio engineering — we deliver immersive sound experiences with precision and creativity.</p>
    </div>
</div>




<footer id="footer" class="footer dark-background">
    @include('layout.footer')
</footer>
