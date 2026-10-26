@extends('layouts.app')

@section('title', 'Notifications - Anti-Procrastination App')
@section('page-title', 'Notifications')

@section('content')
<div class="card">
    <div class="card-header"><h3 class="card-title mb-0">Notifications</h3></div>
    <div class="list-group list-group-flush">
        @forelse($notifications as $notification)
            <div class="list-group-item py-3">
                <div class="d-flex justify-content-between gap-3">
                    <div>
                        <div class="fw-semibold">{{ ucfirst($notification->type) }}</div>
                        <div>{{ $notification->message }}</div>
                        <div class="small text-secondary mt-1">
                            {{ $notification->task?->title ?? 'General notification' }}
                        </div>
                    </div>
                    <div class="text-end">
                        <span class="badge {{ $notification->is_read ? 'text-bg-secondary' : 'text-bg-primary' }}">
                            {{ $notification->is_read ? 'Read' : 'Unread' }}
                        </span>
                        <div class="small text-secondary mt-2">
                            {{ $notification->notification_time?->format('d M Y H:i') ?? '-' }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="list-group-item text-center py-4 text-secondary">No notifications available.</div>
        @endforelse
    </div>
</div>
@endsection
