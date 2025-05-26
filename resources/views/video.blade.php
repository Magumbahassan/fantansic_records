@extends('layout.main')

@section('content')

@include('layout.nav')

<section class="py-5 bg-dark text-white">
  <div class="container">
    <h2 class="mb-4 text-warning">Our Video Production Services</h2>
    <p class="lead mb-4">
      At <strong>Fantastic Records</strong>, we bring stories to life through powerful visuals and creative storytelling.
      Our <strong>Video Production department</strong> specializes in crafting high-quality content that captures attention and connects with audiences across platforms.
    </p>
    <p class="mb-3">
      Whether you're an artist looking to create a <strong>stunning music video</strong>, a brand wanting to showcase your message, or a filmmaker seeking a visionary team — we’ve got you covered. Our services include:
    </p>
    <ul class="list-unstyled ps-3 mb-4">
      <li>🎥 <strong>Music Video Production</strong> – From concept to final cut, we create visually captivating music videos that enhance your sound and style.</li>
      <li>🎬 <strong>Film Direction & Cinematography</strong> – Our skilled directors and cinematographers turn ideas into cinematic experiences.</li>
      <li>🛠️ <strong>Editing & Post-Production</strong> – Professional editing, color grading, visual effects, and sound design to polish your project to perfection.</li>
      <li>📸 <strong>Behind-the-Scenes & Promotional Content</strong> – Build your brand with dynamic content for social media, websites, or promotions.</li>
    </ul>
    <p class="lead">
      Backed by cutting-edge equipment and a passionate creative team, <strong>Fantastic Records</strong> is your one-stop destination for standout video production.
      Let’s turn your vision into reality.
    </p>
  </div>
</section>

<section class="py-5 bg-black text-white">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2 class="display-5 fw-bold text-warning">🎬 Latest Video Releases</h2>
        <p class="lead">Explore the most recent visual projects brought to life by Fantastic Records.</p>
      </div>
    </div>

    <div class="row g-4">

      <!-- YouTube Embed with Sound -->
      <div class="col-md-6 col-lg-4">
        <div class="card bg-dark border-0 shadow-sm h-100">
          <div class="ratio ratio-16x9">
            <iframe
              class="rounded-top"
              src="https://www.youtube.com/embed/C4T9gu5Xb2A"
              title="YouTube video"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title text-warning fw-bold">Visual Teaser – Upcoming Drop</h5>
            <p class="card-text text-white">A sneak peek into our next big visual production.</p>
          </div>
        </div>
      </div>

      <!-- Local Video with Sound -->
      <div class="col-md-6 col-lg-4">
        <div class="card bg-dark border-0 shadow-sm h-100">
          <div class="ratio ratio-16x9">
            <video
              controls
              playsinline
              preload="metadata"
              style="width: 100%; height: 100%; object-fit: cover;">
              <source src="{{ asset('assets/videos/PRE-I_FINAL.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <div class="card-body">
            <h5 class="card-title text-warning fw-bold">Behind the Scenes – Studio Vibes</h5>
            <p class="card-text text-white">Experience the raw energy of our recording sessions.</p>
          </div>
        </div>
      </div>

      <!-- Another YouTube Video -->
      <div class="col-md-6 col-lg-4">
        <div class="card bg-dark border-0 shadow-sm h-100">
          <div class="ratio ratio-16x9">
            <iframe
              class="rounded-top"
              src="https://www.youtube.com/embed/aGaqVNQ6m9g"
              title="Another Music Video"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title text-warning fw-bold">"No Sleep" – Nastic</h5>
            <p class="card-text text-white">Vibe to this fresh drop from Fantastic Records.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

















<footer id="footer" class="footer dark-background">
  @include('layout.footer')
</footer>

@endsection
