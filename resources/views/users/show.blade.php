@extends('layout.master')
@section('title', $user->name)
@section('content')
    <h2>User Detail</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/users') }}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>
                <dt class="col-sm-3">Created at</dt>
                <dd class="col-sm-9">{{ $user->created_at }}</dd>
                <dt class="col-sm-3">Last Updated</dt>
                <dd class="col-sm-9">{{ $user->updated_at }}</dd>
            </dl>
        </div>
    </div>
@endsection
