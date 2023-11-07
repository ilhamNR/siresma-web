<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppIOT;
use Yajra\DataTables\DataTables;


class IOTController extends Controller
{
    public function index(Request $request)
    {
        $data = AppIOT::with('trashData')->get();
        $data = $data->map(function ($item) {
            if (isset($item->trashData)) {
                $status = "LINKED";
            } else {
                $status = "UNLINKED";
            }
            return [
                'code' => $item->code,
                'weight' => $item->weight,
                'status' => $status,
                'created_at' => $item->created_at->format('Y-m-d H:i:s')
            ];
        });
        if ($request->ajax()) {
            return DataTables::of($data)->with('trashData')->toJson();
        }

        return view('admin.iot.index');
    }
}
