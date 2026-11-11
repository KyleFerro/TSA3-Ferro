@extends('layouts.app', ['title' => 'Profile | Tasks for Today'])

@section('content')
    <div class="eyebrow">Account</div>
    <h1>Profile</h1>
    <p class="intro">The single user record stored for this task-management application.</p>

    <section class="profile-card">
        <div class="avatar">{{ strtoupper(substr($user->full_name, 0, 1)) }}</div>
        <div>
            <h2>{{ $user->full_name }}</h2>
            <p class="username">{{ '@' . $user->username }}</p>
            <p>{{ $user->email }}</p>
        </div>
    </section>
@endsection
