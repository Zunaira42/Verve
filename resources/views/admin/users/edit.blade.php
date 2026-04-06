@extends('layouts.app')
@section('title', 'Users')
@section('page-title', 'Users')
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
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box start-->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>

                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                        </div>

                        <div class="form-group mt-2">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                        </div>
                        <div class="form-group mt-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Update</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3 mb-2">Back</a>
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