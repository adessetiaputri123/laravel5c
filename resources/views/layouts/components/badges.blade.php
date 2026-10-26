<div class="row g-3 mb-4">
    <div class="col-6 col-xl-3">
        <div class="card content-card">
            <div class="card-body">
                <div class="metric-value">{{ $stats['total_tasks'] ?? 0 }}</div>
                <div class="metric-label">Total Tasks</div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="card content-card">
            <div class="card-body">
                <div class="metric-value">{{ $stats['completed_tasks'] ?? 0 }}</div>
                <div class="metric-label">Completed</div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="card content-card">
            <div class="card-body">
                <div class="metric-value">{{ $stats['pending_tasks'] ?? 0 }}</div>
                <div class="metric-label">Pending / Active</div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="card content-card">
            <div class="card-body">
                <div class="metric-value">{{ $stats['focus_minutes'] ?? 0 }}</div>
                <div class="metric-label">Focus Minutes</div>
            </div>
        </div>
    </div>
</div>
