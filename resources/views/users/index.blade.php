@extends('welcome')

@section('content')
<div class="card">
    {{-- d-flex display: flex --}}
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <span>Users Data</span>
            <a class="btn btn-primary" href="{{ route('users.create') }}">Create User</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <a class="btn btn-sm btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <form method="POST" action={{ route('users.destroy', $user->id) }}>
                                @method("DELETE")
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer"></div>
</div>
@endsection