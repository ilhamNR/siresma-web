<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppGarbageSavingsData;
use App\Models\AppTransactionLog;
use App\Models\AppTrashCategory;
use Yajra\DataTables\Facades\DataTables;
use App\Models\AppUser;

class UserController extends Controller
{
    public function indexNasabah(Request $request)
    {
        $data = AppUser::with('TrashBank')->get();
        $data = $data->map(function ($item) {
            // dd($item->TrashBank->name);
            return [
                'id' => $item->id,
                // 'username' => $item->username,
                'full_name' => $item->full_name,
                'phone' => $item->phone,
                // ... other user attributes ...
                'trash_bank' => $item->TrashBank->name ?? "", // Add the trashBank name
                'is_verified' => $item->is_verified
            ];
        });
        // dd($data);
        if ($request->ajax()) {
            return DataTables::of($data)->toJson();
        }
        return view('admin.users.nasabah');
    }

    public function countBalance($user_id)
    {
        $store_total  = AppTransactionLog::where('user_id', $user_id)->where('type', 'store')->sum('amount');
        $withdraw_total  = AppTransactionLog::where('user_id', $user_id)->where('type', 'withdraw')->where('is_approved', 1)->sum('amount');
        return ($store_total - $withdraw_total);
    }

    public function details($id)
    {
        $user = AppUser::with('TrashBank')->findorFail($id);
        $user->balance = UserController::countBalance($id);
        $user->total_transaction = AppTransactionLog::where('user_id', $id)->count();
        // dd(Timezone::convertToLocal($user->created_at));
        return view('admin.users.details', compact('user'));
    }

    public function trashStoreLog($id)
    {
        $data = AppGarbageSavingsData::with('trashCategory')->with('iot')->where('user_id', $id)->get();
        $data = $data->map(function ($item) {
            if (isset($item->iot) && (isset($item->trashCategory))) {
                $weight = $item->iot->weight . ' ' . $item->trashCategory->unit;
            } else {
                $weight = '';
            }
            return [
                'created_at' => $item->created_at->format('Y-m-d H:i:s'),
                'id' => $item->id,
                'category' =>  $item->trashCategory->category_name ?? '',
                'weight' => $weight,
                'code' => $item->iot->code ?? '',
                'user_income' => $item->user_balance,
                'admin_income' => $item->admin_balance
            ];
        });
        return DataTables::of($data)->toJson();
    }
}
