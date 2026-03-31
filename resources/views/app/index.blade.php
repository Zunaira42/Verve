@extends('app.layouts.app')

@section('title','Home')

@section('content')


<body class="index-page">
  <main class="main">
    <section id="hero" class="hero section dark-background">
      <div class="video-background"></div>
      <div class="col-12">
        <img src="assets/img/portfolio/yoga.png" class="img-fluid w-100">
        <div class="video-overlay"></div>
      </div>

      <div class="hero-content">
        <div class="container position-relative">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8">
              <div class="hero-text">
                <h1>Fuel Your Body, Find Your Verve.</h1>
                <p>"Discover daily tips, organic recipes, and wellness guides
                  designed to bring out the best version of you."</p>
                <div class="hero-buttons">
                  <a href="#about" class="btn btn-primary">Get Started</a>
                  <a href="#services" class="btn btn-outline">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="about" class="about section">
      <div class="container section-title">
        <span class="subtitle">About</span>
        <h2>About Verve</h2>
        <p>Verve represents the spirit of vitality and enthusiasm. We are dedicated to helping you find your inner
          rhythm through the ancient art of Yoga, tailored for the modern world.</p>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="content">
              <h2>Finding your flow through mindful movement and vibrant energy</h2>
              <p class="lead">We believe in the power of conscious practice, where every breath serves a greater
                purpose and every session becomes a testament to your commitment to inner well-being.
                .</p>
              <p>Our journey began with a simple philosophy: to transform lives through the meticulous practice of
                yoga and an unwavering dedication to holistic health. Today, we continue to push the boundaries of
                traditional practice while staying true to our core values of authenticity, mindfulness, and lasting
                vitality.
                .</p>

              <div class="cta-wrapper">
                <a href="#" class="btn-link">
                  Discover our story
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-wrapper">
              <img src="assets/img/about/about-1.webp" alt="About us" class="img-fluid">
              <div class="floating-element">
                <div class="quote-content">
                  <blockquote>
                    "Excellence is never an accident. It is always the result of high intention, sincere effort, and
                    intelligent execution."
                  </blockquote>
                  <cite>— Aristotle</cite>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="clients" class="clients section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <div class="client-item">
              <img src="assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <div class="client-item">
              <img src="assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <div class="client-item">
              <img src="assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <div class="client-item">
              <img src="assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <div class="client-item">
              <img src="assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-6">
            <div class="client-item">
              <img src="assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="features" class="features section">
      <div class="container section-title">
        <span class="subtitle">Verve Wellness</span>
        <h2>Our Wellness Features</h2>
        <p>Discover tools, practices, and guidance designed to help you build a balanced and healthy lifestyle.</p>
      </div>
      <div class="container">
        <div class="tabs-wrapper">
          <div class="tabs-header">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <div class="tab-content-preview">
                    <span class="tab-number">01</span>
                    <div class="tab-text">
                      <h6>Yoga Practice</h6>
                      <small>Daily flexibility</small>
                    </div>
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <div class="tab-content-preview">
                    <span class="tab-number">02</span>
                    <div class="tab-text">
                      <h6>Mindfulness</h6>
                      <small>Mental clarity</small>
                    </div>
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <div class="tab-content-preview">
                    <span class="tab-number">03</span>
                    <div class="tab-text">
                      <h6>Healthy Nutrition</h6>
                      <small>Balanced diet</small>
                    </div>
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                  <div class="tab-content-preview">
                    <span class="tab-number">04</span>
                    <div class="tab-text">
                      <h6>Community</h6>
                      <small>Support & motivation</small>
                    </div>
                  </div>
                </a>
              </li>

            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="features-tab-1">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="content-area">
                    <div class="content-badge">
                      <i class="bi bi-flower1"></i>
                      <span>Yoga Sessions</span>
                    </div>
                    <h3>Build Strength & Flexibility</h3>
                    <p>Our guided yoga sessions help you strengthen your body,
                      improve flexibility, and reconnect with your inner calm.
                      Practice daily and experience balance between body and mind.
                    </p>
                    <div class="highlight-stats">
                      <div class="stat-item">
                        <span class="stat-value">120+</span>
                        <span class="stat-label">Yoga Classes</span>
                      </div>
                      <div class="stat-item">
                        <span class="stat-value">10K</span>
                        <span class="stat-label">Happy Members</span>
                      </div>
                    </div>

                    <div class="feature-points">

                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Beginner to advanced yoga routines</span>
                      </div>

                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Improve posture and flexibility</span>
                      </div>

                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Boost energy and reduce stress</span>
                      </div>

                    </div>

                    <a href="#" class="explore-link">
                      Explore Yoga <i class="bi bi-arrow-up-right"></i>
                    </a>

                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="visual-content">
                    <img src="assets/img/features/yoga.png" alt="" class="img-fluid">

                    <div class="floating-element">
                      <div class="floating-card">
                        <i class="bi bi-heart-pulse"></i>

                        <div class="card-info">
                          <span>Wellness</span>
                          <strong>100% Balance</strong>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="features-tab-2">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="content-area">
                    <div class="content-badge">
                      <i class="bi bi-brightness-high"></i>
                      <span>Mindfulness</span>
                    </div>
                    <h3>Meditation for Inner Peace</h3>
                    <p>
                      Learn breathing exercises and meditation practices that
                      calm your mind, reduce anxiety, and help you stay present
                      in every moment.
                    </p>
                    <div class="highlight-stats">
                      <div class="stat-item">
                        <span class="stat-value">95%</span>
                        <span class="stat-label">Stress Reduction</span>
                      </div>
                      <div class="stat-item">
                        <span class="stat-value">30+</span>
                        <span class="stat-label">Meditation Guides</span>
                      </div>
                    </div>
                    <div class="feature-points">
                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Guided meditation sessions</span>
                      </div>
                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Breathing and relaxation exercises</span>
                      </div>
                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Improve focus and emotional balance</span>
                      </div>
                    </div>
                    <a href="#" class="explore-link">
                      Start Meditation <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="visual-content">
                    <img src="assets/img/features/breath.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="features-tab-3">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="content-area">
                    <div class="content-badge">
                      <i class="bi bi-egg-fried"></i>
                      <span>Nutrition</span>
                    </div>
                    <h3>Healthy Eating for a Better Life</h3>
                    <p>
                      Discover balanced diet plans and healthy recipes
                      designed to fuel your body and keep you energized
                      throughout the day.
                    </p>
                    <div class="highlight-stats">
                      <div class="stat-item">
                        <span class="stat-value">200+</span>
                        <span class="stat-label">Healthy Recipes</span>
                      </div>
                      <div class="stat-item">
                        <span class="stat-value">85%</span>
                        <span class="stat-label">Improved Energy</span>
                      </div>
                    </div>
                    <div class="feature-points">
                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Organic nutrition guides</span>
                      </div>
                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Balanced meal planning</span>
                      </div>
                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Healthy lifestyle tips</span>
                      </div>
                    </div>
                    <a href="#" class="explore-link">
                      View Recipes <i class="bi bi-arrow-up-right"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="visual-content">
                    <img src="assets/img/features/food.png" alt="" class="img-fluid w-100 h-100">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="features-tab-4">
              <div class="row align-items-center">

                <div class="col-lg-6">
                  <div class="content-area">

                    <div class="content-badge">
                      <i class="bi bi-people"></i>
                      <span>Community</span>
                    </div>

                    <h3>Grow Together with Verve</h3>

                    <p>
                      Join a supportive wellness community where members
                      motivate each other to stay consistent in their
                      fitness and mindfulness journey.
                    </p>

                    <div class="highlight-stats">

                      <div class="stat-item">
                        <span class="stat-value">15K+</span>
                        <span class="stat-label">Community Members</span>
                      </div>

                      <div class="stat-item">
                        <span class="stat-value">500+</span>
                        <span class="stat-label">Live Sessions</span>
                      </div>

                    </div>

                    <div class="feature-points">

                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Live yoga and meditation classes</span>
                      </div>

                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Expert wellness coaches</span>
                      </div>

                      <div class="point-item">
                        <i class="bi bi-arrow-right"></i>
                        <span>Supportive fitness community</span>
                      </div>

                    </div>

                    <a href="#" class="explore-link">
                      Join Community <i class="bi bi-arrow-up-right"></i>
                    </a>

                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="visual-content">
                    <img src="assets/img/features/features-5.webp" alt="" class="img-fluid">
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section id="features-cards" class="features-cards section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-flower1"></i>
              </div>
              <h3>Guided Yoga Programs</h3>
              <p>Explore structured yoga programs designed to improve flexibility, strengthen your body, and create
                balance between mind and body.</p>
              <ul class="feature-benefits">
                <li><i class="bi bi-check-circle-fill"></i> Beginner to advanced yoga flows</li>
                <li><i class="bi bi-check-circle-fill"></i> Improve posture and flexibility</li>
                <li><i class="bi bi-check-circle-fill"></i> Daily wellness routines</li>
              </ul>
              <div class="feature-image">
                <img src="assets/img/features/features-1.webp" alt="Dashboard Interface" class="img-fluid"
                  loading="lazy">
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="feature-card highlighted">
              <div class="feature-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <h3>Mind & Body Wellness</h3>
              <p>Verve focuses on holistic wellness practices including meditation, breathing techniques, and mindful
                relaxation.</p>
              <ul class="feature-benefits">
                <li><i class="bi bi-check-circle-fill"></i> Guided meditation sessions</li>
                <li><i class="bi bi-check-circle-fill"></i> Stress relief techniques</li>
                <li><i class="bi bi-check-circle-fill"></i> Mental clarity & focus</li>
              </ul>
              <div class="feature-image">
                <img src="assets/img/features/features-2.webp" alt="Analytics Tools" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Healthy Nutrition Guides</h3>
              <p>Discover healthy meal plans, organic recipes, and nutrition tips to fuel and burn fat on your body
                and support an active lifestyle.</p>
              <ul class="feature-benefits">
                <li><i class="bi bi-check-circle-fill"></i>Organic diet recommendations</li>
                <li><i class="bi bi-check-circle-fill"></i>Balanced meal planning</li>
                <li><i class="bi bi-check-circle-fill"></i>Energy boosting recipes</li>
              </ul>
              <div class="feature-image">
                <img src="assets/img/features/features-3.webp" alt="Security Features" class="img-fluid"
                  loading="lazy">
              </div>
            </div>
          </div>
        </div>
        <div class="feature-testimonial">
          <div class="row align-items-center">

            <div class="col-lg-6" data-aos="zoom-in">
              <div class="testimonial-image">
                <img src="assets/img/features/mind.png" alt="Verve Member Testimonial" class="img-fluid">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="testimonial-content">
                <p>
                  "Verve helped me reconnect with my body and mind. The yoga routines,
                  meditation sessions, and nutrition tips have transformed my daily
                  lifestyle. I feel more energized, balanced, and confident every day.""
                </p>

                <div class="testimonial-author">
                  <h4>Emma Carter</h4>
                  <span>Yoga & Wellness Member at Verve</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Start Your <em>Wellness Journey</em> with Verve</h3>

            <p>
              Discover the power of yoga, mindfulness, and healthy living. Join Verve today and take the
              first step toward a balanced body, a calm mind, and a healthier lifestyle.
            </p>

            <a class="cta-btn align-self-start" href="#">Join Verve Today</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/misc/misc-portrait-8.webp" alt="Yoga Wellness" class="img-fluid">
            </div>
          </div>

        </div>

      </div>

    </section>

    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Testimonials</span>
        <h2>What Our Members Say</h2>
        <p>Real experiences from people who started their wellness journey with Verve.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000"
          data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial 1 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>
                    Verve helped me reconnect with my body and mind. The yoga sessions
                    improved my flexibility and gave me a peaceful start to every day.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
                <h3>Daniel Carter</h3>
                <h4>Fitness Enthusiast</h4>
              </div>
            </div><!-- End testimonial item -->


            <!-- Testimonial 2 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>
                    The meditation and breathing exercises at Verve helped me manage
                    stress and stay focused throughout my busy workdays.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
                <h3>Emily Watson</h3>
                <h4>Yoga Beginner</h4>
              </div>
            </div><!-- End testimonial item -->


            <!-- Testimonial 3 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>
                    I love the healthy recipe guides and wellness tips from Verve.
                    They helped me build better habits and feel more energized daily.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
                <h3>Sophia Miller</h3>
                <h4>Wellness Blogger</h4>
              </div>
            </div><!-- End testimonial item -->


            <!-- Testimonial 4 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>
                    The guided yoga programs are perfect for beginners like me.
                    I feel stronger, more flexible, and more confident every week.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-m-12.webp" class="testimonial-img" alt="">
                <h3>Michael Lee</h3>
                <h4>Gym Trainer</h4>
              </div>
            </div><!-- End testimonial item -->


            <!-- Testimonial 5 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>
                    Joining the Verve community motivated me to stay consistent
                    with my fitness and mindfulness goals. It feels inspiring and supportive.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-m-13.webp" class="testimonial-img" alt="">
                <h3>Ryan Anderson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->


          </div>

          <div class="swiper-pagination"></div>

        </div>

      </div>

    </section>

    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Services</span>
        <h2>Our Wellness Services</h2>
        <p>Explore yoga practices, mindfulness techniques, and healthy lifestyle guidance designed to bring balance to
          your life.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-showcase mt-5">
          <div class="row g-0">

            <div class="col-lg-6">
              <div class="featured-service" data-aos="fade-right" data-aos-delay="200">
                <div class="service-image">
                  <img src="assets/img/services/services-3.webp" alt="Yoga Programs" class="img-fluid">
                </div>

                <div class="service-overlay">
                  <div class="overlay-content">
                    <h3>Guided Yoga Programs</h3>
                    <p>Improve flexibility, strength, and inner balance through structured yoga sessions suitable for
                      beginners and advanced practitioners.</p>
                    <a href="service-details.html" class="service-link">
                      <span>Discover More</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-lg-6">
              <div class="services-list">

                <div class="service-item" data-aos="fade-left" data-aos-delay="100">
                  <div class="service-icon">
                    <i class="bi bi-flower1"></i>
                  </div>
                  <div class="service-content">
                    <h4><a href="service-details.html">Meditation & Mindfulness</a></h4>
                    <p>Practice guided meditation and breathing techniques that reduce stress and improve mental
                      clarity.</p>
                  </div>
                </div>

                <div class="service-item" data-aos="fade-left" data-aos-delay="200">
                  <div class="service-icon">
                    <i class="bi bi-heart-pulse"></i>
                  </div>
                  <div class="service-content">
                    <h4><a href="service-details.html">Fitness & Body Strength</a></h4>
                    <p>Build strength and endurance with carefully designed fitness routines that support a healthy
                      lifestyle.</p>
                  </div>
                </div>

                <div class="service-item" data-aos="fade-left" data-aos-delay="300">
                  <div class="service-icon">
                    <i class="bi bi-egg-fried"></i>
                  </div>
                  <div class="service-content">
                    <h4><a href="service-details.html">Healthy Nutrition</a></h4>
                    <p>Discover balanced diet plans and nutritious recipes that fuel your body and boost daily energy.
                    </p>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="additional-services mt-5">
          <div class="row g-5">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="service-card">
                <div class="card-image">
                  <img src="assets/img/services/services-7.webp" alt="Yoga Coaching" class="img-fluid">
                </div>

                <div class="card-body">
                  <h5><a href="service-details.html">Personal Yoga Coaching</a></h5>
                  <p>Get personalized yoga guidance from experienced instructors to help you achieve flexibility,
                    balance, and strength.</p>

                  <a href="service-details.html" class="read-more">
                    Learn More <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card">
                <div class="card-image">
                  <img src="assets/img/services/services-9.webp" alt="Wellness Programs" class="img-fluid">
                </div>

                <div class="card-body">
                  <h5><a href="service-details.html">Wellness Programs</a></h5>
                  <p>Structured wellness programs that combine yoga, meditation, and nutrition for a healthier
                    lifestyle.</p>

                  <a href="service-details.html" class="read-more">
                    Learn More <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>


            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="service-card">
                <div class="card-image">
                  <img src="assets/img/services/services-11.webp" alt="Community Classes" class="img-fluid">
                </div>

                <div class="card-body">
                  <h5><a href="service-details.html">Community Yoga Classes</a></h5>
                  <p>Join group yoga sessions where members support and motivate each other in their wellness journey.
                  </p>

                  <a href="service-details.html" class="read-more">
                    Learn More <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section id="faq" class="faq section">
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">F.A.Q</span>
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions about our yoga programs, wellness sessions, and membership.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="faq-wrapper">
              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="150">
                <div class="faq-header">
                  <span class="faq-number">01</span>
                  <h4>Do I need prior yoga experience to join Verve?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Not at all. Our yoga sessions are designed for everyone, from beginners to advanced
                      practitioners. Our instructors guide you step by step so you can learn comfortably at your own
                      pace.</p>
                  </div>
                </div>
              </div>
              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-header">
                  <span class="faq-number">02</span>
                  <h4>What types of wellness programs do you offer?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>We offer guided yoga classes, meditation sessions, breathing exercises, and healthy lifestyle
                      guidance to help you achieve physical and mental balance.</p>
                  </div>
                </div>
              </div>
              <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                <div class="faq-header">
                  <span class="faq-number">03</span>
                  <h4>How often should I attend yoga sessions?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>For the best results, we recommend practicing yoga at least 3–4 times per week. Consistency
                      helps improve flexibility, strength, and mental clarity over time.</p>
                  </div>
                </div>
              </div>
              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-header">
                  <span class="faq-number">04</span>
                  <h4>Do you provide nutrition guidance?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Yes. We provide helpful nutrition tips, balanced meal suggestions, and healthy recipes to
                      support your wellness journey alongside yoga practice.</p>
                  </div>
                </div>
              </div>
              <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                <div class="faq-header">
                  <span class="faq-number">05</span>
                  <h4>Can I join group yoga classes?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Absolutely. Our group yoga classes create a supportive community environment where members can
                      stay motivated and enjoy practicing wellness together.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Gallery</span>
        <h2>Explore Our Wellness Journey</h2>
        <p>Discover moments from our yoga sessions, meditation practices, wellness workshops, and healthy lifestyle
          programs at Verve.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

          <div class="portfolio-filters-wrapper" data-aos="fade-up" data-aos-delay="100">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Activities</li>
              <li data-filter=".filter-branding">Yoga Sessions</li>
              <li data-filter=".filter-web">Meditation</li>
              <li data-filter=".filter-print">Healthy Lifestyle</li>
              <li data-filter=".filter-motion">Wellness Events</li>
            </ul>
          </div>

          <div class="row gy-4 portfolio-grid isotope-container" data-aos="fade-up" data-aos-delay="200">

            <!-- ITEM 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/morning.png" class="img-fluid" alt="Morning Yoga Session"
                    loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/morning.png" class="glightbox zoom-link"
                        title="Morning Yoga Session">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Session Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Morning Yoga Session</h3>
                  <p>Starting the day with balance, flexibility, and calm energy.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/maditation.png" class="img-fluid" alt="Meditation Practice"
                    loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/maditation.png" class="glightbox zoom-link"
                        title="Meditation Practice">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Session Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Meditation Practice</h3>
                  <p>Guided mindfulness sessions for stress relief and inner peace.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-print">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/portfolio-portrait-5.webp" class="img-fluid"
                    alt="Healthy Living Tips" loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/portfolio-portrait-5.webp" class="glightbox zoom-link"
                        title="Healthy Living">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Healthy Living</h3>
                  <p>Balanced nutrition and mindful habits for daily wellness.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 4 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/portfolio-8.webp" class="img-fluid" alt="Wellness Workshop"
                    loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/portfolio-8.webp" class="glightbox zoom-link"
                        title="Wellness Workshop">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Event Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Wellness Workshop</h3>
                  <p>Interactive sessions focused on holistic health and mindfulness.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 5 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/features/yoga.png" class="img-fluid" alt="Group Yoga Practice" loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/features/yoga.png" class="glightbox zoom-link" title="Group Yoga Practice">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Session Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Group Yoga Practice</h3>
                  <p>Community yoga sessions that inspire motivation and positivity.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 6 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/mind.png" class="img-fluid" alt="Mindfulness Training"
                    loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/mind.png" class="glightbox zoom-link"
                        title="Mindfulness Training">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Training Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Mindfulness Training</h3>
                  <p>Learning breathing techniques to improve focus and relaxation.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 7 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-print">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="Healthy Recipes"
                    loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox zoom-link"
                        title="Healthy Recipes">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Healthy Recipes</h3>
                  <p>Nutritious meal ideas to support a balanced lifestyle.</p>
                </div>
              </div>
            </div>

            <!-- ITEM 8 -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="image-container">
                  <img src="assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt="Community Wellness Event"
                    loading="lazy">
                  <div class="overlay">
                    <div class="overlay-content">
                      <a href="assets/img/portfolio/portfolio-11.webp" class="glightbox zoom-link"
                        title="Community Wellness Event">
                        <i class="bi bi-zoom-in"></i>
                      </a>
                      <a href="portfolio-details.html" class="details-link" title="View Event Details">
                        <i class="bi bi-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <h3>Community Wellness Event</h3>
                  <p>Bringing people together through health, yoga, and mindfulness.</p>
                </div>
              </div>
            </div>

          </div><!-- End Portfolio Grid -->

        </div>
      </div>

    </section>
    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Our Experts</span>
        <h2>Meet Our Wellness Team</h2>
        <p>Our experienced yoga instructors and wellness coaches are dedicated to helping you achieve balance,
          strength, and inner peace.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 align-items-stretch">

          <div class="col-md-6 col-lg-3">
            <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="150">
              <figure class="member-media">
                <img src="assets/img/person/person-f-9.webp" class="img-fluid" alt="Yoga Instructor">
                <ul class="social-list">
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                  <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                </ul>
              </figure>
              <div class="member-content">
                <h3 class="member-name">Sophia Carter</h3>
                <p class="member-role">Senior Yoga Instructor</p>
                <p class="member-bio">Passionate about helping people build flexibility, strength, and mindfulness
                  through guided yoga practices.</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-lg-3">
            <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="200">
              <figure class="member-media">
                <img src="assets/img/person/person-m-7.webp" class="img-fluid" alt="Meditation Coach">
                <ul class="social-list">
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                  <li><a href="#"><i class="bi bi-dribbble"></i></a></li>
                </ul>
              </figure>
              <div class="member-content">
                <h3 class="member-name">Daniel Brooks</h3>
                <p class="member-role">Meditation Coach</p>
                <p class="member-bio">Guiding individuals through mindfulness and breathing techniques to achieve
                  calmness and mental clarity.</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-lg-3">
            <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="250">
              <figure class="member-media">
                <img src="assets/img/person/person-f-12.webp" class="img-fluid" alt="Nutrition Specialist">
                <ul class="social-list">
                  <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                  <li><a href="#"><i class="bi bi-behance"></i></a></li>
                </ul>
              </figure>
              <div class="member-content">
                <h3 class="member-name">Aisha Patel</h3>
                <p class="member-role">Nutrition Specialist</p>
                <p class="member-bio">Helping members adopt healthy eating habits with balanced meal plans and
                  wellness-focused nutrition tips.</p>
              </div>
            </article>
          </div>

          <div class="col-md-6 col-lg-3">
            <article class="member-card h-100" data-aos="zoom-in" data-aos-delay="300">
              <figure class="member-media">
                <img src="assets/img/person/person-m-11.webp" class="img-fluid" alt="Fitness Trainer">
                <ul class="social-list">
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                  <li><a href="#"><i class="bi bi-github"></i></a></li>
                </ul>
              </figure>
              <div class="member-content">
                <h3 class="member-name">Michael Lee</h3>
                <p class="member-role">Fitness & Wellness Trainer</p>
                <p class="member-bio">Supporting members with strength training and wellness routines that complement
                  yoga practice.</p>
              </div>
            </article>
          </div>

        </div>

        <div class="row g-4 mt-2">
          <div class="col-lg-8">
            <div class="team-highlight d-flex align-items-center" data-aos="fade-right" data-aos-delay="200">
              <div class="icon-wrap">
                <i class="bi bi-people"></i>
              </div>
              <div class="copy">
                <h4 class="title">A passionate team focused on your wellness</h4>
                <p class="desc mb-0">Our instructors work together to create a supportive and inspiring environment
                  where everyone can grow physically, mentally, and spiritually.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch">
            <aside class="join-card w-100" data-aos="fade-left" data-aos-delay="250">
              <div class="join-content">
                <h5 class="mb-2">Join Our Wellness Community</h5>
                <p class="mb-3">Become part of a supportive community focused on healthy living, yoga, and
                  mindfulness.</p>
                <a href="#" class="btn btn-join">
                  <i class="bi bi-send me-1"></i>
                  Join Now
                </a>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Contact</span>
        <h2>Contact Verve</h2>
        <p>Have questions about our yoga sessions, wellness programs, or membership? We'd love to hear from you.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-stretch">

          <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-form-container">

              <div class="form-intro">
                <h2>Start Your Wellness Journey</h2>
                <p>Send us a message if you want to learn more about our yoga classes, meditation sessions, or wellness programs.</p>
              </div>

              <form action="{{ route('contact.store') }}" method="post" class="contact-form">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" name="name" class="form-input" id="userName" placeholder="Your Name" required="">
                      <label for="userName" class="field-label">Name</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="email" class="form-input" name="email" id="userEmail" placeholder="Your Email" required="">
                      <label for="userEmail" class="field-label">Email</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="tel" class="form-input" name="phone_num" id="userPhone" placeholder="Your Phone">
                      <label for="userPhone" class="field-label">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" class="form-input" name="subject" id="messageSubject" placeholder="Subject" required="">
                      <label for="messageSubject" class="field-label">Subject</label>
                    </div>
                  </div>
                </div>

                <div class="form-field message-field">
                  <textarea class="form-input message-input" name="message" id="userMessage" rows="5"
                    placeholder="Tell us how we can help you start your wellness journey" required=""></textarea>
                  <label for="userMessage" class="field-label">Message</label>
                </div>

                <div class="my-3">
                  <div class="loading" style="display:none;">Loading...</div>
                  <div class="error-message" style="display:none; color:red;"></div>
                  <div class="sent-message" style="display:none; color:green;"></div>
                </div>
                <button type="submit" class="send-button">
                  Send Message
                  <span class="button-arrow">→</span>
                </button>

              </form>
            </div>
          </div>

          <div class="col-lg-5 order-lg-2 order-1">
            <div class="contact-sidebar">

              <div class="contact-header">
                <h3>Get in Touch</h3>
                <p>We’re here to help you begin your wellness journey with yoga, mindfulness, and healthy living.</p>
              </div>
              <div class="contact-methods">
                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Address</span>
                    <p>Verve Wellness Studio<br>Downtown Wellness Street</p>
                  </div>
                </div>
                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Email</span>
                    <p>gm1548036@gmail.com</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Phone</span>
                    <p>03246165991</p>
                  </div>
                </div>

                <div class="contact-method">
                  <div class="contact-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Hours</span>
                    <p>Monday - Friday: 7AM - 8PM<br>Saturday - Sunday: 8AM - 4PM</p>
                  </div>
                </div>

              </div>

              <div class="connect-section">
                <span class="connect-label">Connect with us</span>

                <div class="social-links">
                  <a href="#" class="social-link">
                    <i class="bi bi-linkedin"></i>
                  </a>

                  <a href="#" class="social-link">
                    <i class="bi bi-twitter-x"></i>
                  </a>

                  <a href="#" class="social-link">
                    <i class="bi bi-instagram"></i>
                  </a>

                  <a href="#" class="social-link">
                    <i class="bi bi-facebook"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    document.querySelector('.contact-form').addEventListener('submit', async function(e) {
      e.preventDefault(); // Stop page refresh

      let form = this;
      let formData = new FormData(form);
      let loading = form.querySelector('.loading');
      let errorMsg = form.querySelector('.error-message');
      let sentMsg = form.querySelector('.sent-message');
      loading.style.display = 'block';
      errorMsg.style.display = 'none';
      sentMsg.style.display = 'none';

      try {
        let response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        });

        let result = await response.json();
        loading.style.display = 'none';

        if (response.ok) {
          sentMsg.style.display = 'block';
          sentMsg.innerHTML = result.message;
          form.reset();
        } else {
          throw new Error(result.message || 'Validation Failed');
        }
      } catch (error) {
        loading.style.display = 'none';
        errorMsg.style.display = 'block';
        errorMsg.innerHTML = "Something went wrong. Please check your input.";
      }
    });
  </script>

</body>
@endsection

</html>