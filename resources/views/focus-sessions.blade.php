@extends('layouts.app')

@section('title', 'Focus Sessions - Anti-Procrastination App')
@section('page-title', 'Focus Sessions')

@section('content')
<div class="card">
    <div class="card-header"><h3 class="card-title mb-0">Focus History</h3></div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Duration</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($focusSessions as $session)
                        <tr>
                            <td>{{ $session->task?->title ?? 'General focus' }}</td>
                            <td>{{ $session->start_time?->format('d M Y H:i') ?? '-' }}</td>
                            <td>{{ $session->end_time?->format('d M Y H:i') ?? '-' }}</td>
                            <td>{{ $session->duration_minutes }} min</td>
                            <td><span class="badge text-bg-secondary">{{ ucfirst($session->status) }}</span></td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center py-4 text-secondary">No focus sessions available.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
