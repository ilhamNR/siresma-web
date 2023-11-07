<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppGarbageSavingsData;
use Yajra\DataTables\DataTables;

class GarbageSavingsDataController extends Controller
{
    public function index(Request $request)
    {
        $data = AppGarbageSavingsData::with('user')->with('trashCategory')->with('iot')->with('trashBank')->get();
        $data = $data->map(function($item){

            return[
                'store_date' => $item->store_date,
                'name' => $item->user->full_name ?? '',
                'trash_bank' => $item->trashBank->name ?? '',
                'category' => $item->trashCategory->category_name ?? '',
                'weight' => $item->iot->weight ?? '',
                'code' => $item->iot->code ?? '',
                'status' => $item->status ?? '',
                'admin_income' => $item->admin_balance ?? '',
                'user_income' => $item->user_balance ?? '',
                'id' => $item->id,
                'unit' => $item->trashCategory->unit ?? '',
            ];
        });
        if ($request->ajax()) {
            return DataTables::of($data)->toJson();
        }
        return view('admin.garbage-savings-data.index');
    }
}
