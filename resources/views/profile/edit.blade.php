@extends('layouts.app')
@section('page-title', 'Profile Settings')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card mb-4 border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-1">Profile Information</h4>
                    <p class="text-muted small mb-4">Update your account's profile information and email address.</p>
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Password Update Section -->
            <div class="card mb-4 border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-1">Update Password</h4>
                    <p class="text-muted small mb-4">Ensure your account is using a long, random password to stay secure.</p>
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="card border-danger shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold text-danger mb-1">Delete Account</h4>
                    <p class="text-muted small mb-4">Once your account is deleted, all of its resources and data will be permanently deleted.</p>
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .max-w-xl {
        max-width: 36rem;
    }

    .rounded-4 {
        border-radius: 0.75rem !important;
    }

    main {
        background-color: #f3f4f6 !important;
    }

    /* Breeze light gray bg */
</style>
@endsection