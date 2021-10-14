<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\MetroStation;
use App\Services\BusinessFilterService;
use Debugbar;
use Illuminate\Http\Request;
//use App\Services\BusinessFilterService;

class AxiosMapFilterController extends Controller
{
    protected $businessFilterService;

    public function __construct(BusinessFilterService $businessFilterService)
    {
        $this->businessFilterService = $businessFilterService;
    }

    public function filter(Request $request){

        $businesses = $this->businessFilterService->filter($request);

        return $businesses;
    }
}
