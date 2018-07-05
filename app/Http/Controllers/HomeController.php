<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class HomeController extends Controller
{
    public function index()
    {
        $soldout = Products::where('status', 'sold out')->count();

        $charts_size = 251.327;

        $charts_year = 365;
        $charts_month = $charts_year / 12;
        $charts_week = $charts_month / 4;
        $charts_day = $charts_week / 7;

        $charts_year_goal = 1600;
        $charts_month_goal = $charts_year_goal / 12;
        $charts_week_goal = $charts_month_goal / 4;
        $charts_day_goal = $charts_week_goal / 7;

        $charts_year_current = $charts_size / $charts_year_goal;
        $charts_month_current = $charts_size / $charts_month_goal;
        $charts_week_current = $charts_size / $charts_week_goal;
        $charts_day_current = $charts_size / $charts_day_goal;

        return view('home')
            ->with('soldout', $soldout)
            ->with('charts_year_current', $charts_year_current)
            ->with('charts_month_current', $charts_month_current)
            ->with('charts_week_current', $charts_week_current)
            ->with('charts_day_current', $charts_day_current)
        ;
    }
}
