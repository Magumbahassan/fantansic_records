
@extends('layout.main')
@section('content')

 @include('layout.nav')
<body class="services-page">

    <section class="py-5 text-center bg-dark text-white">



      <section class="text-center bg-dark">
        <div class="container">
          <h1 class="display-3 fw-bold mb-3">Artist Management</h1>
          <p class="lead mb-5">We nurture, promote, and elevate your music career to the next level.</p>
          <p class="lead mb-4 fs-4">Empowering artists to thrive, connect, and shine on the global stage. Partner with Fantastic Records and take your career to new heights.</p>
          
        </div>
      </section>

      <!-- Services Section -->
      <section class="bg-light-custom text-center">
        <div class="container">
          <h2 class="mb-5 fw-bold">Our Comprehensive Services</h2>
          <div class="row g-5 justify-content-center">
            <div class="col-lg-4 col-md-6">
              <i class="bi bi-mic-fill fs-1 mb-3 text-warning"></i>
              <h4>Brand Development & Image</h4>
              <p>Craft a compelling artist identity that resonates deeply with fans, media, and the industry.</p>
            </div>
            <div class="col-lg-4 col-md-6">
              <i class="bi bi-calendar-event-fill fs-1 mb-3 text-warning"></i>
              <h4>Tour & Event Booking</h4>
              <p>Plan and secure national and international gigs, festivals, and exclusive shows to grow your audience.</p>
            </div>
            <div class="col-lg-4 col-md-6">
              <i class="bi bi-megaphone-fill fs-1 mb-3 text-warning"></i>
              <h4>Marketing & Digital Strategy</h4>
              <p>Tailored social media campaigns, PR, and influencer partnerships designed to maximize your exposure.</p>
            </div>
            <div class="col-lg-4 col-md-6">
              <i class="bi bi-file-earmark-text-fill fs-1 mb-3 text-warning"></i>
              <h4>Contract Negotiation & Legal Support</h4>
              <p>Experienced legal guidance to protect your rights and secure fair agreements in all business dealings.</p>
            </div>
            <div class="col-lg-4 col-md-6">
              <i class="bi bi-people-fill fs-1 mb-3 text-warning"></i>
              <h4>Collaboration & Networking</h4>
              <p>Access to a network of producers, songwriters, and creatives for collaborative opportunities.</p>
            </div>
            <div class="col-lg-4 col-md-6">
              <i class="bi bi-bar-chart-line-fill fs-1 mb-3 text-warning"></i>
              <h4>Career Planning & Development</h4>
              <p>Personalized career roadmap development, goal setting, and milestone tracking for long-term success.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured Artists Section -->
      <section>
        <div class="container">
          <h2 class="mb-5 text-center fw-bold">Our Talented Artists</h2>
          <div class="row g-4 justify-content-center">
            <div class="col-md-4">
              <div class="card shadow-sm">
                <img src="{{ asset('assets/img/ef0a767c-6323-489b-be29-787398abdcf6.jpg') }}" alt="Artist One" class="artist-img w-100" />
                <div class="card-body text-center">
                  <h5 class="card-title">SHAMIE BABIEY</h5>
                  <p class="card-text fst-italic">Blending Afrobeat rhythms with soulful melodies, Artist One is redefining the genre.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow-sm">
                <img src="{{ ("assets/img/9dab70a5-21df-4fed-8f6c-7521d0d067b6.jpg") }}" alt="Artist Two" class="artist-img w-100" />
                <div class="card-body text-center">
                  <h5 class="card-title">TINA BAIBE</h5>
                  <p class="card-text fst-italic">A powerhouse vocalist known for energetic performances and heartfelt lyrics.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow-sm">
                <img src="assets/img/artists/artist3.jpg" alt="Artist Three" class="artist-img w-100" />
                <div class="card-body text-center">
                  <h5 class="card-title">TOMO BEATS</h5>
                  <p class="card-text fst-italic">Melding hip-hop and traditional sounds to create a fresh, dynamic experience.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials Section -->
      <section class="bg-light-custom">
        <div class="container">
          <h2 class="mb-5 text-center fw-bold">What Our Artists Say</h2>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-5">
                <blockquote class="blockquote fs-5 fst-italic text-center text-warning">
                  “Fantastic Records believed in me when no one else did. Their management has opened doors I never thought possible.”
                </blockquote>
                <p class="text-center fw-bold">– RAGGE PIPI</p>
              </div>
              <div>
                <blockquote class="blockquote fs-5 fst-italic text-center text-warning">
                  “From tours to social media strategy, the team’s professionalism and dedication pushed my career forward faster than I imagined.”
                </blockquote>
                <p class="text-center fw-bold">– COOLCOWY UG</p>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section>
        <div class="container">
          <h2 class="mb-5 text-center fw-bold">Meet The Management Team</h2>
          <div class="row justify-content-center g-5">
            <div class="col-md-3 text-center">
              <img src="assets/img/9921bfba-d82b-4c85-9060-a7d106efb456.jpg" alt="Jane Doe" class="team-img mb-3" />
              <h5 class="fw-bold">NASTIC BEATS </h5>
              <p class="text-warning fw-semibold">CEO FANTASIC RECORDS </p>
              <p>15+ years industry experience, dedicated to personalized artist growth and strategic career management.</p>
            </div>
            <div class="col-md-3 text-center">
              <img src="assets/img/team/manager2.jpg" alt="John Smith" class="team-img mb-3" />
              <h5 class="fw-bold">John Smith</h5>
              <p class="text-warning fw-semibold">Marketing Director</p>
              <p>Expert in digital marketing, social campaigns, and brand-building for emerging and established artists.</p>
            </div>
            <div class="col-md-3 text-center">
              <img src="assets/img/team/manager3.jpg" alt="Sara Lee" class="team-img mb-3" />
              <h5 class="fw-bold">Sara Lee</h5>
              <p class="text-warning fw-semibold">Legal Advisor</p>
              <p>Protects artists’ rights with strong contract negotiation and legal guidance.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ Section -->
      <section class="bg-light-custom">
        <div class="container">
          <h2 class="mb-5 text-center fw-bold">Frequently Asked Questions</h2>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  How do I apply for artist management at Fantastic Records?
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Send your demo, press kit, and portfolio through our <a href="contact.html" class="text-warning">contact page</a>. Our team reviews all submissions carefully and responds within 2-3 weeks.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  What genres do you specialize in managing?
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We specialize in Afrobeat, Hip-Hop, R&B, Pop, Soul, and many contemporary genres. We welcome talented artists across diverse styles.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  What is the process after application?
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Once approved, you will be invited for an initial meeting where we discuss your goals, create a tailored plan, and sign a management agreement.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action Section -->
      <section class="text-center bg-dark">
        <div class="container">
          <h2 class="mb-4 fw-bold">Ready to Elevate Your Career?</h2>
          <p class="mb-4 fs-5">Join Fantastic Records Artist Management and let us guide you to success. Submit your details and portfolio today!</p>
          <a href="contact.html" class="btn btn-lg btn-primary px-5">Apply Now</a>
        </div>
      </section>
    </section>
  <footer id="footer" class="footer dark-background">



    @include('layout.footer')
