<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        return 'Business index';
    }

    public function create()
    {
        return 'Create business';
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function show($business_id)
    {
        $business = Business::find($business_id);
        return view('pages.single-business.index', compact('business'));
    }

    public function edit()
    {
        return 'Business edit';
    }

    public function update(Request $request)
    {
        dd($request);
    }

    public function destroy(Request $request)
    {
        dd($request);
    }
}
