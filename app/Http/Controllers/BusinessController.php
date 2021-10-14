<?php

namespace App\Http\Controllers;

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

    public function show()
    {
        return 'Business show';
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
