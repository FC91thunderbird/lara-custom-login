@extends('admin')


@section('content')


<div class="col-xl-12 col-md-12 mb-4">
    <div class="card">
        <h5 class="card-header"> @if(isset($user)) Edit @else Add @endif User <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary float-end">Back </a> </h5>
        <div class="card-body">
            @if(isset($user))
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @method('PUT')
            @else
            <form action="{{ route('users.store') }}" method="post">
            @endif
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}">
                        @error('name') <span class="text-danger"> {{ $message }} </span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Username </label>
                        <input type="text" name="username" class="form-control" value="{{ old('username', $user->username ?? '') }}">
                        @error('username') <span class="text-danger"> {{ $message}} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Email </label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}">
                        @error('email') <span class="text-danger">{{ $message}} </span> @enderror
                    </div>
                    @if(!isset($user))
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password') <span class="text-danger">{{$message}} </span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirm" class="form-control">
                        @error('password_confirm') <span class="text-danger">{{$message}} </span> @enderror
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label"> Role </label>
                        <select name="roleId" class="form-select">
                            <option value="">Select Role</option>
                            @foreach($roles as $role)
                            @if(isset($user))
                            <option value="{{ $role->id }}" {{ ($user->roleId === $role->id) ? 'selected' :'' }}> {{ ucfirst($role->name) }} </option>
                            @else
                            <option value="{{ $role->id }}" {{(old('roleId') === $role->id) ? 'selected':'' }}>{{ ucfirst($role->name) }}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('roleId') <span class="text-danger">{{ $message}} </span> @enderror
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button type="reset" class="btn btn-sm btn-info">Cancel</button>
                </form>
        </div>
    </div>
</div>

@endsection