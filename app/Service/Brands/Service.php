<?php

namespace App\Service\Brands;

use App\Http\Filters\GlassesFilter;
use App\Http\Requests\Brands\BrandsRequest;
use App\Http\Requests\Glasses\FilterRequest;
use App\Http\Requests\Glasses\Request;
use App\Http\Requests\Glasses\UpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Glasses;

class Service
{
    public function get_all_paginator_template(FilterRequest $filter, $view_way): object
    {
        $filter = $filter->validated();
        $filter = array_filter($filter);
        $brands = Brand::paginate(5);

        return view($view_way, compact('brands', 'filter'));
    }

    public function create($view_way): object
    {
        return view($view_way);
    }

    public function create_post(BrandsRequest $brandsRequest, $view_way): object
    {
        $data = $brandsRequest->validated();
//        dd($data);
        $data = Brand::create($data);
        return redirect()->route($view_way);
    }

    public function read(Brand $brand, $page, $view_way): object
    {
        return view($view_way, compact('brand', 'page'));
    }

    public function update(Brand $brand, $page, $view_way): object
    {
        return view($view_way, compact( 'brand',  'page'));
    }

    public function update_patch(BrandsRequest $brandsRequest, Brand $patch, $view_way, $page=1): object
    {
        $data = $brandsRequest->validated();
        $patch->update($data);
        return redirect()->route($view_way, [$patch, $page]);
    }

    public function delete(Brand $brand, $view_way): object
    {
//        $restore = Glasses::withTrashed()->find($id);
//        $restore->restore();
        $brand->delete();
        return redirect()->route($view_way);
    }
}
