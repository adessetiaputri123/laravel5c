@extends('layouts.app')

@section('title', 'Dashboard - Anti-Procrastination App')
@section('page-title', 'Dashboard')

@section('content')
    @include('layouts.components.badges')

    <div class="row g-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">
                        <i class="bi bi-list-check me-2"></i>Latest Tasks
                    </h3>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($latestTasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->category?->category_name ?? 'No category' }}</td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                {{ str_replace('_', ' ', ucfirst($task->status)) }}
                                            </span>
                                        </td>
                                        <td>
                                            {{ $task->deadline?->format('d M Y H:i') ?? '-' }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-secondary">
                                            No tasks available yet.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('tasks') }}" class="btn btn-primary btn-sm">
                        View all tasks
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title mb-0">Productivity</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="text-secondary">Productivity Score</div>
                        <div class="fs-2 fw-bold">{{ number_format((float) ($stats['productivity_score'] ?? 0), 2) }}</div>
                    </div>

                    <div class="mb-3">
                        <div class="text-secondary">Current Streak</div>
                        <div class="fs-4 fw-semibold">
                            {{ $stats['current_streak'] ?? 0 }} day(s)
                        </div>
                    </div>

                    <div>
                        <div class="text-secondary">Unread Notifications</div>
                        <div class="fs-4 fw-semibold">
                            {{ $stats['unread_notifications'] ?? 0 }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5>Quick Focus</h5>
                    <p class="text-secondary mb-0">
                        Break large tasks into smaller steps, focus for a short session,
                        and keep your progress visible.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
