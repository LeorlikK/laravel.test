<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;

class BrandsUpdateAdminController extends BaseAdminController
{
    public function __invoke(Brand $brand, $page): object
    {
        return $this->brands_service->update($brand, $page, 'admin.brands.brands_update');
    }
}
