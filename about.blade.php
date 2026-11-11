@extends('layouts.app', ['title' => 'About | Tasks for Today'])

@section('content')
    <div class="eyebrow">Project information</div>
    <h1>About this system</h1>
    <p class="intro">Tasks for Today is a small Laravel task-management application created for IT0049 Technical Summative Assessment 3.</p>

    <section class="about-copy">
        <h2>Developer</h2>
        <p>This application was developed by Kyle Christian Ferro using Laravel, Eloquent ORM, migrations, seeders, controllers, routes, and Blade views.</p>
        <h2>Purpose</h2>
        <p>The system demonstrates how a database-backed Laravel application can retrieve today’s tasks, display a complete task schedule, and show a user profile through separate views that share one Eloquent data layer.</p>
    </section>
@endsection
