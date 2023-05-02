<?php

namespace App\Http\Controllers\Glasses;

use App\Http\Requests\Glasses\FilterRequest;
use Illuminate\Http\Request;

class GetAllController extends BaseController
{
    public function __invoke(FilterRequest $filter): mixed
    {
        return $this->service->get_all($filter, 'glasses.all.glasses_all');
    }
}
