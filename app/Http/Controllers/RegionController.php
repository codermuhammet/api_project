<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Http\Resources\DistrictResource;
use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getCities()
    {
        $query= City::all();
        return CityResource::collection($query)->toJson();
    }

    public function getDistricts(Request $request)
    {
        $query =  District::query()->where('il', $request->city_id)->get();
        return DistrictResource::collection($query)->toJson();
    }
}
