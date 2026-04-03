@extends('app.layouts.app')

@section('title','Home')

@section('content')
<main class="main">
    <div class="page-title dark-background" style="background-image: url(assets/img/trainer/trainer.png);">
        <div class="container position-relative">
            <h1>Our Trainers</h1>
            <p>Discover our professional fitness programs designed to improve strength, endurance, and overall health.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{route('/')}}">Home</a></li>
                    <li class="current">Trainers</li>
                </ol>
            </nav>
        </div>
    </div>
    <section id="trainers" class="trainers section">
        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Our Professional Trainers</h2>
                <p>Meet our expert trainers</p>
            </div>

            <div class="row">

                <!-- Trainer 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="trainer-card">
                        <div class="trainer-image">
                            <img src="assets/img/trainer/trainer.png" class="img-fluid" alt="Trainer">
                        </div>
                        <div class="trainer-info">
                            <h4>Ali Khan</h4>
                            <span class="trainer-type">Personal Trainer</span>
                            <p>Expert in weight loss and muscle building programs.</p>

                            <ul class="trainer-specs">
                                <li><strong>Experience:</strong> 5 Years</li>
                                <li><strong>Specialty:</strong> Weight Loss</li>
                                <li><strong>Certification:</strong> Certified Fitness Coach</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Trainer 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="trainer-card">
                        <div class="trainer-image">
                            <img src="assets/img/trainer/trainer2.png" class="img-fluid" alt="Trainer">
                        </div>
                        <div class="trainer-info">
                            <h4>Ahmed Raza</h4>
                            <span class="trainer-type">Strength Coach</span>
                            <p>Specialized in strength training and bodybuilding.</p>

                            <ul class="trainer-specs">
                                <li><strong>Experience:</strong> 7 Years</li>
                                <li><strong>Specialty:</strong> Muscle Gain</li>
                                <li><strong>Certification:</strong> IFBB Certified</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Trainer 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="trainer-card">
                        <div class="trainer-image">
                            <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="Trainer">
                        </div>
                        <div class="trainer-info">
                            <h4>Sara Ali</h4>
                            <span class="trainer-type">Yoga Instructor</span>
                            <p>Helps improve flexibility and mental wellness.</p>

                            <ul class="trainer-specs">
                                <li><strong>Experience:</strong> 4 Years</li>
                                <li><strong>Specialty:</strong> Yoga & Meditation</li>
                                <li><strong>Certification:</strong> Yoga Alliance Certified</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection