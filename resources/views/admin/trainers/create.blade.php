@extends('layouts.app')
@section('title', 'Create Trainer')
@section('page-title', 'Create Trainer')

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
                    <h3 class="card-title">Add New Trainer</h3>
                </div>

                <form action="{{ route('admin.trainers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter name" required>
                            </div>

                            <div class="col-md-12 form-group">
                                <label>Role</label>
                                <input type="text" name="role" value="{{ old('role') }}" class="form-control" placeholder="Senior Trainer" required>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Trainer Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Speciality</label>
                                <input type="text" name="speciality" value="{{ old('speciality') }}" class="form-control" placeholder="Yoga, Gym" required>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Experience</label>
                                <input type="text" name="experience" value="{{ old('experience') }}" class="form-control" placeholder="5 Years" required>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Certification</label>
                                <input type="text" name="certification" value="{{ old('certification') }}" class="form-control" placeholder="Enter certification" required>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter trainer description" required>{{ old('description') }}</textarea>
                        </div>

                        <input type="hidden" name="is_enabled" value="1">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                        <a href="{{ route('admin.trainers.index') }}" class="btn btn-secondary mt-3 mb-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection