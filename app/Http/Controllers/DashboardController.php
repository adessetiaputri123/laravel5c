<?php

namespace App\Http\Controllers;

use App\Models\FocusSession;
use App\Models\Notification;
use App\Models\Task;
use App\Models\UserStatistic;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_tasks' => Task::count(),
            'completed_tasks' => Task::where('status', 'completed')->count(),
            'pending_tasks' => Task::whereIn('status', ['pending', 'in_progress', 'delayed'])->count(),
            'focus_minutes' => FocusSession::sum('duration_minutes'),
            'unread_notifications' => Notification::where('is_read', false)->count(),
            'productivity_score' => UserStatistic::latest('date')->value('productivity_score') ?? 0,
            'current_streak' => UserStatistic::latest('date')->value('current_streak') ?? 0,
        ];

        $latestTasks = Task::with('category')
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact('stats', 'latestTasks'));
    }
}
