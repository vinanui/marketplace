<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
            'delivery_date' => 'required|date',
        ]);

        Order::create([
            'menu_id' => $request->menu_id,
            'quantity' => $request->quantity,
            'delivery_date' => $request->delivery_date,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dibuat.');
    }
}
