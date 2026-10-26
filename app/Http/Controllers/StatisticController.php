<?php

namespace App\Http\Controllers;

use App\Models\UserStatistic;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = UserStatistic::with('user')
            ->latest('date')
            ->get();

        return view('statistics', compact('statistics'));
    }
}
