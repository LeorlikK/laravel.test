<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;

class BrandsReadAdminController extends BaseAdminController
{
    public function __invoke(Brand $brand, $page): object
    {
        return $this->brands_service->read($brand, $page, 'admin.brands.brands_read');
    }
}
