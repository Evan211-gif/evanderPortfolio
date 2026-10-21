<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="{{ $profile->name }} | Portfolio"/>
    <meta property="og:description" content="{{ $profile->intro }}"/>
    <meta property="og:type" content="website" />
    <meta
        property="og:image"
        content="{{ asset($profile->profile_image_path ?? 'indify/assets/img/profile.png') }}"
    />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:alt" content="{{ $profile->name }}">
    <meta name="twitter:title" content="{{ $profile->name }} | Portfolio" />
    <meta name="twitter:description" content="{{ $profile->intro }}" />
    <title>{{ $profile->name }} | Portfolio</title>
    <!-- Favicons -->
    <link
      rel="shortcut icon"
      href="{{ asset('indify/assets/img/favicon-32x32.png') }}"
      type="image/x-icon"
    />
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('indify/assets/css/style.css') }}" />
    <!-- fontawesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  </head>
  <body>
    <!-- Header -->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="#home" class="nav__logo">{{ $profile->name }}</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link">About</a>
            </li>
            <li class="nav__item">
              <a href="#services" class="nav__link">Services</a>
            </li>
            <li class="nav__item">
              <a href="#portfolio" class="nav__link">Portfolio</a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link">Contact</a>
            </li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="fas fa-bars"></i>
        </div>
      </nav>
    </header>
    <!-- Home -->
    <section class="home" id="home">
      <div class="home__container bd-container bd-grid" >
        <div class="home__data" >
          <div class="home__greeting" data-aos="fade-up">
            <span>HELLO,</span>
          </div>
          <div class="home__title" data-aos="fade-up">
            <h1>I'm&nbsp;{{ $profile->name }}</h1>
          </div>
          <div class="home__career" data-aos="fade-up">
            <p>{{ $profile->headline }}</p>
          </div>
          <div class="home__description" data-aos="fade-up">
            <p>{{ $profile->intro }}</p>
          </div>
          <div class="home__button">
            <a class="home__hire" href="#contact" data-aos="fade-up">HIRE ME</a>
            @if ($profile->cv_path)
              <a class="home__download" href="{{ asset($profile->cv_path) }}" download data-aos="fade-up">DOWNLOAD CV</a>
            @endif
          </div>
          <div class="home__social" data-aos="fade-up">
            @foreach ($socialLinks as $socialLink)
              <a href="{{ $socialLink->url }}" class="home__icon" aria-label="{{ $socialLink->label }}" @if (!str_starts_with($socialLink->url, 'mailto:')) target="_blank" rel="noopener noreferrer" @endif>
                <i class="{{ $socialLink->icon_class }}"></i>
              </a>
            @endforeach
          </div>
          <div class="home__img" data-aos="fade-up">
            @if ($profile->profile_image_path)
              <img src="{{ asset($profile->profile_image_path) }}" alt="{{ $profile->name }}" class="home-image" />
            @endif
          </div>
        </div>
      </div>
    </section>

    <section class="services" id="about">
      <h2 class="section-title" data-aos="fade-up">ABOUT ME</h2>
      <p class="section-subtitle" data-aos="fade-up">{{ $profile->about }}</p>
    </section>

    <!-- Services -->
    <section class="services" id="services">
      <h2 class="section-title" data-aos="fade-up">SERVICES</h2>
      <p class="section-subtitle" data-aos="fade-up">
        Here are the technical skills I'm developing through my Information Technology studies and hands-on software projects.
      </p>
      <div class="services__container bd-container bd-grid">
        @foreach ($services as $service)
          <div class="services__data" data-aos="fade-up">
            @if ($service->icon_path)
              <div class="services__img">
                <img src="{{ asset($service->icon_path) }}" alt="" />
              </div>
            @endif
            <h3 class="services__title">{{ $service->title }}</h3>
            <p class="services__description">{{ $service->description }}</p>
          </div>
        @endforeach
      </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <h2 class="section-title" data-aos="fade-up">PORTFOLIO</h2>
      <p class="section-subtitle" data-aos="fade-up">
        A collection of my learning projects, practical applications, and experiments in software development.
      </p>
      <div class="portfolio__container bd-container bd-grid swiper" data-aos="fade-up">
        <div class="swiper-wrapper">
          @foreach ($projects as $project)
            <div class="portfolio__data swiper-slide">
              <h3 class="portfolio__title">{{ $project->title }}</h3>
              @if ($project->image_url)
                <div class="portfolio__img">
                  <img src="{{ $project->image_url }}" alt="{{ $project->title }} preview" />
                </div>
              @endif
              <p class="portfolio__description">{{ $project->description }}</p>
              @if ($project->project_url)
                <a class="portfolio__link" href="{{ $project->project_url }}" @if (!str_starts_with($project->project_url, '#')) target="_blank" rel="noopener noreferrer" @endif>
                  <span>{{ $project->link_label ?? 'View project' }} <i class="fas fa-arrow-circle-right"></i></span>
                </a>
              @elseif ($project->link_label)
                <span class="portfolio__link">
                  <span>{{ $project->link_label }} <i class="fas fa-arrow-circle-right"></i></span>
                </span>
              @endif
            </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- Footer -->
    <footer id="contact" class="footer section">
      <div class="footer__container bd-grid">
        <h3 class="footer__copy">
          © {{ now()->year }} {{ $profile->name }}. Built with Laravel.
        </h3>
      </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- JS script -->
    <script src="{{ asset('indify/assets/js/script.js') }}"></script>
    <!-- AOS script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>       
      AOS.init({
        once: true,
        delay: 0
      });
    </script>
  </body>
</html>
