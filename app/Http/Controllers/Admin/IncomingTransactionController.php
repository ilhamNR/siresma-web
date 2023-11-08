<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppTransactionLog;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class IncomingTransactionController extends Controller
{
    public function index(Request $request){
        // dd(session('timezone'));
        $data = AppTransactionLog::where('type', 'STORE')->with('users')->get();
        $data = $data->map(function($item) {
            return[
                'created_at' => Carbon::parse($item->created_at)->timezone(session('timezone'))->format('Y-m-d H:i:s'),
                'code' => $item->code,
                'user' => $item->users->full_name,
                'amount' => $item->amount,
                'id' => $item->id

            ];
        });
        $income_total =  $data->sum('amount');
        if ($request->ajax()){
            return DataTables::of($data)->toJson();
        }
        return view('admin.transaction.incoming.index', compact('income_total'));
    }
}
