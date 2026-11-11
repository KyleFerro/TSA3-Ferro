@extends('layouts.app', ['title' => 'All Tasks | Tasks for Today'])

@section('content')
    <div class="eyebrow">Complete schedule</div>
    <h1>All tasks</h1>
    <p class="intro">Every task in the system, ordered chronologically by task date.</p>

    <section class="task-panel">
        <div class="panel-heading">
            <h2>Task list</h2>
            <span class="count">{{ $tasks->count() }} total</span>
        </div>
        @foreach ($tasks as $task)
            <article class="task-row">
                <div>
                    <h3>{{ $task->title }}</h3>
                    <p>{{ $task->task_date->format('F j, Y') }}</p>
                </div>
                <span class="status status-{{ Illuminate\Support\Str::slug($task->status) }}">{{ ucfirst($task->status) }}</span>
            </article>
        @endforeach
    </section>
@endsection
