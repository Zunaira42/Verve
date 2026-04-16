@extends('layouts.app')
@section('title', 'Create Contact')
@section('page-title', 'Create Contact')

@section('styles')
<style>
    .card-title {
        font-size: 25px;
        font-weight: 500;
        margin: auto;
    }
    label {
        margin: 10px 0px;
        font-size: 18px;
        font-weight: 600;
    }
    .card-footer {
        text-align: end;
    }
</style>
@endsection

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Contact</h3>
                </div>

                <form action="{{ route('admin.contacts.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name" required>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter email" required>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label>Phone</label>
                            <input type="text" name="phone_num" value="{{ old('phone_num') }}" class="form-control" placeholder="Enter phone number">
                        </div>

                        <div class="form-group mt-2">
                            <label>Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" placeholder="Enter subject">
                        </div>

                        <div class="form-group mt-2">
                            <label>Message</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Enter message">{{ old('message') }}</textarea>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary mt-3 mb-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
