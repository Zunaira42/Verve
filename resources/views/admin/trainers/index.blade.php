@extends('layouts.app')
@section('title', 'Verve | trainer')
@section('styles')
@endsection
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title d-inline">Trainers</h3>
                    <div class="card-tools float-right">
                        <a href="{{ route('admin.trainers.create') }}" class="btn btn-primary btn-sm">
                            Create Trainer
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Created Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trainers as $trainer)
                            <tr>
                                <td class="text-center">{{$trainer->id}}</td>
                                <td class="text-center">{{$trainer->name}}</td>
                                <td class="text-center">{{$trainer->role}}</td>
                                <td class="text-center">{{$trainer->description}}</td>
                                <td class="text-center">{{$trainer->created_at->format('Y-m-d') }}</td>
                                <td class="text-center"> <a href="{{route('admin.trainers.edit',$trainer->id)}}" class="btn btn-sm btn-primary">Edit</a></td>
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