<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function all()
    {
        $query = News::all();
        return NewsResource::collection($query)->toJson();
    }

}
