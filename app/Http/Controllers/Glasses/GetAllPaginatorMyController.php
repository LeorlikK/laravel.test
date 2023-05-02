<?php

namespace App\Http\Controllers\Glasses;

use App\Http\Requests\Glasses\FilterRequest;

class GetAllPaginatorMyController extends BaseController
{
    public function __invoke(FilterRequest $filter): object
    {
        return $this->service->get_all_paginator_my($filter, 'glasses.all.glasses_all_pagination_my');
    }
}
