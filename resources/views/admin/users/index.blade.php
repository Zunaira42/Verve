@extends('layouts.app')
@section('title', 'School of Enablers | Users')
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
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box start-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users</h3>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Created Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">{{$user->created_at->format('Y-m-d') }}</td>
                                <td class="text-center"> <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-sm btn-primary">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
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