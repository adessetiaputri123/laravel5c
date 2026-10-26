@extends('layouts.app')

@section('title', 'Rescue Plans - Anti-Procrastination App')
@section('page-title', 'Rescue Plans')

@section('content')
<div class="row g-3">
    @forelse($rescuePlans as $plan)
        <div class="col-md-6 col-xl-4">
            <div class="card content-card">
                <div class="card-header">
                    <h3 class="card-title mb-0">{{ $plan->task?->title ?? 'Task' }}</h3>
                </div>
                <div class="card-body">
                    <p class="mb-2"><strong>Remaining:</strong> {{ $plan->remaining_minutes }} minutes</p>
                    <p class="mb-2"><strong>Days left:</strong> {{ $plan->days_remaining }}</p>
                    <p class="mb-3"><strong>Daily target:</strong> {{ $plan->daily_target_minutes }} minutes</p>
                    <div class="alert alert-light border mb-0">
                        {{ $plan->recommendation ?: 'Keep working consistently every day.' }}
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12"><div class="alert alert-secondary">No rescue plans available.</div></div>
    @endforelse
</div>
@endsection
