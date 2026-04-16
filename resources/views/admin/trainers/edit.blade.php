@extends('layouts.app')
@section('title', 'Contact')
@section('page-title', 'Contact')
@section('styles')
<style>
    .table td {
        vertical-align: middle;
    }

    .product-image-thumbs {
        margin-top: 0;
    }

    .product-image-thumb {
        margin-right: inherit;
        padding: .2rem;
        max-width: 4rem;
    }

    .card-title {
        font-size: 25px;
        font-weight: 500;
        align-items: center;
        margin: auto;
    }

    label {
        margin: 10px 0px;
        font-size: 22px;
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
                    <h3 class="card-title">Edit Trainer</h3>
                </div>

                <form action="{{ route('admin.trainers.update', $trainer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name', $trainer->name) }}" class="form-control" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Role</label>
                                <input type="text" name="role" value="{{ old('role', $trainer->role) }}" class="form-control" placeholder="e.g. Lead Trainer" required>
                            </div>
                            <div class="col-md-12 form-group mt-2">
                                <label>Status</label>
                                <select name="is_enabled" class="form-control">
                                    <option value="1" {{ old('is_enabled', $trainer->is_enabled) == 1 ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ old('is_enabled', $trainer->is_enabled) == 0 ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Trainer Image</label>
                                <input type="file" name="image" class="form-control">
                                @if($trainer->image)
                                <small class="text-muted">Current: {{ $trainer->image }}</small>
                                @endif
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Speciality</label>
                                <input type="text" name="speciality" value="{{ old('speciality', $trainer->speciality) }}" class="form-control" placeholder="e.g. Yoga, HIIT" required>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Experience</label>
                                <input type="text" name="experience" value="{{ old('experience', $trainer->experience) }}" class="form-control" placeholder="e.g. 5 Years" required>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Certification</label>
                                <input type="text" name="certification" value="{{ old('certification', $trainer->certification) }}" class="form-control" required>
                            </div>

                            <div class="col-md-12 form-group mt-2">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="4" required>{{ old('description', $trainer->description) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Update Trainer</button>
                        <a href="{{ route('admin.trainers.index') }}" class="btn btn-secondary mt-3 mb-2">Back</a>
                    </div>
                </form>

            </div>

        </div>
        <!-- Default box end-->
    </div>
</div>
</div>

@endsection



@section('scripts')
<script>
    function updateStatus(statusRequired, id) {
        Swal.fire({
                title: 'Are you sure?',
                text: "You want to " + statusRequired + " this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, ' + statusRequired + ' it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $('#product-status-' + id).submit();
                }
            })
    }

    function removeRecord(id) {
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $('#product-delete-' + id).submit();
                }
            })
    }
</script>
@endsection