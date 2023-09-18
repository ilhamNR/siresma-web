<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function landfillData()
    {
        return view('public.statistic.landfill');
    }
    public function wasteComposition()
    {
        return view('public.statistic.waste-composition');
    }
}
