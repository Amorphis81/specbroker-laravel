<?php

namespace App\Services;

use App\Models\Business;
use Debugbar;

Class BusinessFilterService
{
    public function filter($request) {
        $selected_stations = [];
        $selected_object_types = [];
        $price_from = $request->price_from;
        $price_to = $request->price_to;
        $license_type = $request->license_type;

        foreach ($request->stations as $key=>$status){
            if ($status) array_push($selected_stations, $key);
        }

        foreach ($request->object_types as $key=>$object_type){
            if ($object_type) array_push($selected_object_types, $key);
        }

        $query = Business::query();

        if (! empty($selected_stations)) {
            $query->whereHas('metro_stations', function ($query) use($selected_stations){
                $query->whereIn('metro_station_id', $selected_stations);
            });
        }

        if (! empty($price_from) ) {
            $query->where('price', '>=', $price_from);
        }

        if(! empty($price_to) ) {
            $query->where('price', '<=', $price_to);
        }

        if (! empty($selected_object_types)) {
            $query->whereHas('object_types', function ($query) use($selected_object_types){
                $query->whereIn('object_type_id', $selected_object_types);
            });
        }

        if($license_type !== '2' ) {
            $query->where('with_license', '=', (int)$license_type);
        }

        $businesses = (empty($selected_stations) &&
                       empty($selected_object_types) &&
                       empty($price_from) &&
                       empty($price_to) &&
                       $license_type === '2'
        ) ? [] : $query->get();

        return $businesses;
    }
}
