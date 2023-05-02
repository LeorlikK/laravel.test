<?php

namespace App\Http\Controllers\Api;

use App\Http\Filters\GlassesFilter;
use App\Http\Resources\Glasses\GlassesResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Glasses;

class ApiAllController
{
    public function api_test(\Request $request)
    {
//        $filter = $filter->validated();
//        $filter = array_filter($filter);
//        $brands = Brand::all();
//        $categories = Category::all();
//        $query = GlassesFilter::glasses_filter(Glasses::query(), $filter);
//
//        $data = $query->get();
        $data = Glasses::all();
        return GlassesResource::collection($data);
    }
}
