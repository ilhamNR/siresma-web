<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppTrashCategory;
use Yajra\DataTables\DataTables;

class TrashCategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = AppTrashCategory::all();
        if ($request->ajax()) {
            return DataTables::of($category)->toJson();
        }
        return view('admin.trash-category.index');
    }
}
