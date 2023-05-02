<?php

namespace App\Http\Controllers\Glasses;

use App\Http\Requests\Glasses\FilterRequest;

class GetAllPaginatorTemplateController extends BaseController
{
    public function __invoke(FilterRequest $filter):object
    {
//        $this->authorize('view', auth()->user());
        return $this->service->get_all_paginator_template($filter, 'glasses.all.glasses_all_paginator_template');
    }
}
