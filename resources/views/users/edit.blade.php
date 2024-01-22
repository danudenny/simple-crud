@extends('welcome')

@section('content')
<div class="card">
    {{-- d-flex display: flex --}}
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <span>Edit User</span>
        </div>
    </div>

    {{-- Create / Update / Delete (method == POST), csrf_field() dibawah form --}}
    <form method="POST" action={{ route('users.update', $user->id) }}>
        @method("PUT")
        {{ csrf_field() }}
        <div class="card-body">
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end gap-1">
            <a class="btn btn-secondary" href={{ route('users.index') }}>Back</a>
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection