<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Glasses\FilterRequest;

class BrandsAllAdminController extends BaseAdminController
{
    public function __invoke(FilterRequest $filter): object
    {
        return $this->brands_service->get_all_paginator_template($filter, 'admin.brands.brands_all');
    }
}
