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
                    <h3 class="card-title">Edit Contact</h3>
                </div>

                <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name', $contact->name) }}" class="form-control" required>
                        </div>

                        <div class="form-group mt-2">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', $contact->email) }}" class="form-control" required>
                        </div>

                        <div class="form-group mt-2">
                            <label>Phone Number</label>
                            <input type="text" name="phone_num" value="{{ old('phone_num', $contact->phone_num) }}" class="form-control" required>
                        </div>

                        <div class="form-group mt-2">
                            <label>Subject</label>
                            <input type="text" name="subject" value="{{ old('subject', $contact->subject) }}" class="form-control" required>
                        </div>

                        <div class="form-group mt-2">
                            <label>Message</label>
                            <input type="text" name="message" value="{{ old('message', $contact->message) }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Update</button>
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary mt-3 mb-2">Back</a>
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