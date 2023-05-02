<?php

namespace App\Http\Filters;

class GlassesFilter
{
    static public function glasses_filter($query, $filter)
    {
        if (isset($filter['name'])) {
            $query->where('name', 'like', "%{$filter['name']}%");
        }
        if (isset($filter['brand_select']) && $filter['brand_select'] != '...') {
            $query->where('brand_id', $filter['brand_select']);
        }
        if (isset($filter['sorted_select']) && $filter['sorted_select'] != '...') {
            if ($filter['sorted_select'] == 'Alphabet'){
                $query->orderBy('name', 'asc');
            }
            if ($filter['sorted_select']){
                $query->orderBy('price',$filter['sorted_select'] == 'Price_max' ? 'desc' : 'asc');
            }
//        if (isset($filter['category_select']) && $filter['category_select'] != '...') {
//            $query->where($this->)
//        }
        }

        return $query;
    }
}
