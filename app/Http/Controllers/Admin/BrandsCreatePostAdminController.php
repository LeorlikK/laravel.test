<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Brands\BrandsRequest;

class BrandsCreatePostAdminController extends BaseAdminController
{
    public function __invoke(BrandsRequest $brandsRequest): object
    {
        return $this->brands_service->create_post($brandsRequest, 'admin.brands');
    }
}
