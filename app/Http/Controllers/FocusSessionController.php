<?php

namespace App\Http\Controllers;

use App\Models\FocusSession;

class FocusSessionController extends Controller
{
    public function index()
    {
        $focusSessions = FocusSession::with(['user', 'task'])
            ->latest('start_time')
            ->get();

        return view('focus-sessions', compact('focusSessions'));
    }
}
