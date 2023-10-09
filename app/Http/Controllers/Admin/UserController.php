<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\AppUser;

class UserController extends Controller
{
    public function indexNasabah(Request $request){
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

    public function details($id){
        $user = AppUser::findorFail($id);
        // dd($user);
        return view('admin.users.details', compact('user'));
    }
}
