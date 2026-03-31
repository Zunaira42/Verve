@extends('app.layouts.app')
@section('title','Program')
@section('content')
<main class="main">
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-2.webp);">
        <div class="container position-relative">
            <h1>Training Program Details</h1>
            <p>Discover our professional fitness programs designed to improve strength, endurance, and overall health.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li class="current">Program Details</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="service-hero">
                        <div class="service-meta">
                            <span class="service-category">Fitness Training</span>
                            <span class="reading-time">5 min read</span>
                        </div>
                        <h1>Personal Fitness Transformation</h1>
                        <p class="service-description">
                            Our personalized training programs help you achieve your fitness goals through professional coaching, structured workouts, and continuous motivation.
                        </p>
                    </div>
                    <div class="service-visual">
                        <img src="assets/img/services/services-7.webp" alt="Gym Training Program" class="img-fluid">
                    </div>
                    <div class="service-narrative">
                        <h3>Transform Your Body & Lifestyle</h3>
                        <p>At Verve Gym, we focus on helping members build strength, improve endurance, and develop healthy habits. Our expert trainers guide you through customized workout plans designed for your fitness level and goals.</p>
                        <p>Whether your goal is weight loss, muscle building, or improving overall fitness, our training programs are structured to deliver real and sustainable results.</p>
                        <div class="benefits-grid">
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <h4>Improved Strength</h4>
                                <p>Build muscle and increase physical strength through structured resistance training.</p>
                            </div>
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h4>Injury Prevention</h4>
                                <p>Learn proper techniques and exercises that reduce the risk of injuries.</p>
                            </div>
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                                <h4>Fitness Progress</h4>
                                <p>Track your performance and continuously improve your fitness level.</p>
                            </div>
                            <div class="benefit-card">
                                <div class="benefit-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h4>Expert Trainers</h4>
                                <p>Work with certified trainers who guide and motivate you throughout your journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-section">
                        <h3>Your Fitness Journey</h3>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-marker">
                                    <span>1</span>
                                </div>
                                <div class="timeline-content">
                                    <h4>Fitness Assessment</h4>
                                    <p>We evaluate your current fitness level, body composition, and personal goals.</p>
                                    <small>Week 1</small>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker">
                                    <span>2</span>
                                </div>
                                <div class="timeline-content">
                                    <h4>Customized Workout Plan</h4>
                                    <p>Our trainers design a personalized workout and nutrition plan for your needs.</p>
                                    <small>Week 2</small>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker">
                                    <span>3</span>
                                </div>
                                <div class="timeline-content">
                                    <h4>Training & Progress Tracking</h4>
                                    <p>Follow guided workouts while tracking improvements in strength and endurance.</p>
                                    <small>Week 3 - 12</small>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker">
                                    <span>4</span>
                                </div>
                                <div class="timeline-content">
                                    <h4>Advanced Training</h4>
                                    <p>Upgrade your program with advanced workouts and performance training.</p>
                                    <small>Week 13+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-sidebar">
                        <div class="overview-card">
                            <div class="overview-header">
                                <h4>Program Overview</h4>
                            </div>
                            <div class="overview-stats">
                                <div class="stat-item">
                                    <div class="stat-number">12</div>
                                    <div class="stat-label">Weeks Program</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">90%</div>
                                    <div class="stat-label">Success Rate</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-label">Trainer Support</div>
                                </div>
                            </div>
                            <div class="overview-details">
                                <div class="detail-row">
                                    <span class="detail-label">Membership</span>
                                    <span class="detail-value">Flexible Plans</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Trainer Support</span>
                                    <span class="detail-value">Certified Coaches</span>
                                </div>
                                <div class="detail-row">
                                    <span class="detail-label">Facilities</span>
                                    <span class="detail-value">Cardio, Strength & Functional Training</span>
                                </div>
                            </div>
                        </div>
                        <div class="success-story">
                            <div class="story-quote">
                                <p>"Joining Verve Gym completely changed my lifestyle. The trainers are supportive and the programs helped me lose weight while gaining strength."</p>
                            </div>
                            <div class="story-author">
                                <img src="assets/img/person/person-m-8.webp" alt="Gym Member" class="author-avatar">
                                <div class="author-details">
                                    <h5>David Miller</h5>
                                    <span>Gym Member</span>
                                    <small>Verve Fitness Community</small>
                                </div>
                            </div>
                            <div class="story-metrics">
                                <div class="metric">
                                    <span class="metric-value">20kg</span>
                                    <span class="metric-label">Weight Loss</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">2x</span>
                                    <span class="metric-label">Strength Gain</span>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-form">
                            <div class="form-header">
                                <h4>Schedule Consultation</h4>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                            </div>
                            <form action="{{ route('contact.store') }}" method="post" class="contact-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-input" placeholder="Full Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-input" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone_num" class="form-input" placeholder="Phone Number">
                                </div>
                                <input type="hidden" name="subject" value="Business Process Optimization Consultation">
                                <div class="form-group">
                                    <textarea name="message" class="form-input" rows="4" placeholder="Tell us about your current challenges and goals..." required=""></textarea>
                                </div>
                                <div class="loading" style="display:none;">Loading...</div>
                                <div class="error-message" style="display:none; color:red;"></div>
                                <div class="sent-message" style="display:none; color:green;"></div>

                                <button type="submit" class="btn-consultation">
                                    <span>Book Free Consultation</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection

</html>