@extends('layouts.app')

@section('title', 'Categories - Anti-Procrastination App')
@section('page-title', 'Categories')

@section('content')
<div class="row g-3">
    @forelse($categories as $category)
        <div class="col-md-6 col-xl-4">
            <div class="card content-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="mb-1">{{ $category->category_name }}</h5>
                            <div class="text-secondary">{{ $category->tasks_count }} task(s)</div>
                        </div>
                        <i class="bi bi-tag fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-secondary">No categories available.</div>
        </div>
    @endforelse
</div>
@endsection
