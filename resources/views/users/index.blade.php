@extends('layout.master')
@section('title', 'Users')
@section('content')
    <div class="d-flex justify-content-between flex-row mb-3">
        <h2 class="mb-0">User's Data</h2>
        <a href="{{ url('/users/create') }}" type="button" class="btn btn-primary">Create User</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ url("/users/{$user->id}") }}" type="button"
                                    class="btn btn-sm btn-primary">Show</a>
                                <a href="{{ url("/users/{$user->id}/edit") }}" type="button"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url("/users/{$user->id}") }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
