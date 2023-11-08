<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppTransactionLog;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Carbon;

class OutcomingTransactionController extends Controller
{
    public function index(Request $request)
    {
        $data = AppTransactionLog::where('type', 'WITHDRAW')->with('users')->get();
        $data = $data->map(function($item) {
            if ($item->is_approved === 1){
                $status = "APPROVED";
            } else{
                $status = "PENDING";
            }
            return[
                'created_at' => Carbon::parse($item->created_at)->timezone(session('timezone'))->format('Y-m-d H:i:s'),
                'code' => $item->code,
                'user' => $item->users->full_name,
                'amount' => $item->amount,
                'status' => $status,
                'id' => $item->id

            ];
        });
        $outcome_total =  $data->sum('amount');
        if ($request->ajax()) {
            return DataTables::of($data)->toJson();
        }
        return view('admin.transaction.outcoming.index', compact('outcome_total'));
    }
}
