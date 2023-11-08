<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppGarbageSavingsData;
use App\Models\AppTransactionLog;
use App\Models\AppTrashBank;
use App\Models\AppTrashCategory;
use Yajra\DataTables\Facades\DataTables;
use App\Models\AppUser;
use App\Http\Requests\UpdateAppUserRequest;
use Exception;
use App\Traits\APIResponseTrait;
class UserController extends Controller
{
    use APIResponseTrait;
    public function indexNasabah(Request $request)
    {
        $data = AppUser::with('TrashBank')->where('role', "NASABAH")->get();
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

        $trashBank = AppTrashBank::all();
        // dd(Timezone::convertToLocal($user->created_at));
        return view('admin.users.details', compact('user', 'trashBank'));
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

    public function transactionLog($id)
    {
        $data = AppTransactionLog::where('user_id', $id)->get();
        $data = $data->map(function ($item) {
            if ($item->type === 'WITHDRAW' && $item->is_approved === 1) {
                $status = "APPROVED";
            } else if ($item->type === 'WITHDRAW' && $item->is_approved === 0) {
                $status = "PENDING";
            } else {
                $status = "ACCEPTED";
            }
            return [
                'created_at' => $item->created_at->format('Y-m-d H:i:s'),
                'code' => $item->code,
                'type' => $item->type,
                'amount' => $item->amount,
                'status' => $status,
                'id' => $item->id
            ];
        });
        return DataTables::of($data)->toJson();
    }
    public function updateUser(Request $request, $id)
    {
        $user = AppUser::findOrFail($id);
        try {
            $user->update([
                'full_name' => $request->fullname,
                'username' => $request->username,
                'phone' => $request->phone,
                'address' => $request->address,
                'trash_bank_id' => $request->trash_bank

            ]);
        } catch (Exception $e) {
            return $this->error(422, "Profil Gagal Diubah");
        }
        return $this->success("Profil berhasil Diubah", 200);
    }
    public function indexPengelola(Request $request)
    {
        $data = AppUser::with('TrashBank')->where('role', "PENGELOLA")->get();
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
}
