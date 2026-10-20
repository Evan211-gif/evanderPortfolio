<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="OSSPH Freefolio - Indify Template"/>
    <meta property="og:description" content="100% FREE Professional Portfolio Templates - Indify Template"/>
    <meta property="og:type" content="website" />
    <meta
        property="og:image"
        content="https://freefolio.web.app/images/indify.png"
    />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:alt" content="OSSPH Freefolio">
    <meta name="twitter:title" content="OSSPH Freefolio - Indify Template" />
    <meta name="twitter:description" content="100% FREE Professional Portfolio Templates - Indify Template" />
    <title>Indify a Freefolio template by OSSPH</title>
    <!-- Favicons -->
    <link
      rel="shortcut icon"
      href="./assets/img/favicon-32x32.png"
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
        <a href="#" class="nav__logo">LOGO</a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link">Home</a>
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
            <h1>I'm&nbsp;Evander&nbsp;Dayoc</h1>
          </div>
          <div class="home__career" data-aos="fade-up">
            <p>IT Student | Aspiring Software Developer</p>
          </div>
          <div class="home__description" data-aos="fade-up">
  <p>
    I'm an Information Technology student learning to build practical
    software solutions. I'm currently developing my skills in web
    development, databases, and programming through hands-on projects.
  </p>
</div>
          <div class="home__button">
            <button class="home__hire" data-aos="fade-up">HIRE ME</button>
            <a href="#" download="">
              <button class="home__download" data-aos="fade-up">DOWNLOAD CV</button>
            </a>
          </div>
          <div class="home__social" data-aos="fade-up">
            <a
  <div class="home__social" data-aos="fade-up">
  <a href="https://www.facebook.com/YOUR_USERNAME"
     class="home__icon" target="_blank" rel="noopener noreferrer"
     aria-label="Facebook">
    <i class="fab fa-facebook"></i>
  </a>

  <a href="https://github.com/Evan211-gif"
     class="home__icon" target="_blank" rel="noopener noreferrer"
     aria-label="GitHub">
    <i class="fab fa-github"></i>
  </a>

  <a href="https://www.linkedin.com/in/YOUR_USERNAME"
     class="home__icon" target="_blank" rel="noopener noreferrer"
     aria-label="LinkedIn">
    <i class="fab fa-linkedin"></i>
  </a>

  <a href="mailto:YOUR_EMAIL@example.com"
     class="home__icon"
     aria-label="Email">
    <i class="fas fa-envelope"></i>
  </a>
</div>
          <div class="home__img" data-aos="fade-up">
            <img src="{{ asset('indify/assets/img/profile.png') }}"
     alt="Evander Dayoc"
     class="home-image" />
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
      <h2 class="section-title" data-aos="fade-up">SERVICES</h2>
      <p class="section-subtitle" data-aos="fade-up">
  Here are the technical skills I'm developing through my Information
  Technology studies and hands-on software projects.
</p>
      <div class="services__container bd-container bd-grid">
        <div class="services__data" data-aos="fade-up">
          <div class="services__img">
            <img src="{{ asset('indify/assets/img/web-design.svg') }}" alt="" />
          </div>
          <h3 class="services__title">Web Development</h3>
          <p class="services__description">
            Building responsive websites and learning to develop
  full-stack applications using Laravel and modern web technologies.
          </p>
        </div>

        <div class="services__data" data-aos="fade-up">
          <div class="services__img">
            <img src="{{ asset('indify/assets/img/web-development.svg') }}" alt="" />
          </div>
          <h3 class="services__title">Database Management</h3>
          <p class="services__description">
            Learning to design, organize, and manage relational databases
  using MySQL for practical applications.
          </p>
        </div>

        <div class="services__data" data-aos="fade-up">
          <div class="services__img">
           <img src="{{ asset('indify/assets/img/graphics-design.svg') }}" alt="" />
          </div>
          <h3 class="services__title">Programming</h3>
          <p class="services__description">
            Practicing programming fundamentals, problem-solving,
  and application development through hands-on projects.
          </p>
        </div>

        <div class="services__data" data-aos="fade-up">
          <div class="services__img">
         <img src="{{ asset('indify/assets/img/soft-skills.svg') }}" alt="" />
          </div>
          <h3 class="services__title">Software Projects</h3>
          <p class="services__description">
            Creating practical systems that solve real-world problems
  while improving my development and technical skills.
          </p>
        </div>
      </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <h2 class="section-title" data-aos="fade-up">PORTFOLIO</h2>
      <p class="section-subtitle" data-aos="fade-up">
          A collection of my learning projects, practical applications,
  and experiments in software development.
      </p>
      <div class="portfolio__container bd-container bd-grid swiper" data-aos="fade-up">
        <div class="swiper-wrapper">
          <div class="portfolio__data swiper-slide">
           <h3 class="portfolio__title">Student Enrollment System</h3>

<div class="portfolio__img">
  <img src="https://dummyimage.com/640x360/e5e7eb/374151&text=Student+Enrollment+System" alt="Student Enrollment System preview" />
</div>

<p class="portfolio__description">
  A student enrollment system built with Laravel, Angular,
  and MySQL to manage student registration and enrollment workflows.
</p>

<a class="portfolio__link" href="#" target="_blank">
  <span>Project in development <i class="fas fa-arrow-circle-right"></i></span>
</a>
          </div>
          <div class="portfolio__data swiper-slide">
            <h3 class="portfolio__title">Laravel Portfolio Website</h3>

<div class="portfolio__img">
  <img src="https://dummyimage.com/640x360/e5e7eb/374151&text=Laravel+Portfolio" alt="Laravel Portfolio Website preview" />
</div>

<p class="portfolio__description">
  A personal portfolio website built with Laravel, featuring
  my background, learning journey, and software projects.
</p>

<a class="portfolio__link" href="#" target="_blank">
  <span>View portfolio <i class="fas fa-arrow-circle-right"></i></span>
</a>
          </div>
          <div class="portfolio__data swiper-slide">
           <h3 class="portfolio__title">Future Project</h3>

<div class="portfolio__img">
  <img src="https://dummyimage.com/640x360/e5e7eb/374151&text=Future+Project" alt="Future Project preview" />
</div>

<p class="portfolio__description">
  More practical software projects will be added here as I
  continue learning programming, databases, and web development.
</p>

<a class="portfolio__link" href="#contact">
  <span>Coming soon <i class="fas fa-arrow-circle-right"></i></span>
</a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- Footer -->
    <footer id="contact">
      <footer class="footer section">
        <div class="footer__container bd-grid">
         <h3 class="footer__copy">
  © 2026 Evander Dayoc. Built with Laravel.
</h3>
        </div>
      </footer>
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
