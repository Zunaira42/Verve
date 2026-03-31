@extends('app.layouts.app')

@section('title','Home')

@section('content')

<body class="portfolio-details-page">
    <main class="main">
        <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-2.webp);">
            <div class="container position-relative">
                <h1>Gallery</h1>
                <p>
                    Explore the energy, dedication, and transformation happening every day at Verve Fitness.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li class="current">Gallary</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container">
                <div class="project-hero">
                    <div class="hero-content">
                        <div class="project-category">Verve Fitness</div>
                        <h1 class="project-title">Our Gym Environment</h1>
                        <p class="project-subtitle">
                            Take a look inside Verve Fitness — from intense workouts to powerful transformations and world-class equipment.
                        </p>
                    </div>

                    <div class="project-meta-grid">
                        <div class="meta-column">
                            <div class="meta-label">Category</div>
                            <div class="meta-value">Gym & Training</div>
                        </div>
                        <div class="meta-column">
                            <div class="meta-label">Focus</div>
                            <div class="meta-value">Strength & Fitness</div>
                        </div>
                        <div class="meta-column">
                            <div class="meta-label">Members</div>
                            <div class="meta-value">10,000+</div>
                        </div>
                        <div class="meta-column">
                            <div class="meta-label">Experience</div>
                            <div class="meta-value">Premium Gym</div>
                        </div>
                    </div>
                </div>

                <div class="visual-showcase">
                    <div class="main-visual">
                        <div class="portfolio-details-slider swiper init-swiper">

                            <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "spaceBetween": 20,
                                    "autoplay": {
                                        "delay": 2500
                                    },
                                    "slidesPerView": 4,
                                    "breakpoints": {
                                        "320": {
                                            "slidesPerView": 1
                                        },
                                        "576": {
                                            "slidesPerView": 2
                                        },
                                        "768": {
                                            "slidesPerView": 3
                                        },
                                        "992": {
                                            "slidesPerView": 3
                                        }
                                    }
                                }
                            </script>

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/yoga.png" class="img-fluid gallery-img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/women.png" class="img-fluid gallery-img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/yogga.jpg" class="img-fluid gallery-img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/wstrenth.png" class="img-fluid gallery-img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/strenth.jpg" class="img-fluid gallery-img">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/maditation.png" class="img-fluid gallery-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="project-overview">
                                <h2>Inside Verve Fitness</h2>
                                <p class="overview-text">
                                    Our gallery showcases the passion, energy, and commitment of our members and trainers. Every image reflects real effort, real progress, and real results.
                                </p>

                                <div class="challenge-solution">
                                    <div class="challenge-block">
                                        <h3>Our Environment</h3>
                                        <p>
                                            A motivating and high-energy atmosphere designed to push your limits and help you stay consistent in your fitness journey.
                                        </p>
                                    </div>

                                    <div class="solution-block">
                                        <h3>Our Commitment</h3>
                                        <p>
                                            We provide the best equipment, expert trainers, and a supportive community to help you achieve your goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Masonry Gallery -->
                <div class="process-gallery">
                    <h3>Workout Moments</h3>
                    <div class="gallery-masonry">

                        <div class="gallery-item large">
                            <img src="assets/img/portfolio/portfolio-11.webp" alt="Workout session" class="img-fluid glightbox">
                            <div class="gallery-caption">Strength Training</div>
                        </div>

                        <div class="gallery-item">
                            <img src="assets/img/portfolio/portfolio-12.webp" alt="Gym equipment" class="img-fluid glightbox">
                            <div class="gallery-caption">Modern Equipment</div>
                        </div>

                        <div class="gallery-item">
                            <img src="assets/img/portfolio/portfolio-3.webp" alt="Cardio session" class="img-fluid glightbox">
                            <div class="gallery-caption">Cardio Training</div>
                        </div>

                        <div class="gallery-item">
                            <img src="assets/img/portfolio/portfolio-4.webp" alt="Fitness results" class="img-fluid glightbox">
                            <div class="gallery-caption">Real Results</div>
                        </div>

                    </div>
                </div>

                <!-- Features -->
                <div class="key-features-section">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="features-intro">
                                <h3>Why Verve?</h3>
                                <p>Experience fitness like never before.</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="features-list">

                                <div class="feature-row">
                                    <div class="feature-icon">
                                        <i class="bi bi-lightning"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>High Energy Environment</h4>
                                        <p>Stay motivated with a powerful gym atmosphere.</p>
                                    </div>
                                </div>

                                <div class="feature-row">
                                    <div class="feature-icon">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Pro-Level Equipment</h4>
                                        <p>Train with modern and professional machines.</p>
                                    </div>
                                </div>

                                <div class="feature-row">
                                    <div class="feature-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h4>Strong Community</h4>
                                        <p>Join a community that pushes you forward.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Nav -->
                <div class="project-footer">
                    <div class="footer-navigation">
                        <a href="{{route('program')}}" class="nav-link prev-project">
                            <span class="nav-direction">Previous</span>
                            <span class="nav-title">Programs</span>
                        </a>
                        <a href="{{route('/')}}" class="nav-link all-projects">
                            <i class="bi bi-grid-3x3-gap"></i>
                            <span>Home</span>
                        </a>
                        <a href="#contact" class="nav-link next-project">
                            <span class="nav-direction">Next</span>
                            <span class="nav-title">Contact</span>
                        </a>
                    </div>
                </div>

            </div>

        </section>

    </main>

</body>
@endsection

</html>