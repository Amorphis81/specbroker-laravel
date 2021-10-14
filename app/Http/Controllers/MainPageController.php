<?php

namespace App\Http\Controllers;

use App\Models\MetroStation;
use App\Models\ObjectType;

class MainPageController extends Controller
{
    public function index()
    {
        $stations = MetroStation::has('businesses')->orderBy('name')->get();

        $object_types = ObjectType::has('businesses')->orderBy('name')->get();

        return view('pages.home.index', compact('stations', 'object_types'));
    }
}
