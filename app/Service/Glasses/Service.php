<?php

namespace App\Service\Glasses;

use App\Http\Filters\GlassesFilter;
use App\Http\Requests\Glasses\FilterRequest;
use App\Http\Requests\Glasses\Request;
use App\Http\Requests\Glasses\UpdateRequest;
use App\Http\Resources\Glasses\GlassesResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Glasses;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function PHPUnit\Framework\exactly;


class Service
{
    public function get_all(FilterRequest $filter, $view_way): mixed
    {
        try {
            DB::beginTransaction();
            $filter = $filter->validated();
            $filter = array_filter($filter);
            $brands = Brand::all();
            $categories = Category::all();
            $query = GlassesFilter::glasses_filter(Glasses::query(), $filter);

            $data = $query->get();
//            $data->sdoifhjisdujf;
            DB::commit();

        } catch (\Exception $exception){
            DB::rollBack();
            return $exception->getMessage();
        }
        return  GlassesResource::collection($data);
//        return view($view_way, compact('data', 'brands', 'categories', 'filter'));
    }

    public function get_all_paginator_my(FilterRequest $filter, $view_way): object
    {
        $filter = $filter->validated();
        $filter = array_filter($filter);
        $brands = Brand::all();
        $categories = Category::all();
        $query = GlassesFilter::glasses_filter(Glasses::query(), $filter);

        $data = $query->paginate(3)->withQueryString();
        return view($view_way, compact('data', 'brands', 'categories', 'filter'));
    }

    public function get_all_paginator_template(FilterRequest $filter, $view_way): object
    {
        $filter = $filter->validated();
        $filter = array_filter($filter);
//        dd($filter);

        $brands = Brand::all();
        $categories = Category::all();
        $query = GlassesFilter::glasses_filter(Glasses::query(), $filter);

        $data = $query->paginate(3);
        return GlassesResource::collection($data);
        return view($view_way, compact('data', 'brands', 'categories', 'filter'));
    }

    public function get_all_scroll($view_way): object
    {
        $array = Arr::add();
        $way = app_path();
        $class = class_basename('Foo\Bar\Baz');
        return back($status = 302, $headers = [], $fallback = '/');

        $data = Glasses::cursorPaginate(10);
        return view($view_way, compact('data'));
    }

    public function create($view_way): object
    {
        $brand = Brand::all(); //->only('name');
        $category = Category::all();;
//        array_push($array, $brand, $category);
        return view($view_way, compact('brand', 'category'));
    }

    public function create_post(Request $request, $view_way): object
    {
        $data = $request->validated(); // all collected only has
//        dd($data);
        $category = $request['category'];
        unset($data['category']);
        $data = Glasses::create($data);
        $data->category()->attach($category);
        return redirect()->route($view_way);
    }

    public function read(Glasses $glasses, $page, $view_way): object
    {
        return new GlassesResource($glasses);
        return view($view_way, compact('glasses', 'page'));
    }

    public function update(Glasses $glasses, $page, $view_way): object
    {
        $brand = Brand::all();
        $category = Category::all();
        return view($view_way, compact('glasses', 'brand', 'category', 'page'));
    }

    public function update_patch(UpdateRequest $updateRequest, Glasses $patch, $view_way, $page=1): object
    {
        $data = $updateRequest->validated();
        $category = $data['category'];
        unset($data['category']);
//        $update = Glasses::find($id);
        $patch->update($data);
        $patch->category()->sync($category);
        return redirect()->route($view_way, [$patch, $page]);
    }

    public function delete(Glasses $glasses, $view_way): object
    {
//        $restore = Glasses::withTrashed()->find($id);
//        $restore->restore();
        $glasses->category()->delete();
        $glasses->delete();
        return redirect()->route($view_way);
    }
}
