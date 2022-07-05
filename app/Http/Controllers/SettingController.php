<?php

namespace App\Http\Controllers;

use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function all()
    {
        $query = Setting::all();
        return SettingResource::collection($query)[0]->toJson();
    }
}
