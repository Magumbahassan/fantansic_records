<header id="header" class="sticky-top bg-dark text-white shadow-sm py-2">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
      <div class="container-fluid container-xl">
        <!-- Logo / Brand -->
        <a href="index.html" class="navbar-brand d-flex align-items-center gap-3 fs-3 fw-bold text-warning">
          <img src="{{ asset('assets/img/LOGO.jpg') }}"
               alt="Fantastic Records Logo"
               width="70"
               height="70"
               class="img-fluid rounded-circle shadow-sm"
               style="object-fit: cover;">
          <span>FANTANSIC RECORDS </span>
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto gap-2">
            <li class="nav-item">
              <a class="nav-link text-white fs-5 link-warning-hover" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fs-5 link-warning-hover" href="{{ route('audio') }}">Audio Production</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fs-5 link-warning-hover" href="{{ route('video') }}">Video Production</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fs-5 link-warning-hover" href="{{ route('artist') }}">Artist Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white fs-5 link-warning-hover" href="{{ route('contact') }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
