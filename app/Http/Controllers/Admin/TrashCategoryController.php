<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppTrashCategory;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
class TrashCategoryController extends Controller
{
    // Fungsi untuk menampilkan data kategori sampah
    public function index(Request $request)
    {
        $category = AppTrashCategory::all();
        if ($request->ajax()) {
            return DataTables::of($category)->toJson();
        }
        return view('admin.trash-category.index');
    }

    // Fungsi untuk menambahkan kategori sampah baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        AppTrashCategory::create($request->all());

        return response()->json(['message' => 'Kategori Sampah berhasil ditambahkan'], 200);
    }

    // Fungsi untuk menghapus kategori sampah
    public function destroy($id)
    {
        $category = AppTrashCategory::findOrFail($id);
        $category->delete();

        return response()->json(['message' => 'Kategori Sampah berhasil dihapus'], 200);
    }
}
