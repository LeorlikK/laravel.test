<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Glasses\FilterRequest;

class GlassesAllAdminController extends BaseAdminController
{
    public function __invoke(FilterRequest $filter): object
    {
        return $this->glasses_service->get_all_paginator_template($filter, 'admin.glasses.glasses_all');
    }
}
