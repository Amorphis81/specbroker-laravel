<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\MetroStation;
use App\Models\ObjectType;
use Debugbar;

class BuyBusinessController extends Controller
{
    public function index()
    {
        $stations = MetroStation::has('businesses')->orderBy('name')->get();

        $object_types = ObjectType::has('businesses')->orderBy('name')->get();

        $businesses_static = Business::with('metro_stations')->orderByDesc('created_at')->get();

        return view('pages.buy.index', compact('stations', 'object_types', 'businesses_static'));
    }
}
