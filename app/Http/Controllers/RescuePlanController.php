<?php

namespace App\Http\Controllers;

use App\Models\RescuePlan;

class RescuePlanController extends Controller
{
    public function index()
    {
        $rescuePlans = RescuePlan::with('task')
            ->latest()
            ->get();

        return view('rescue-plans', compact('rescuePlans'));
    }
}
