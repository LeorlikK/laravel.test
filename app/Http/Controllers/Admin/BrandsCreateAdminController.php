<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;

class BrandsCreateAdminController extends BaseAdminController
{
    public function __invoke(): object
    {
        return $this->brands_service->create('admin.brands.brands_create');
    }
}
