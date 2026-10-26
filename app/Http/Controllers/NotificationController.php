<?php

namespace App\Http\Controllers;

use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::with(['user', 'task'])
            ->latest('notification_time')
            ->get();

        return view('notifications', compact('notifications'));
    }
}
