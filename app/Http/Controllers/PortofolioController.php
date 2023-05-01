<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portofolio;

class PortofolioController extends Controller
{
    //

    public function index()
    {
        $portofolio = portofolio::all();
        return view('table', compact('portofolio'));
    }

    public function create(Request $request)
    {
        $portofolio = portofolio::create(request()->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $portofolio->image = $request->file('image')->getClientOriginalName();
            $portofolio->save();
        }
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request)
    {
        $portofolio = portofolio::find($request->id);
        $portofolio->title = $request->title;
        $portofolio->describe = $request->describe;
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $portofolio->image = $request->file('image')->getClientOriginalName();
        }
        $portofolio->save();
        return back()->with('success', 'Data berhasil diubah');
    }

    public function delete(Request $request)
    {
        $portofolio = portofolio::find($request->id);
        $portofolio->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }


}
