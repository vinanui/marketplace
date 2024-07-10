<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catering;
use App\Models\Menu;

class CateringController extends Controller
{
    public function index(Request $request)
    {
        $query = Catering::query();

        if ($request->has('location')) {
            $query->where('address', 'like', '%' . $request->input('location') . '%');
        }

        if ($request->has('food_type')) {
            $query->where('food_type', $request->input('food_type'));
        }

        $caterings = $query->get();
        return view('caterings.index', compact('caterings'));
    }

    public function show($id)
    {
        $catering = Catering::with('menus')->findOrFail($id);
        return view('caterings.show', compact('catering'));
    }
}
