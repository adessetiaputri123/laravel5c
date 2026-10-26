@extends('layouts.app')

@section('title', 'Tasks - Anti-Procrastination App')
@section('page-title', 'Tasks')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title mb-0">Task List</h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Difficulty</th>
                        <th>Estimate</th>
                        <th>Deadline</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                        <tr>
                            <td>
                                <strong>{{ $task->title }}</strong>
                                @if($task->description)
                                    <div class="small text-secondary">{{ \Illuminate\Support\Str::limit($task->description, 55) }}</div>
                                @endif
                            </td>
                            <td>{{ $task->category?->category_name ?? 'No category' }}</td>
                            <td>{{ ucfirst($task->difficulty) }}</td>
                            <td>{{ $task->estimated_minutes ?? 0 }} min</td>
                            <td>{{ $task->deadline?->format('d M Y H:i') ?? '-' }}</td>
                            <td>
                                <span class="badge text-bg-secondary">
                                    {{ str_replace('_', ' ', ucfirst($task->status)) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center py-4 text-secondary">No tasks available.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
