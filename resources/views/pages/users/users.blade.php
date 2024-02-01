@extends('admin')

@section('content')

<div class="col-xl-12 col-md-12 mb-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6 col-xl-8 col-12 mb-0">
                    <h5> Users List ({{ $users->total() }}) </h5>
                </div>
                <div class="col-lg-2 col-xl-2 col-12 mb-0">
                    <input type="text" class="form-control" placeholder="search">
                </div>
                <div class="col-lg-2 col-xl-2 col-12 d-flex align-items-center mb-0">
                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Add New </a>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-striped mb-3">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th width="150">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ ucfirst($user->name) }} </td>
                        <td>{{ $user->username }}</td>
                        <td> {{ $user->email }} </td>
                        <td> <span class="badge bg-label-primary me-1">{{ $user->roles->name }}</span></td>
                        <td> <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"> <i class="ti ti-pencil "></i> </a>
                            <form action="{{ route('users.destroy', $user->id ) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"> <i class="ti ti-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex float-end mr-2">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection