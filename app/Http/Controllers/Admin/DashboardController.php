<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppUser;
use App\Models\AppGarbageSavingsData;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = AppUser::count();
        $adminIncome = AppGarbageSavingsData::sum('admin_balance');
        $garbageStoreCount = AppGarbageSavingsData::count();

        return view('admin.dashboard', compact('userCount','adminIncome','garbageStoreCount'));
    }
}
