<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::paginate(10);

        return view('admin.stock.index', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $product->update([
            'quantity' => $request->quantity,
        ]);

        return back()->with('toast_success', 'Berhasil Menambahkan Stok Produk');
    }

    /**
     * Generate stock report.
     *
     * @return View
     */
    public function report(): View
    {
        $products = Product::paginate(10);

        return view('admin.stock.report', compact('products'));
    }
}
