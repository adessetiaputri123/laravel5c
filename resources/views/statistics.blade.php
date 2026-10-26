@extends('layouts.app')

@section('title', 'Statistics - Anti-Procrastination App')
@section('page-title', 'Statistics')

@section('content')
<div class="card">
    <div class="card-header"><h3 class="card-title mb-0">Daily Productivity Statistics</h3></div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Completed</th>
                        <th>Delayed</th>
                        <th>Focus Minutes</th>
                        <th>Score</th>
                        <th>Streak</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($statistics as $statistic)
                        <tr>
                            <td>{{ $statistic->date?->format('d M Y') ?? '-' }}</td>
                            <td>{{ $statistic->completed_tasks }}</td>
                            <td>{{ $statistic->delayed_tasks }}</td>
                            <td>{{ $statistic->focus_minutes }}</td>
                            <td>{{ number_format((float) $statistic->productivity_score, 2) }}</td>
                            <td>{{ $statistic->current_streak }} day(s)</td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center py-4 text-secondary">No statistics available.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
