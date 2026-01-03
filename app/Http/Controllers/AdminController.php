<?php

namespace App\Http\Controllers;

use App\Models\Mattress;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Mattress::all();
        return view('admin.index', compact('products'));
    }

    public function destroy($id)
    {
        $mattress = Mattress::findOrFail($id);
        $mattress->delete();

        return redirect()->route('admin.index')->with('success', 'Матрац видалено!');
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Mattress::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.index')->with('success', 'Матрац успішно додано!');
    }
}
