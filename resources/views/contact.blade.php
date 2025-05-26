@extends('layout.main')
@section('content')

@include('layout.nav')

<section class="py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-4">Book an Appointment</h2>
      <p class="text-center mb-5 fs-5">Need studio time, a consultation, or artist management services? Use the form below to set up your appointment with Fantastic Records.</p>

      <div class="row g-5">
        <!-- Form -->
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="e.g. Ray Music" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required />
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" placeholder="+256 700 000 123" required />
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Preferred Date</label>
              <input type="date" class="form-control" id="date" required />
            </div>
            <div class="mb-3">
              <label for="time" class="form-label">Preferred Time</label>
              <input type="time" class="form-control" id="time" required />
            </div>
            <div class="mb-3">
              <label for="service" class="form-label">Service Needed</label>
              <select class="form-control" id="service" required>
                <option selected disabled>Select Service</option>
                <option>Studio Recording</option>
                <option>Mixing & Mastering</option>
                <option>Artist Management</option>
                <option>Consultation</option>
              </select>
            </div>
            <button type="submit" class="btn btn-orange w-100">Book Appointment</button>
          </form>
        </div>

        <!-- Contact Info & Location -->
        <div class="col-md-6">
          <h5 class="mb-4">Other Ways to Reach Us</h5>
          <div class="mb-3 d-flex">
            <div class="me-3 info-icon"><i class="bi bi-telephone-fill"></i></div>
            <div>
              <p class="mb-1">Phone / WhatsApp:</p>
              <strong>+256 700 000 123</strong>
            </div>
          </div>
          <div class="mb-3 d-flex">
            <div class="me-3 info-icon"><i class="bi bi-envelope-fill"></i></div>
            <div>
              <p class="mb-1">Email Us:</p>
              <strong>studio@fantasticrecords.com</strong>
            </div>
          </div>
          <div class="mb-3 d-flex">
            <div class="me-3 info-icon"><i class="bi bi-instagram"></i></div>
            <div>
              <p class="mb-1">Instagram:</p>
              <strong>@fantasticrecordsug</strong>
            </div>
          </div>

          <h5 class="mt-5 mb-3">Studio Location</h5>
          <!-- Google Map Embed -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127495.76573947891!2d32.5281984!3d0.3136117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb7b11cb7c99%3A0x6f0591d93e01572e!2sKampala!5e0!3m2!1sen!2sug!4v1681970704236" loading="lazy" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
