@extends('layouts.app', ['title' => 'Today | Tasks for Today'])

@section('content')
    <div class="eyebrow">Daily overview</div>
    <h1>Tasks for today</h1>
    <p class="intro">A focused view of everything scheduled for {{ today()->format('F j, Y') }}.</p>

    <section class="task-panel">
        <div class="panel-heading">
            <h2>Today’s tasks</h2>
            <span class="count">{{ $tasks->count() }} {{ Illuminate\Support\Str::plural('task', $tasks->count()) }}</span>
        </div>
        @forelse ($tasks as $task)
            <article class="task-row">
                <div>
                    <h3>{{ $task->title }}</h3>
                    <p>{{ $task->task_date->format('F j, Y') }}</p>
                </div>
                <span class="status status-{{ Illuminate\Support\Str::slug($task->status) }}">{{ ucfirst($task->status) }}</span>
            </article>
        @empty
            <p class="empty">There are no tasks scheduled for today.</p>
        @endforelse
    </section>
@endsection
