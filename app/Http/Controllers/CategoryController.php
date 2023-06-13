<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    function index()
    {
        $category = category::all();
        return view('category', compact('category'));
    }

    public function create (Request $request)
    {
        $category = category::create(request()->all());
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request)
    {
        $category = category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return back()->with('success', 'Data berhasil diubah');
    }

    public function delete(Request $request)
    {
        $category = category::find($request->id);
        $category->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}


